<?php


//ranking page
Route::get('/', function () {
    return view('welcome');
});
Route::post('/ranking',  'rankingController@index');
Route::get('/ranking',  'rankingController@index');
Route::post('/ranking/enableTeam','rankingController@enableTeam');

//update Team
Route::get('/updateTeam/{idEquipo}',  'updateTeamController@updateTeam');
Route::post('/updateTeam/done',  'updateTeamController@updateTeamDone');

//create Team
Route::get('/createTeam', function () {
    return view('createView');
});
Route::post('/createTeam/done',  'createTeamController@createTeamDone');

