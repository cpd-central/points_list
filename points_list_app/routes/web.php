<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Project Routes
 */
Route::get('/projectcreate', 'ProjectController@create');
Route::post('/projectcreate', 'ProjectController@store');
Route::get('/projectsindex', 'ProjectController@index');
Route::get('/projectedit/{id}', 'PointsListController@relayindex');
Route::post('/projectedit/{id}', 'ProjectController@update');
Route::delete('/{id}', 'ProjectController@destroy');

/**
 *Points List Routes
 */
Route::get('/addrelay/{id}', 'PointsListController@addrelay');
Route::post('/addrelay/{id}', 'PointsListController@storerelay');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
