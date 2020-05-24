<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PlayerController@index');

Route::get('teams/players/{team_id}', 'PlayerController@get_players');

Route::get('teams/{pool_id}', 'TeamController@index');

Route::get('pools', 'PoolController@get_pools');
