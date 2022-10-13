<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatcheController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);

Route::post('password/{id}', [UserController::class, 'updatepass']);

Route::get('fifa', [HomeController::class, 'show']);

// Route::get('group', [HomeController::class, 'group']);

Route::get('venue', [HomeController::class, 'venue']);

Route::get('matchinfo/{id}', [MatcheController::class, 'matchinfo']);

Route::get('match', [HomeController::class, 'match']);

// Route::get('player', [HomeController::class, 'player']);

Route::get('teaminfo', [TeamController::class, 'teaminfo']);

Route::get('playersearch', [HomeController::class, 'playersearch']);

Route::get('playersearch/{id}', [HomeController::class, 'player']);

Route::get('match', [MatcheController::class, 'index']);

Route::get('players', [PlayerController::class, 'index']);

Route::get('group', [TeamController::class, 'index']);
