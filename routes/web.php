<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\LearningMaterialController;
use App\Http\Controllers\Admin\QuizController;

// User Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'login'])->name('user.login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

// Register Route
Route::get('/register', function () {
    return view('auth.register'); // Adjust to the actual view name for your registration form
})->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

// User Dashboard Route - Requires user to be logged in
Route::middleware(['auth:web'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});

// Admin Authentication Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::resource('admin/learning-materials', LearningMaterialController::class);

});

// Admin Dashboard & Resource Routes - Requires admin authentication
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Admin Course Management
    Route::resource('admin/courses', CourseController::class);

    // Admin Learning Materials
    Route::resource('admin/learning-materials', LearningMaterialController::class);

    // Admin Quizzes
    Route::resource('admin/quizzes', QuizController::class);
});

Route::get('admin/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');

// Store the new course
Route::post('admin/courses', [CourseController::class, 'store'])->name('admin.courses.store');

// Regular Home Page Route
Route::get('/', function () {
    return view('welcome');
});
