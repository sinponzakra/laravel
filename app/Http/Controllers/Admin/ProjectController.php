<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;


class ProjectController extends Controller
{
    public function onSelectThree(){
        $res = Projects::limit(3)->get();
        return $res;
    }

    public function onSelectAll(){
        $res = Projects::all();
        return $res;
    }

    public function projectDetails($projectId){
        $id = $projectId;
        $res = Projects::where('id', $id)->get();
        return $res;
    }
}
