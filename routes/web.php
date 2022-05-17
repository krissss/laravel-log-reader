<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('log-reader.route.prefix'),
    'namespace' => config('log-reader.route.namespace'),
    'middleware' => config('log-reader.route.middleware'),
], function (Router $router) {
    $router->get('/', 'LogReaderController@index');
    $router->get('/index', 'LogReaderController@index');
    $router->get('/view', 'LogReaderController@view');
    $router->get('/tail', 'LogReaderController@tail');
    $router->get('/download', 'LogReaderController@download');
    $router->get('/delete', 'LogReaderController@delete');
});
