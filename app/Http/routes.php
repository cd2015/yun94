<?php

use App\BusinessDetail;
use App\Category;

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

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');

Route::auth();

Route::get('/home', 'HomeController@index');


/*
|--------------------------------------------------------------------------
| Business Route Resource
|--------------------------------------------------------------------------
|
| This handles routing traffic for manipulation of businesses, like
| creating a business, editing, listing or viewing one business.
|
*/
Route::bind('businesses', function ($reference) {
    return BusinessDetail::whereReference($reference)->first();
});
Route::resource('businesses', 'BusinessController', [
    'only' => [
        'index', 'create', 'store', 'show', 'edit', 'update', 'destroy'
    ],
    'names' => [
        'index' => 'businesses_path',
        'create' => 'business_create_path',
        'show' => 'business_path',
        'edit' => 'business_edit_path',
        'destroy' => 'business_delete_path',
    ]
]);


/*
|--------------------------------------------------------------------------
| Category Route Resource
|--------------------------------------------------------------------------
|
| This handles routing traffic for manipulation of categories, like
| creating a category, editing, listing or viewing one category.
|
*/
Route::bind('categories', function ($id) {
    return Category::whereId($id)->first();
});
Route::get('categories/subcategories', ['as' => 'subcategories_path', 'uses' => 'CategoryController@subCategories']);
Route::resource('categories', 'CategoryController', [
    'only' => [
        'index', 'create', 'store', 'show', 'edit', 'update', 'destroy', 'showCategories'
    ],
    'names' => [
        'index' => 'categories_path',
        'create' => 'category_create_path',
        'show' => 'category_path',
        'edit' => 'category_edit_path',
        'destroy' => 'category_delete_path',
        'showCategories' => 'subcategories_path',
    ]
]);


/*
|--------------------------------------------------------------------------
| Image Route Resource
|--------------------------------------------------------------------------
|
| This handles routing traffic for routing of image files, like
| linking image paths.
|
*/
Route::get('/images/{file}', 'ImageController@getImage');