<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserContoller;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[UserContoller::class,'index'])->middleware('auth');
Route::get('/login',[UserContoller::class,'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserContoller::class, 'process']);

Route::get('/signup',[UserContoller::class,'signup']);
Route::post('/logout',[UserContoller::class,'logout']);



Route::post('/store',[UserContoller::class,'store']);
