<?php

use Illuminate\Support\Facades\Route;

//import controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContactController;

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

Route::get('/', HomeController::class)->name('home');

//->names('antiguoNombreRuta'); //para mantener el nombre de las rutas 
//->parameters('nuevaRuta' => 'nombreVariable'); 
Route::resource('course', CourseController::class);

Route::view('/about-us', 'aboutUs')->name('aboutUs');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
