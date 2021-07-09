<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\TeachersController;


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
    return view('login');
});
Auth::routes();

//  home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// profile
Route::get('/profile', [ProfilesController::class, 'index']);
Route::get('/documents', [ProfilesController::class, 'document']);

Route::group(['middleware'=>'admin'], function(){
    Route::get('/students/create', [StudentController::class, 'create']);
    Route::post('/students', [StudentController::class, 'store']);
    // dosen
    Route::get('/dosen', [TeachersController::class, 'index']);
});
Route::group(['middleware'=>'dosen'], function(){
    // dosen
    Route::get('/dosen', [TeachersController::class, 'index']);
});
Route::group(['middleware'=>'user'], function(){
    // students
    Route::get('/students', [StudentController::class, 'index']);
});
