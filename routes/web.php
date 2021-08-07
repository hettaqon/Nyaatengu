<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupPostsController;
use App\Http\Controllers\MangaController;

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

Route::get('/manga', [MangaController::class,'index']);
Route::get('/manga/addmanga', [MangaController::class,'create']);
Route::post('/manga', [MangaController::class,'store']);
Route::get('/manga/{post}', [MangaController::class,'show']);

Route::get('/chapter', [GroupPostsController::class,'index']);
Route::get('/group/createpost', [GroupPostsController::class,'create']);
Route::post('/chapter', [GroupPostsController::class,'store']);
Route::get('/chapter/{post}', [GroupPostsController::class,'show']);

Route::get('/ongoing', [App\Http\Controllers\OngoingController::class, 'index']);
Route::get('/completed', [App\Http\Controllers\CompletedController::class, 'index']);

