<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Language;
use App\Models\Deployment;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function add_language($id)
    {
        $project = Project::find($id);

        $lang = new Language();
        $lang->name ='Express js';
        $project->language()->save($lang);
    }
}
