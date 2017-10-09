<?php

/*
  one_post
  ALL_post
 */

Route::group(['prefix' => '/admin'], function() {
    Route::get('/', 'AdminController@index')
            ->name('admin.index');
    Route::get('/edit/{id}', 'AdminController@edit')
            ->where('id', '[0-9]+')
            ->name('admin.edit');
    Route::get('/add', 'AdminController@add')
            ->name('admin.add');
    Route::get('/delete/{id}', 'AdminController@delete')
            ->where('id', '[0-9]+')
            ->name('admin.delete');
});

Route::group(['prefix' => '/admin/users'], function() {
    Route::get('/', 'AdminUsersController@all')
            ->name('admin.users.all');
    Route::get('/login/', 'AdminUsersController@login')
            ->name('admin.users.register');
    Route::get('/register/', 'AdminUsersController@register')
            ->name('admin.register');
});
