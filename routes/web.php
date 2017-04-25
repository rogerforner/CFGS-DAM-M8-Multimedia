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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/d3demo', function ()    {
        return view('d3demo');
    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('videoJS', 'VideoJSController@index')->name('videoJS');

    Route::get('video', 'VideoController@index')->name('video');

    Route::get('d3demo', 'D3demoController@index')->name('d3demo');

});
