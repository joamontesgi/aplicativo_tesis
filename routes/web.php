<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LessonController;

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

Route::middleware('auth')->group(function () {
    Route::get('/index', [ResultController::class, 'index'])->name('results.index');
    Route::get('/graficos/{result}', [ResultController::class, 'graficos'])->name('results.graficos');
});

Route::middleware('auth.admin')->group(function () {
    Route::get('/adminedit', [AdminController::class, 'index'])->name('admin.index');
    Route::post('/searchUser', [AdminController::class, 'searchUser'])->name('searchUser');
    Route::post('/editUser', [AdminController::class, 'editUser'])->name('editUser');
    //---------------------------------Graps---------------------------------
    Route::get('/indexGrap', [AdminController::class, 'indexGraph'])->name('admin.indexGraph');
    Route::post('/searchUserGrap', [AdminController::class, 'searchUserGrap'])->name('searchUserGrap');
    Route::get('/graficosGrap', [AdminController::class, 'graficosGrap'])->name('admin.graficosGrap');
    Route::get('/userGraph', [AdminController::class, 'userGraph'])->name('admin.userGraph');
    
});

//----------------------------Educative----------------------------
Route::get('/lessons', [LessonController::class, 'index'])->name('lessons.index');
Route::get('/test', [LessonController::class, 'test'])->name('lessons.test');
Route::post('/test', [LessonController::class, 'submitTest'])->name('lessons.submitTest');