<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('najuzi');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('setupAndPackaging', function () {
    return view('setupAndPackaging');
});
Route::get('systemImpact', function () {
    return view('systemImpact');
});
Route::get('FAQs', function () {
    return view('FAQs');
});
Route::get('tableLibraryModule', function () {
    return view('tableLibraryModule');
});
