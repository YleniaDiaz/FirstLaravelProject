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

Route::get('courses', [CourseController::class, 'index']);

Route::get('courses/create', [CourseController::class, 'create']);

/*Route::get('courses/{course}', function ($course) {
  return "<h1>Bienvenido al curso: ${course}</h1>";
});*/

// el ? es para un param opcional
Route::get('courses/{course}/{category?}', [CourseController::class, 'show']);