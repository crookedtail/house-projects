<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    protected $guarded = [];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    /*public function addProject($project)
    {
        //eloquent relationship
        $this->projects()->create($project);
    }*/
}
