<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorCOntroller;
use App\Model\Person;
use App\Models\Product;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/auth', [AuthorController::class, 'check']);
Route::post('/auth', [AuthorController::class, 'checkUser']);

require __DIR__.'/auth.php';

Route::get('/softdelete', function () {
    Person::find(1)->delete();
});

Route::get('softdelete/get', function() {
    $person = Person::onlyTrashed()->get();
    dd($person);
});

Route::get('softdelete/store', function() {
    $result = Person::onlyTrashed()->restore();
    echo $result;
});

Route::get('softdelete/absolute', function() {
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
});


Route::get('uuid', function() {
    $products = product::all();
    foreach($products as $product) {
        echo $product, '<br>';
    }
});

Route::get('fill', [BookController::class, 'fillBook']);
Route::get('create', [BookController::class, 'createBook']);
Route::get('insert', [BookController::class, 'insertBook']);