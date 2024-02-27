<?php

use Illuminate\Support\Facades\Route;
use Uasoft\Badaso\Middleware\ApiRequest;
use Uasoft\Badaso\Middleware\BadasoCheckPermissions;
use Uasoft\Badaso\Theme\PostfreeTheme\Helpers\Route as HelpersRoute;
use Uasoft\Badaso\Theme\PostfreeTheme\Controllers\HomeController;

$api_route_prefix = \config('badaso.api_route_prefix');

Route::group(['prefix' => $api_route_prefix, 'as' => 'badaso.', 'middleware' => [ApiRequest::class]], function () {
    Route::group(['prefix' => 'theme/postfree/v1'], function () {
        Route::group(['prefix' => 'postfree'], function (){

        });
    });
});



