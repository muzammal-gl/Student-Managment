<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'authenticate')->name('login.post');
    Route::get('signup', 'showSignupForm')->name('signup');
    Route::post('signup', 'signup')->name('signup.post');
});

Route::prefix('teacher')->middleware('auth')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'dashboard'])->name('dashboard');
    Route::resource('students', StudentController::class);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});

Route::prefix('student')->middleware('auth.student')->group(function () {
    Route::get('/dashboard', [StudentController::class, 'studentDashboard'])->name('student.dashboard');
    Route::get('/logout', [StudentController::class, 'logout'])->name('logout');
});
