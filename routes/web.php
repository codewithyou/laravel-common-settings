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



Route::get('/generate', function (Illuminate\Foundation\Application $app) {
    $app->settings->set(str_random(5),str_random(10));

    $result = $app->settings->all();

    return view('welcome',compact('result'));
})->name('generate');

Route::get('/', function (Illuminate\Foundation\Application $app) {
    $result = $app->settings->all();
    return view('welcome',compact('result'));
});

Route::get('/generate/key/{key}/value/{value}', function ($key, $value, Illuminate\Foundation\Application $app) {
    $app->settings->set($key,$value);
    $result = $app->settings->all();
    return view('welcome',compact('result'));
});

Route::get('/echo/key/{key}', function ($key, Illuminate\Foundation\Application $app) {
    $result = $app->config->get('settings.'.$key);
    return view('echo',compact('result'));
});