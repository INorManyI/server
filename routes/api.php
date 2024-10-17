<?php

use App\Http\Controllers\ApplicationInfoController;

Route::controller(ApplicationInfoController::class)
    ->prefix('/application-info')
    ->group(function () {
        Route::get('/php', 'getPhpInfo');
        Route::get('/client', 'getClientInfo');
        Route::get('/database', 'getDatabaseInfo');
    });
