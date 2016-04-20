<?php

use App\BusinessDetail;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::bind('business', function ($reference) {
    return BusinessDetail::whereReference($reference)->first();
});

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');

Route::get('businesses', 'BusinessController@index');
Route::get('businesses/{business}', 'BusinessController@show');
Route::get('businesses/{business}/edit', 'BusinessController@edit');
Route::patch('businesses/{business}', 'BusinessController@update');