<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/admin/home', [AdminController::class, 'index'])
    ->name('admin.home')
    ->middleware('is_admin');

Route::get('/admin/books', [App\Http\Controllers\AdminController::class, 'books'])
    ->name('admin.books')
    ->middleware('is_admin');

//  Route::get('admin/books/tambah', [AdminController::class, 'submit_book'])
//     ->name('admin.book.submit')
//     ->middleware('is_admin');

Route::get('admin/print_books', [AdminController::class, 'print_books'])
    ->name('admin.print.books')
    ->middleware('is_admin');
