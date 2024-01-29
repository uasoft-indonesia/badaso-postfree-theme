<?php

use Illuminate\Support\Facades\Route;
use Uasoft\Badaso\Theme\PostfreeTheme\Controllers\HomeController;

$postfree_route_prefix = config('badaso-postfree-theme.postfree_theme_prefix');

Route::prefix($postfree_route_prefix)
    ->as('badaso.postfree-theme.')
    ->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    });

