<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/index', function () {
//     return view('index-2');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/blog', function () {
//     return view('blog');
// });
// Route::get('/coming-soon', function () {
//     return view('coming-soon');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/project', function () {
//     return view('project');
// });
// Route::get('/service-details-2', function () {
//     return view('service-details-2');
// });
// Route::get('/service-details', function () {
//     return view('service-details');
// });
// Route::get('/service-details-3', function () {
//     return view('service-details-3');
// });
// Route::get('/service-details-4', function () {
//     return view('service-details-4');
// });
// Route::get('/service', function () {
//     return view('service');
// });
// Route::get('/testimonial', function () {
//     return view('testimonial');
// });


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


});