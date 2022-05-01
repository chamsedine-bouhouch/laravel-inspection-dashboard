<?php

use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;
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


 Route::middleware(['auth'])->group(function () {
    Route::resource('employees', EmployeeController::class);
    Route::resource('checklists', ChecklistController::class);
    Route::resource('rapport', ReportController::class);
});