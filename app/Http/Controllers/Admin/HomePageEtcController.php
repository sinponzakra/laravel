<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageEtc;


class HomePageEtcController extends Controller
{
    public function selectVideo(){
        $res = HomePageEtc::select('video_description','video_url')->get();
        return $res;
    }

    public function selectTotalHome(){
        $res = HomePageEtc::select('total_student','total_course','total_review')->get();
        return $res;
    }

    public function selectHomeTech(){
        $res = HomePageEtc::select('tech_description')->get();
        return $res;
    }

    public function selectHomeTitle(){
        $res = HomePageEtc::select('home_title','home_subtitle')->get();
        return $res;
    }
}
