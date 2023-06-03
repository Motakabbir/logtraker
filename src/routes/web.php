<?php 

// use Adlog\Logtracker\Http\Middleware\VerifyLogApiToken;
use Adlog\Logtracker\Http\Controllers\LogtrackerController;



Route::group(['prefix' => 'api/audit-panel-data'], function () {
    
    /*************Default Logs API******************/
    Route::get('/', '\Adlog\Logtracker\Http\Controllers\LogtrackerController@logApidata');

    /**************Only for MongoDB**************** */
    Route::get('/log-synchronous', '\Adlog\Logtracker\Http\Controllers\LogtrackerController@getUnsynchronousData');
    Route::post('/log-synchronous', '\Adlog\Logtracker\Http\Controllers\LogtrackerController@synchronousProcess');
});