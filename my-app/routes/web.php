<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EntranceAPIController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/room', [Controller::class, "room"]);
Route::get('/room',function (){return view('room');});

Route::get('/join',[Controller::class,"join"])->name('join');
Route::get('/join/log', [EntranceAPIController::class, 'joinLog'])->name('join.log');

Route::get('/wait',[Controller::class,"wait"])->name('wait');

Route::get('/game', [Controller::class, 'game']);



Route::view('/delete', 'delete');
Route::post('/deletePlayer', [
  Controller::class,
  "delete"
])->name('deletePlayer');