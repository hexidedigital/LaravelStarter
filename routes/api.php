<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// mocked route for api

Route::get('mock/{folder1}/{folder2?}/{folder3?}/{folder4?}', function (Request $request, $path) {
    $list = func_get_args();
    array_shift($list);

    $path = public_path('api/' . implode('/', $list));

    if ( ! file_exists($path)) {
        abort(404);
    }

    return file_get_contents($path);
});
