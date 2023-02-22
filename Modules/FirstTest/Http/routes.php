<?php

Route::group(['middleware' => ['web','admin'], 'as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Modules\FirstTest\Http\Controllers'], function()
{
    		/*
             * For DataTables
             */
            Route::post('firsttest/get', 'FirstTestTableController')->name('firsttest.get');
            /*
             * User CRUD
             */
            Route::resource('firsttest', 'FirstTestController');
});