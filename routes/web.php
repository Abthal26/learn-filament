<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main');
});

/*Route::group(['domain' => 'site1.com'], function () {
    // Routing untuk domain pertama
    Route::get('/', function () {
        config(['app.name' => 'site 1']);
        return view('main');
    });
});

Route::group(['domain' => 'site2.com'], function () {
    // Routing untuk domain pertama
    Route::get('/', function () {
        config(['app.name' => 'site 2']);
        return view('main');
    });
});
*/