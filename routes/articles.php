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
           Route::get('/date', 'ArticlesController@rout_date')
                ->name('articles.date');
            Route::get('/inter', 'ArticlesController@inter')
                ->name('articles.inter');
    });
