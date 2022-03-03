<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Admin\AdminController;

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

Route::post('/requests', [AppointmentController::class, 'store'])->name('appointments.store'); // Создание поста
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/appointment/procedures/{id}', [AppointmentController::class, 'getProcedures'])->name('procedures_modal');