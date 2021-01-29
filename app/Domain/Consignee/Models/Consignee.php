<?php

namespace App\Domain\Consignee\Models;

use DB;
use App\Traits\MultiTenable;
use App\Domain\Trip\Models\Trip;
use App\Domain\Project\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consignee extends Model
{
    use HasFactory;
    use MultiTenable;

    public function projects()
    {
        return Project::where('consignee_id', $this->id)->count();
    }

    public function running_projects()
    {
        $running_projects = Project::where('consignee_id', $this->id)->where('status', '1')->count();

        return (int) $running_projects;
    }

    public function business_done()
    {
        $all_projects = Project::where('consignee_id', $this->id)->get();
        $total_amt    = 0;

        foreach ($all_projects as $project) {
            $money     = Trip::where('project_id', $project->id)->select(DB::raw('sum(net_weight * premium_rate) AS net_money'))->first();
            $money     = (int) $money->net_money;
            $total_amt = ($total_amt + $money);
        }
        return $total_amt;
    }
}
