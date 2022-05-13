<?php

use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\FormController;
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
 Route::resource('checklists', ChecklistController::class);



 Route::middleware(['auth'])->group(function () {
    Route::get('checklist_pdf/{checklist}',[ChecklistController::class,'checklist_pdf'])->name('checklist_pdf');
    // Route::get('questionsForm/{form}',[ChecklistController::class,'questionsForm'])->name('questionsForm');
    Route::post('questionsForm/{checklist}',[ChecklistController::class,'storeQuestionsForm'])->name('storeQuestionsForm');
    Route::resource('rapport', ReportController::class);
    // 
    // 
    // 
    Route::group(['middleware' => ['admin']], function () {
        Route::resource('employees', EmployeeController::class);
        Route::resource('certifications', CertificationController::class);
        Route::resource('equipments', EquipmentController::class);
        Route::resource('certifications', CertificationController::class);
        Route::resource('forms', FormController::class);
         
    });
});

