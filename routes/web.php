<?php

use App\Http\Controllers\BookControler;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;


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

Route::get('/', [BookControler::class, 'index']);
Route::get('/famousauthor', [AuthorController::class, 'famous']);

Route::get('/rating', function () {
    return view('rating', [
        "title" => "Rating",
        "bookName" => "Jujutsu Kaisen Vol 2",
        "author" => "Gege Akutami",
        "rating" => 4
    ]);
});
