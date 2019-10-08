<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{

    //why doesn't type hinting work?
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }

    //not using
    public function index()
    {
        $projects = Project::get();

        return view('projects.index', compact('projects'));
    }
}
