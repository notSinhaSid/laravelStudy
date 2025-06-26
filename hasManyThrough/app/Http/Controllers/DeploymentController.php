<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Language;
use App\Models\Deployment;

class DeploymentController extends Controller
{
    public function add_status($langId)
    {
        $language = Language::find($langId);

        $deploy = new Deployment();
        $deploy->status = 'on=hold';

        $language->deployment()->save($deploy);
    }

    // get deployment using projec id as base
    public function show_deployment($id)
    {
        // $deploy = Project::find($id)->language->flatMap->deployment;
        $deploy = Project::find($id)->deployment;
        return $deploy;

    }
}
