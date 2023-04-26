<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\master;

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


Route::get('/',[master::class,'home'])->name('home');
Route::get('about',[master::class,'about'])->name('about');
Route::get('services',[master::class,'service'])->name('service');
Route::get('projects',[master::class,'projects'])->name('projects');
Route::get('contact',[master::class,'contact'])->name('contact');

