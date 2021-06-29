<?php

use Illuminate\Support\Facades\Route;

//import controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

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

Route::get('/', HomeController::class);

Route::get('courses', [CourseController::class, 'index'])->name('index.courses');

Route::get('courses/create', [CourseController::class, 'create'])->name('create.courses');

//añadir curso
Route::post('courses', [CourseController::class, 'store'])->name('store.courses');

// el ? es para un param opcional
Route::get('courses/{id}', [CourseController::class, 'show'])->name('show.courses');

Route::get('courses/{id}/edit', [CourseController::class, 'edit'])->name('edit.courses');

Route::put('course/{id}', [CourseController::class, 'update'])->name('update.courses');