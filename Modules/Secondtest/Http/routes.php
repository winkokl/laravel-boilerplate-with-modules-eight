<?php

Route::group(['middleware' => ['web','admin'], 'as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Modules\Secondtest\Http\Controllers'], function()
{
    		/*
             * For DataTables
             */
            Route::post('secondtest/get', 'SecondtestTableController')->name('secondtest.get');
            /*
             * User CRUD
             */
            Route::resource('secondtest', 'SecondtestController');
});