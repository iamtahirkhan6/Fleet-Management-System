<?php

namespace App\Domain\Consignee\Models;

use DB;
use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use App\Domain\Project\Models\Project;
use App\Domain\General\Models\Address;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consignee extends Model
{
    use HasFactory;
    use MultiTenable;

    protected array $fillable = ["name", "gstin", "pan"];

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
