<?php

namespace App\Domain\LoadingPoint\Models;

use App\Traits\MultiTenable;
use App\Domain\Project\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoadingPoint extends Model
{
    use HasFactory;
    use MultiTenable;

    protected $table = "loading_points";

    public function totalProjects()
    {
        return Project::where('loading_point_id', $this->id)
            ->count();
    }

    public function currentProjects()
    {
        return Project::where('loading_point_id', $this->id)
            ->whereStatus(1)
            ->count();
    }

}
