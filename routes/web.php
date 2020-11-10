<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

// Making use of the auth middleware
// Route::middleware('auth')->group(function(){

// });

Route::resource('/todo', 'TodoController');

Route::put('/todos/complete/{todo}', 'TodoController@complete')->name('todo.complete');

Route::put('/todos/incomplete/{todo}', 'TodoController@incomplete')->name('todo.incomplete');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
