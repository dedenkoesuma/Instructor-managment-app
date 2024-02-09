<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentationController;
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

Route::get('/', function () {
    return redirect('/login');
});

Route::post('/session', [AuthenticatedSessionController::class, 'store'])->name('session.store');

Route::get('/dokumentasi', function (){
    return view('documentation.guest.documentation');
});

Route::get('/login', function () {
    return view('auth.login');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/dashboard/schedules', ScheduleController::class);
    Route::resource('/dashboard/questions', QuestionsController::class);
    Route::get('/dashboard/documentation',[DocumentationController::class, 'documentation'])->name('documentation.auth');
});


require __DIR__.'/auth.php';
