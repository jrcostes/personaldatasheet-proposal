<?php
use App\Http\Controllers\PostController;
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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::get('/c1formsubmit', [PostController::class, 'submittal'])->name('print_data');
Route::get('/c2formsubmit', [PostController::class, 'c2form'])->name('print_data');
Route::get('/c3formsubmit', [PostController::class, 'c3form'])->name('print_data');
Route::get('/c4formsubmit', [PostController::class, 'c4form'])->name('print_data');

Route::get('/formss', function () {
    return view('form_blades.formss');
});
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

Route::get('/userdash', function(){
    return view ('userdash');
});

Route::get('/dpa', 'PostController@policy');
Route::get('/db-table', 'TableController@index');
Route::group(['middleware' => 'auth'], function () {
	Route::resource('sheets', 'TableController', ['except' => ['show']]);
});
Route::get('/edit', function () {
    return view('datatables.edit');
});
Route::get('delete', 'TableController@delete');

Route::get('/test', function(){
    return view('form_blades.formss');
});

Route::get('/pdf1print', 'TableController@pdf_print')->name('print_data');
Route::get('/pdf', function(){
    return view('print_forms.pdftemplate');
});




