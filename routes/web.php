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

Auth::routes();

Route::get('logout', [
    'uses' => 'Auth\LogoutController@logout',
    'as' => 'logout'
]);

Route::group(['prefix' => 'items'], function() {
    Route::get('', [
        'uses' => 'ItemsController@getIndex',
        'as' => 'items.index'
    ]);
});

Route::group(['prefix' => 'departments'], function() {
    Route::get('', [
        'uses' => 'DepartmentsController@getIndex',
        'as' => 'departments.index'
    ])->middleware('auth');

    Route::get('create', [
        'uses' => 'DepartmentsController@getCreate',
        'as' => 'departments.create'
    ])->middleware('auth');

    Route::post('create', [
        'uses' => 'DepartmentsController@postCreate',
        'as' => 'departments.createDepartment'
    ])->middleware('auth');

    Route::get('update/{id}', [
        'uses' => 'DepartmentsController@getUpdate',
        'as' => 'departments.update'
    ])->middleware('auth');

    Route::post('update', [
        'uses' => 'DepartmentsController@postUpdate',
        'as' => 'departments.updateDepartment'
    ])->middleware('auth');

    Route::get('delete/{id}', [
        'uses' => 'DepartmentsController@getDelete',
        'as' => 'departments.delete'
    ])->middleware('auth');

    Route::post('delete', [
        'uses' => 'DepartmentsController@postDelete',
        'as' => 'departments.deleteDepartment'
    ])->middleware('auth');
});

Route::group(['prefix' => 'categories'], function() {
    Route::get('', [
        'uses' => 'CategoriesController@getIndex',
        'as' => 'categories.index'
    ])->middleware('auth');
    
    Route::get('detail/{id}', [
        'uses' => 'CategoriesController@getDetail',
        'as' => 'categories.detail'
    ])->middleware('auth');

    Route::get('create', [
        'uses' => 'CategoriesController@getCreate',
        'as' => 'categories.create'
    ])->middleware('auth');

    Route::post('create', [
        'uses' => 'CategoriesController@postCreate',
        'as' => 'categories.createDepartment'
    ])->middleware('auth');

    Route::get('update/{id}', [
        'uses' => 'CategoriesController@getUpdate',
        'as' => 'categories.update'
    ])->middleware('auth');

    Route::post('update', [
        'uses' => 'CategoriesController@postUpdate',
        'as' => 'categories.updateCategory'
    ])->middleware('auth');

    Route::get('delete/{id}', [
        'uses' => 'CategoriesController@getDelete',
        'as' => 'categories.delete'
    ])->middleware('auth');

    Route::post('delete', [
        'uses' => 'CategoriesController@postDelete',
        'as' => 'categories.deleteCategory'
    ])->middleware('auth');
});
