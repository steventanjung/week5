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
    return view('forms');
});

Route::post('/', 'FormController@index');

Route::get('mail', function() {
    return view('mail');
});

Route::post('send_email', 'MailController@send');