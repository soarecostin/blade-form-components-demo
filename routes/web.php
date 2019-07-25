<?php

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
    return view('welcome');
});

Route::get('/demo-bootstrap', function () {
    config(['blade-form-components.theme' => 'bootstrap']);

    return view('demo-bootstrap');
})->name('demo-bootstrap');

Route::get('/demo-bulma', function () {
    config(['blade-form-components.theme' => 'bulma']);

    return view('demo-bulma');
})->name('demo-bulma');

Route::get('/demo-tailwind', function () {
    config(['blade-form-components.theme' => 'tailwind']);
    
    return view('demo-tailwind');
})->name('demo-tailwind');