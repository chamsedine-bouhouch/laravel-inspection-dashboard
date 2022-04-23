<?php

use App\Http\Controllers\employeesController;
use App\Http\Controllers\checklistcontroller;
use App\Models\checklist;
use App\Models\employees;
use illuminate\support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


 Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


Auth::routes();



Auth::routes();



Route::resource('employees' ,employeesController::class);
Route::resource('checklist' ,checklistcontroller::class);
Route::resource('rapport' ,reportcontroller::class);
