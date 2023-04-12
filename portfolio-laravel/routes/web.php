<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::post('/contact', function(Request $request){
    dd($request);
});
