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

Route::get('/alexis', function () {
    $name = 'Alexis';
    return "<h2>${name}</h2>";
});
// ? le mettre au dessus aussi non ça pose problème
Route::get('/exo3', function () {
    $variable1 = 1;
    $variable2 = 2;
    return view('exo3', compact("variable1", "variable2"));
});

Route::get('/{nombre}', function ($nombre) {
    return view("welcome", compact("nombre"));
});

Route::get('/couleur/{color}', function($color) {
    return view('couleur', compact("color"));
});
