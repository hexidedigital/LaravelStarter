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

use YAAP\Theme\Facades\Theme;

Route::get('/', function () {
    Theme::init('default');

    return view('hello');
});
