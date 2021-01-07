<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignee extends Model
{
    use HasFactory;

    public function projects()
    {
        return Project::where('consignee', $this->id)->count();
    }

    public function running_projects()
    {
        $running_projects = Project::where('consignee', $this->id)
        ->where('status', '1')
        ->count();

        return (int)$running_projects;
    }

    public function business_done()
    {
        $all_projects = Project::where('consignee', $this->id)->get();
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
