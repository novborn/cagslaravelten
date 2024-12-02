<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('websettings', WebsettingsController::class);
    $router->resource('categories', CategoryController::class);
    $router->resource('contents', ContentController::class);
    $router->resource('frontend-menus', FrontendMenuController::class);


   



});
