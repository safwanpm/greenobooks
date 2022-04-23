<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextbookController;
use App\Http\Controllers\NotebookController;

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
    return view('template');
});
Route::get('/s', function () {
    return view('school');
});
Route::get('/st', function () {
    return view('student');
});
Route::get('/tb', function () {
    return view('textbook');
});
Route::get('/atb', function () {
    return view('addtextbook');
});
// Route::get('/anb', function () {
//     return view('addnotebook');
// });
// Route::get('/nb', function () {
//     return view('notebook');
// });
Route::get('/sw', function () {
    return view('schoolwise');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('textbook', TextbookController::class);
Route::resource('notebook', NotebookController::class);