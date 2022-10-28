<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courses;


class CoursesController extends Controller
{
    public function onSelectFour(){
        $res = Courses::limit(4)->get();
        return $res;
    }

    public function onSelectAll(){
        $res = Courses::all();
        return $res;
    }

    public function onSelectDetails(Request $request){
        $id = $request->input('id');
        $res = Courses::where('id', $id)->get();
        return $res;
    }
}
