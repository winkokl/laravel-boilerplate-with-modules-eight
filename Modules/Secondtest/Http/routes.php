<?php

Route::group(['middleware' => ['web','admin'], 'as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Modules\SecondTest\Http\Controllers'], function()
{
    		/*
             * For DataTables
             */
            Route::post('secondtest/get', 'SecondTestTableController')->name('secondtest.get');
            /*
             * User CRUD
             */
            Route::resource('secondtest', 'SecondTestController');
});