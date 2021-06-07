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

// Homepage
Route::get('/', function () {

    $hello = [
        "hello_world" => "Hello World!"
    ];

    return view('homepage', $hello);
})->name("homepage");

//Link al sito Laravel
Route::get('/website', function () {

    return view('website');
})->name("link");

//Link alla section "chi siamo"
Route::get('/chi-siamo', function () {

    return view('chi-siamo');
})->name("about");

Route::get('/contatti', function () {

    return view('contatti');
})->name("contacts");