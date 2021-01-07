<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function offices()
    {
        return $this->hasMany(Office::class);
    }

    public function total_projects()
    {
        return Project::where('company_id', $this->id)->count();
    }

    public function total_offices()
    {
        return Office::where('company_id', $this->id)->count();
    }

    public function total_employees()
    {
        return Employee::where('office_id', Office::where('company_id', $this->id)->first()->id)->count();
    }
}
