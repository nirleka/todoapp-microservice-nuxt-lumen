<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'Todo App API: ' . $router->app->version();
});

$router->group(['middleware' => ['auth', 'cors'], 'prefix' => 'api'], function ($router)
{
    $router->get('me', 'AuthController@me');
});

$router->group(['prefix' => 'api/v1', 'middleware' => ['cors']], function () use ($router)
{
   $router->post('register', 'AuthController@register');
   $router->post('login', 'AuthController@login');
});
