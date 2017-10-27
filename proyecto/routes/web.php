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
Route::post('/ranking',  'rankingController@index');
Route::get('/ranking',  'rankingController@index');
Route::post('/ranking/enableTeam','rankingController@enableTeam');

Route::get('/updateTeam/{idEquipo}',  'rankingController@updateTeam');
Route::post('/updateTeam/done',  'rankingController@updateTeamDone');

Route::get('/createTeam', function () {
    return view('createView');
});
Route::post('/createTeam/done',  'rankingController@createTeamDone');

