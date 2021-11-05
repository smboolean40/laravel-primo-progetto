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

    $data = [
        "nome" => "Samuele",
        "cognome" => "Madrigali",
        "amici" => [
            "Federico",
            "Maurizio"
        ]
    ];

    return view('index', $data);
})->name("home");

Route::get('/chi-siamo', function() {
    return view('chi-siamo');
})->name("noi");

Route::get('/contatti', function() {
    return view('contatti');
})->name("contatti");

Route::get('/blog', function() {
    return view('blog');
})->name("blog");