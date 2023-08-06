<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;



Route::controller(usercontroller::class)->group(function(){

    Route::get('/','index');
    Route::get('/index','index2');
    Route::get('/about','about');
    Route::get('/blog','blog');
    Route::get('/contact','contact');
    Route::get('/project','project');
    Route::get('/service','service');
    Route::get('/service-details','service_det');
    Route::get('/service-details-2','service_det_2');
    Route::get('/service-details-3','service_det_3');
    Route::get('/service-details-4','service_det_4');
    Route::get('/coming-soon','coming');
    Route::get('/testimonial','testimonial');
    Route::get('/sign','sign_up');
    Route::post('/sign','sign_up_logic');
    Route::get('/signin','sign_in');
    Route::post('/signin','sign_in_logic');
    Route::get('/modal1','modal');
    Route::get('/modal2','modal2');

});
