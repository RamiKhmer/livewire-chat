<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;

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

// Route::get('users', CreateChat::class)->name('users');
// Route::get('/chat{key?}', Main::class)->name('chat');

Route::get('/users', function(){
    return view('users');
})->name('users');

Route::get('/chat{key?}', function(){
    return view('chat');
})->name('chat');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
