<?php

use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use App\Admin\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
    'as' => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->resource('news', 'NewsController');
    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('demo/users', NewsController::class);

});

