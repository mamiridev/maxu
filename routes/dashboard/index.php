<?php

use Illuminate\Support\Facades\Route;

Route::group(['as' => 'dashboard.'], function () {

    Route::get('/', 'DashboardController@index')->name('index');
    Route::get('/forms/basic', 'DashboardController@formsBasic')->name('form.basic');
    Route::get('/app/calendar','DashboardController@appCalendar')->name('app.calendar');
    Route::get('/app/chat','DashboardController@appChat')->name('app.chat');
    Route::get('/app/inbox','DashboardController@appInbox')->name('app.inbox');
    Route::get('/chart/c3','DashboardController@chartC3')->name('chart.c3');
    Route::get('/chart/chart/js','DashboardController@chartChartJs')->name('chart.js');
    Route::get('/chart/flot','DashboardController@chartFlot')->name('chart.flot');
    Route::get('/chart/jquery','DashboardController@chartJquery')->name('chart.jquery');
    Route::get('/chart/morris','DashboardController@chartMorris')->name('chart.morris');
    Route::get('/chart/sparkline','DashboardController@chartSparkline')->name('chart.sparkline');
    Route::get('/forms/advanced','DashboardController@formsAdvanced')->name('forms.advanced');
    Route::get('/forms/cropping','DashboardController@formsCropping')->name('forms.cropping');
    Route::get('/forms/drag/drop/upload','DashboardController@formsDragDropUpload')->name('forms.drag');

});
