<?php

/*
  one_post
  ALL_post
 */

    Route::group(['prefix' => '/articles'], function() {
        Route::get('/', 'ArticlesController@index')
                ->name('articles.index');
        Route::get('/one/{id}', 'ArticlesController@one')
                ->where('id', '[0-9]+')
                ->name('articles.one');
    });
