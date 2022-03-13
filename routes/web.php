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

//HOME
$router->get('/', function () use ($router) {
    return response()->json([
        'data' =>
        ['message' => 'Api Vacinação COVID19 - Versão 1.0']
    ]);
});

//VACINAS
$router->group(['prefix' => 'vacinas'], function () use ($router) {
    $router->get('/', 'VaccineController@index');
    $router->post('/cadastrar', 'VaccineController@store');
});
