<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Language;
use App\Models\Deployment;

class ProjectController extends Controller
{
    public function add_project()
    {
        $project = new Project();
        $project->projectName = 'School-Day';
        $project->save();
    }
}
