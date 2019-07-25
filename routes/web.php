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

$errors = new Illuminate\Support\MessageBag();
$errors->add('name', 'The name field is required');

Route::get('/demo-bootstrap', function () use ($errors) {
    config(['blade-form-components.theme' => 'bootstrap']);

    return view('demo-bootstrap')->withErrors($errors);
})->name('demo-bootstrap');

Route::get('/demo-bulma', function () use ($errors) {
    config(['blade-form-components.theme' => 'bulma']);

    return view('demo-bulma')->withErrors($errors);
})->name('demo-bulma');

Route::get('/demo-tailwind', function () use ($errors) {
    
    config(['blade-form-components.theme' => 'tailwind']);
    
    return view('demo-tailwind')->withErrors($errors);
})->name('demo-tailwind');