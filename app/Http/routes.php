<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});

//Login
Route::post('login', 'Auth\AuthController@postLogin'); // Verificar datos
Route::get('logout', 'Auth\AuthController@logOut');

//Client
Route::get('client_index', 'ClientController@index');
Route::get('client_create', 'ClientController@create');


Route::get('clientd/{client}', 'ClientController@destroy');

Route::get('client_edit/{company}', ['uses' => 'CompanyController@edit', 'as' => 'client_edit']);

//Concept
Route::get('concept_index', 'ConceptController@index');