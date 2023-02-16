<?php

Route::group(['middleware' => ['web','admin'], 'as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Modules\Hellotest\Http\Controllers'], function()
{
    		/*
             * For DataTables
             */
            Route::post('hellotest/get', 'HellotestTableController')->name('hellotest.get');
            /*
             * User CRUD
             */
            Route::resource('hellotest', 'HellotestController');
});