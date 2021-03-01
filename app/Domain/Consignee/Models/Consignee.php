<?php

namespace App\Domain\Consignee\Models;

use DB;
use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use App\Domain\Project\Models\Project;
use App\Domain\General\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * App\Domain\Consignee\Models\Consignee
 *
 * @property int $id
 * @property string $name
 * @property string $short_code
 * @property string|null $gstn
 * @property string|null $pan
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Address|null $address
 * @property-read \Illuminate\Database\Eloquent\Collection|Project[] $projects
 * @property-read int|null $projects_count
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereGstn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereUpdatedAt($value)
 * @mixin \Eloquent
 */

class Consignee extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $fillable = ["name", "gstn", "pan", "short_code", "company_id"];

    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function totalProjects()
    {
        return $this->projects()->count();
    }

    public function runningProjects()
    {
        $running_projects = Project::where('consignee_id', $this->id)->where('status', '1')->count();

        return (int) $running_projects;
    }

    public function businessDone()
    {
        $all_projects = $this->projects;
        $total_amt    = 0;

        foreach ($all_projects as $project) {
            $money     = Trip::where('project_id', $project->id)->select(DB::raw('sum(net_weight * premium_rate) AS net_money'))->first();
            $money     = (int) $money->net_money;
            $total_amt = ($total_amt + $money);
        }
        return $total_amt;
    }

}
