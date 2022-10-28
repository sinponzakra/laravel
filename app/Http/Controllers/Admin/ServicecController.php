<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;


class ServicecController extends Controller
{
    public function onAllSelect(){
        $res = Services::all();
        return $res;
    }
}
