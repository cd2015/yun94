<?php

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
Route::bind('business_detail', function($business_reference){
 return App\BusinessDetail::whereBusinessReference($business_reference)->first();"";
});

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');

Route::get('business', 'BusinessController@index');
Route::get('business/{business_detail}', 'BusinessController@show');