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

function delete_form($routeParams, $title = 'Delete Business')
{
    $form = Form::open(['method' => 'DELETE', 'route' => $routeParams, 'class' => 'form-inline']);
    $form .= '<div class="form-group">';
    $form .= Form::submit($title, ["class" => "btn btn-danger"]);
    $form .= '</div>';
    return $form . Form::close();
}

Route::bind('businesses', function ($reference) {
    return BusinessDetail::whereReference($reference)->first();
});
Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');

Route::resource('businesses', 'BusinessController', [
    'only' => [
        'index', 'show', 'edit', 'update', 'create', 'store', 'destroy'
    ],
    'names' => [
        'index' => 'businesses_path',
        'show' => 'business_path',
        'edit' => 'business_edit_path',
        'create' => 'business_create_path',
        'destroy' => 'business_delete_path',
    ]
    /* 'except' => ['create'] */
]);