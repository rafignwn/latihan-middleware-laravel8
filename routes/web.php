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
// students
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/print', [StudentController::class, 'print']);

//  home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// profile
Route::get('/profile', [ProfilesController::class, 'index']);
Route::get('/documents', [ProfilesController::class, 'document']);
// page admin
Route::group(['middleware'=>'admin'], function(){
    Route::get('/students/create', [StudentController::class, 'create']);
    Route::post('/students', [StudentController::class, 'store']);
    Route::get('/students/{student}/edit', [StudentController::class, 'edit']);
    Route::delete('/students/{student}', [StudentController::class, 'destroy']);
    Route::patch('/students/{student}', [StudentController::class, 'update']);
});
// page dosen
Route::group(['middleware'=>'dosen'], function(){
    // dosen
    Route::get('/dosen', [TeachersController::class, 'index']);
});
Route::group(['middleware'=>'user'], function(){
});
