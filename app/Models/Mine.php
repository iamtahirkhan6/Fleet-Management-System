<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mine extends Model
{
    use HasFactory;

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function total_projects()
    {
        return Project::where('source', $this->id)->count();
    }

    public function current_projects()
    {
        return Project::where('source', $this->id)->where('status', 1)->count();
    }
}
