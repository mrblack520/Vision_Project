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
    Route::get('/admin' , 'admin_panel');
    Route::get('/dash' , 'dashboard');
    Route::get('/modal1','modal');
    Route::get('/modal2','modal2');
    Route::get('/modal3','modal3');
    Route::get('/modal4','modal4');
    Route::get('/modal5','modal5');
    Route::get('/modal6','modal6');
    Route::get('/modal7','modal7');
    Route::get('/modal8','modal8');
    Route::get('/modal9','modal9');
    Route::get('/modal10','modal10');
    Route::get('/modal11','modal11');
    Route::get('/modal12','modal12');
    Route::get('/modal13','modal13');
    Route::get('/modal14','modal14');
    Route::get('/modal15','modal15');
    Route::get('/reports','report');
    Route::get('/clients','clients');

});
