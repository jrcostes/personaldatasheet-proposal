<?php
use App\Http\Controllers\PostController;
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

Route::get('/c1formsubmit', [PostController::class, 'c1form'])->name('print_data');
Route::get('/c2formsubmit', [PostController::class, 'c2form'])->name('print_data');
Route::get('/c3formsubmit', [PostController::class, 'c3form'])->name('print_data');
Route::get('/c4formsubmit', [PostController::class, 'c4form'])->name('print_data');

Route::get('/c1form', function () {
    return view('form_blades.c1form');
});
Route::get('/c2form', function () {
    return view('form_blades.c2form');
});
Route::get('/c3form', function () {
    return view('form_blades.c3form');
});
Route::get('/c4form', function () {
    return view('form_blades.c4form');
});

