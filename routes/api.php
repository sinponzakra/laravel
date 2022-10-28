<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Admin\ChartController;
use App\http\Controllers\Admin\ClientReviewController;
use App\http\Controllers\Admin\ContactController;
use App\http\Controllers\Admin\CoursesController;
use App\http\Controllers\Admin\FooterController;
use App\http\Controllers\Admin\InformationController;
use App\http\Controllers\Admin\ServicecController;
use App\http\Controllers\Admin\ProjectController;
use App\http\Controllers\Admin\HomePageEtcController;





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Chart Route
Route::get('/chartdata',[ChartController::class, 'onAllSelect']);
//Client Review Route
Route::get('/clientreview',[ClientReviewController::class, 'onAllSelect']);
//Contact Form Router
Route::post('/contactsend',[ContactController::class, 'onContactSend']);
//course all Route
Route::get('/coursehome',[CoursesController::class, 'onSelectFour']);
Route::get('/courseall',[CoursesController::class, 'onSelectAll']);
Route::post('/couredetails',[CoursesController::class, 'onSelectDetails']);
//Footer Route
Route::get('/footerdata',[FooterController::class, 'onAllSelect']);
//Information Route
Route::get('/informationdata',[InformationController::class, 'onAllSelect']);
//Services Route
Route::get('/servicesdata',[ServicecController::class, 'onAllSelect']);

//project all Route
Route::get('/projecthome',[ProjectController::class, 'onSelectThree']);
Route::get('/projectall',[ProjectController::class, 'onSelectAll']);
Route::get('/projectdetails/{projectId}',[ProjectController::class, 'projectDetails']);

//Home etc all Route
Route::get('/home/video',[HomePageEtcController::class, 'selectVideo']);
Route::get('/totalhome',[HomePageEtcController::class, 'selectTotalHome']);
Route::get('/hometech',[HomePageEtcController::class, 'selectHomeTech']);
Route::get('/home/title',[HomePageEtcController::class, 'selectHomeTitle']);