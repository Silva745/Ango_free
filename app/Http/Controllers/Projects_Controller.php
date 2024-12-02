<?php

namespace App\Http\Controllers;

use App\Models\projects;
use Illuminate\Http\Request;

class Projects_Controller extends Controller
{
    public function index(){
        return view('projects.index');
    }



    public function show(projects $project){

        return view('projects.show', compact('project'));
    }
}








