<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProjectType;
use App\User;

class ProjectTypesController extends Controller
{
    public function index()
    {
        $projectTree = ProjectType::with(['projects'])->get();
        //troubleshooting
//        $projectTree = ProjectType::with(['projects'])->toSql();
//        dd($projectTree);

        $userTree = User::with(['projects'])->get(); //has(), not working

        return view('projectTypes.index', compact('projectTree', 'userTree'));
    }

}
