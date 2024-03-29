<?php


//save games
Route::get('/saveNewGameView', 'saveGames@saveNewGameShow');
Route::post('/saveNewGame', 'saveGames@saveNewGame');

Route::get('/saveGames', 'saveGames@showInfo');
Route::post('/saveGamesShow', 'saveGames@showInfoSpecific');

//repechage
Route::get('/repechage', 'repechageController@goToworldCup');
Route::get('/playRepechage', 'repechageController@playRepechageGame');



//login
Route::get('/', 'loginController@welcome');
Route::post('/validateLogin','loginController@validateUser');


//ranking (read teams) and enable team
Route::post('/ranking',  'teamController@index');
Route::get('/ranking',  'teamController@index');
Route::post('/ranking/enableTeam','teamController@enableTeam');


//update Team
Route::get('/updateTeam/{idEquipo}',  'teamController@updateTeam');
Route::post('/updateTeam/done',  'teamController@updateTeamDone');


//create Team
Route::get('/createTeam', 'teamController@createTeam');
Route::post('/createTeam/done',  'teamController@createTeamDone');


//user register
Route::get('/register', function () {
    return view('register');
});
Route::post('/register/done',  'userController@userRegister');


//select group
Route::get('/classify-team', function () {
    return view('classifyTeam');
});