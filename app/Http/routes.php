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

Route::bind('businesses', function ($reference) {
    return BusinessDetail::whereReference($reference)->first();
});
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');

Route::resource('businesses', 'BusinessController', [
    'only' => [
        'index', 'show', 'edit', 'update', 'create', 'store',
    ],
    'names' => [
        'index' => 'businesses_path',
        'show' => 'business_path',
        'edit' => 'business_edit_path',
        'create' => 'business_create_path',
        //'delete' => 'business_delete_path',
    ]
    /* 'except' => ['create'] */
]);