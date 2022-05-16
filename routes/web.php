<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

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

Route::get('/', [AuthorController::class, 'index']);
Route::get('/find', [AuthorController::class, 'find']);
Route::get('/find', [AuthorController::class, 'search']);
Route::get('/author/[author]', [AuthorController::class,  'bind']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/ebit', [AuthorController::class, 'ebit']);
Route::get('/ebit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);

Route::prefix('book')->group(function() {
  Route::get('/', [BookController::class, 'index']);
  Route::get('/add', [BookController::class, 'add']);
  Route::get('/add', [BookController::class, 'create']);
});

Route::get('/relation', [AuthorController::class, 'ralate']);