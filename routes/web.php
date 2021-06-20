<?php

use App\Http\Controllers\MotorController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SiswaController;
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

Route::get('/kaos', function () {
    return view('welcome');
});

Route::get('/menumotor', function () {
    return view('motor');
});

Route::get('/kaos', [PageController::class, 'tampil']);
// Route::get('/kaos', [PageController::class, 'sprei']);
// Route::get('/kaos', [PageController::class, 'handuk']);


Route::post('/yamaha', [PageController::class, 'fyamaha']);
Route::get('/katalog', [PageController::class, 'carousel']);
// Route::get('/login', [PageController::class, 'login']);
Route::get('/beranda', [PageController::class, 'home']);
Route::get('/dashboard', [PageController::class, 'index']);
Route::get('/quiz', [PageController::class, 'fQuiz']);

// Route::get('/motor/ubah', [MotorController::class, 'edit'])->name('motor.edit');

Route::resource('/motor', (MotorController::class));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
