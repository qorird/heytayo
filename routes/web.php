<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PagesController;

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
    return view('index');
});

Route::get('/home', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/blog', [PagesController::class, 'blog']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/portofolio', [PagesController::class, 'portfolio']);
Route::get('/service', [PagesController::class, 'service']);
Route::get('/single', [PagesController::class, 'single']);
Route::get('/team', [PagesController::class, 'team']);
Route::get('/admin', [PagesController::class, 'admin']);

Route::resource('pegawai', PegawaiController::class);