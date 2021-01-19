<?php

namespace App\Models;

use App\Domain\Project\Models\Project;
use App\Domain\Trip\Models\Trip;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Consignee
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $gstin_uin
 * @property string $pan
 * @property string $state_name
 * @property int $company_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereGstinUin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee wherePan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereStateName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Consignee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Consignee extends Model
{
    use HasFactory;

    public function projects()
    {
        return Project::where('consignee_id', $this->id)->count();
    }

    public function running_projects()
    {
        $running_projects = Project::where('consignee_id', $this->id)
        ->where('status', '1')
        ->count();

        return (int)$running_projects;
    }

    public function business_done()
    {
        $all_projects = Project::where('consignee_id', $this->id)->get();
        $total_amt = 0;

        foreach($all_projects as $project)
        {
            $money = Trip::where('project_id', $project->id)->select(\DB::raw('sum(net_weight * premium_rate) AS net_money'))->first();
            $money = (int)$money->net_money;
            $total_amt = ($total_amt + $money);
        }
        return $total_amt;
    }
}
