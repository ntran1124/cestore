<?php

Route::group(['prefix' => 'items'], function() {
    Route::get('', [
        'uses' => 'ItemsController@getIndex',
        'as' => 'items.index'
    ])->middleware('auth');
    
    Route::get('detail/{id}', [
        'uses' => 'ItemsController@getDetail',
        'as' => 'items.detail'
    ])->middleware('auth');

    Route::get('create', [
        'uses' => 'ItemsController@getCreate',
        'as' => 'items.create'
    ])->middleware('auth');

    Route::post('create', [
        'uses' => 'ItemsController@postCreate',
        'as' => 'items.create'
    ])->middleware('auth');

    Route::get('update/{id}', [
        'uses' => 'ItemsController@getUpdate',
        'as' => 'items.update'
    ])->middleware('auth');

    Route::post('update', [
        'uses' => 'ItemsController@postUpdate',
        'as' => 'items.updateCategory'
    ])->middleware('auth');

    Route::get('delete/{id}', [
        'uses' => 'ItemsController@getDelete',
        'as' => 'items.delete'
    ])->middleware('auth');

    Route::post('delete', [
        'uses' => 'ItemsController@postDelete',
        'as' => 'items.deleteCategory'
    ])->middleware('auth');
});
