<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group([
    'prefix' => 'users',
], function (Router $router) {

    $router->get('/create', 'UsersController@create');
    $router->post('/create', 'UsersController@store')->name('store');

    $router->get('/', 'UsersController@index')->name('index');
    $router->post('/', 'UsersController@search')->name('search');
});