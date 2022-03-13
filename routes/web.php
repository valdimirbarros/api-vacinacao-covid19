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
    $router->get('/', 'VaccineController@index'); //visualizar vacinas cadastradas
    $router->get('/{vaccine}', 'VaccineController@show'); //vizualizar vacina
    $router->post('/', 'VaccineController@store'); //cadastrar vacina
    $router->put('/{vaccine}', 'VaccineController@update'); //atualizar vacina
    $router->delete('/', 'VaccineController@destroy'); //excluir vacina
});

//APLICADORES
$router->group(['prefix' => 'applicator'], function () use ($router) {
    $router->get('/', 'ApplicatorController@index'); //visualizar aplicadores cadastrados
    $router->get('/{applicator}', 'ApplicatorController@show'); //vizualizar aplicador
    $router->post('/', 'ApplicatorController@store'); //cadastrar aplicador
    $router->put('/{applicator}', 'ApplicatorController@update'); //atualizar aplicador
    $router->delete('/{applicator}', 'ApplicatorController@destroy'); //excluir aplicador
});

//APLICAÇÕES (NÃO IMPLEMENTADO)
$router->group(['prefix' => 'application'], function () use ($router) {
    $router->get('/', 'ApplicationController@index'); //visualizar aplicações cadastrados
    $router->get('/{application}', 'ApplicationController@show'); //vizualizar aplicação
    $router->post('/', 'ApplicationController@store'); //cadastrar aplicação
    $router->put('/{application}', 'ApplicationController@update'); //atualizar aplicação
    $router->delete('/{application}', 'ApplicationController@destroy'); //excluir aplicação
});
