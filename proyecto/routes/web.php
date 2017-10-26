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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/goToMain', function () {
    return view('createView');
});

Route::get('/home', function () {
    return view('ranking');
});

Route::post('/ranking',  'rankingController@index');
Route::get('/ranking',  'rankingController@index');
Route::post('/ranking/enableTeam','rankingController@enableTeam');
Route::post('/create',  'createTeamController@create');
Route::post('/update',  'createTeamController@update');
Route::post('/updateElements',  'createTeamController@showTeamInformation');