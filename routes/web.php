<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'home.'], function () {
    Route::get('/', 'SiteController@index')->name('index');
    Route::get('/about', 'SiteController@about')->name('about');
    Route::get('/blog', 'SiteController@blog')->name('blog');
    Route::get('/contact', 'SiteController@contact')->name('contact');
    Route::get('/portfolio', 'SiteController@portfolio')->name('portfolio');
    Route::get('/service', 'SiteController@service')->name('service');
    Route::get('/team', 'SiteController@team')->name('team');
});

//Route::prefix('dashboard')->group(base_path('routes/dashboard/index.php'));


