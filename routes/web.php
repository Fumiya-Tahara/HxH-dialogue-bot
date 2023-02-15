<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DialogueController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return Redirect::to('/top');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/top', [HomeController::class, 'index'])->name('top');
    Route::get('/character', [CharacterController::class, 'create_character_view'])->name('show.character');
    Route::post('/character_post', [CharacterController::class, 'create_character_post'])->name('create.character');
    
    Route::get('/dialogue', [DialogueController::class, 'create_dialogue_view'])->name('show.dialogue');
    Route::post('/dialogue_post', [DialogueController::class, 'create_dialogue_post'])->name('create.dialogue');
});





Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
