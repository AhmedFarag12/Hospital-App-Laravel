<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/add_doctor_view',[AdminController::class,'addView']);
Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myAppointment',[HomeController::class,'myAppointment']);
Route::get('/cancelAppointment/{id}',[HomeController::class,'cancelAppointment']);
Route::get('/showAppointment',[AdminController::class,'showAppointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);
Route::get('/canceled/{id}',[AdminController::class,'canceled']);
Route::get('/showDoctor',[AdminController::class,'showDoctor']);
Route::get('/deleteDoctor/{id}',[AdminController::class,'deleteDoctor']);
Route::get('/updateDoctor/{id}',[AdminController::class,'updateDoctor']);
Route::post('/editDoctor/{id}',[AdminController::class,'editDoctor']);





