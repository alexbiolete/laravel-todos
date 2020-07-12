<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'uses'  => 'TodosController@index',
    'as'    => 'todo.index'
]);

Route::post('/create', [
    'uses'  => 'TodosController@store'
]);

Route::get('/{id}/complete', [
    'uses'  => 'TodosController@complete',
    'as'    => 'todo.complete'
]);

Route::get('/{id}/edit', [
    'uses'  => 'TodosController@update',
    'as'    => 'todo.update'
]);

Route::post('/{id}/save', [
    'uses'  => 'TodosController@save',
    'as'    => 'todo.save'
]);

Route::get('/{id}/delete', [
    'uses'  => 'TodosController@delete',
    'as'    => 'todo.delete'
]);
