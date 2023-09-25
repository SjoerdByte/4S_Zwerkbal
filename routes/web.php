<?php

use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UpcomingTournamentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tournaments', [TournamentController::class, 'index'])->name('tournaments.index');
Route::get('/tournaments/create', [TournamentController::class, 'create'])->name('tournaments.create');
Route::post('/tournaments', [TournamentController::class, 'store'])->name('tournaments.store');
Route::get('/tournaments/{tournament}/edit', [TournamentController::class, 'edit'])->name('tournaments.edit');
Route::put('/tournaments/{tournament}', [TournamentController::class, 'update'])->name('tournaments.update');
Route::delete('/tournaments/{tournament}', [TournamentController::class, 'destroy'])->name('tournaments.destroy');

Route::get('/teams',[TeamController::class,'index'])->name('teams.index');
Route::get('/teams/create',[TeamController::class,'create'])->name('teams.create');
Route::post('/teams',[TeamController::class,'store'])->name('teams.store');
Route::get('/teams/{team}/edit',[TeamController::class,'edit'])->name('teams.edit');
Route::put('/teams/{team}',[TeamController::class,'update'])->name('teams.update');
Route::delete('/teams/{team}',[TeamController::class,'destroy'])->name('teams.destroy');

Route::get('/players',[PlayerController::class,'index'])->name('players.index');

Route::get('/upcoming', [UpcomingTournamentController::class, 'upcoming'])->name('tournaments.upcoming');

Route::get('/schools', [SchoolController::class, 'index'])->name('schools.index');
Route::get('/schools/create', [SchoolController::class, 'create'])->name('schools.create');
Route::post('/schools', [SchoolController::class, 'store'])->name('schools.store');
Route::get('/schools/{school}/edit', [SchoolController::class, 'edit'])->name('schools.edit');
Route::put('/schools/{school}', [SchoolController::class, 'update'])->name('schools.update');
Route::delete('/schools/{school}', [SchoolController::class, 'destroy'])->name('schools.destroy');
