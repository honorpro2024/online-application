<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\PasswordController;
use App\Http\Controllers\User\DashbaordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\ApplicationController;
use App\Http\Controllers\Admin\Auth\LogoutController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Admin\PasswordController as AdminPasswordController;
use App\Http\Controllers\Admin\ProfileController as AdminProfileController;

use App\Http\Controllers\Auth\ForgotPasswordController as UserForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController as UserResetPasswordController;

// Route::get('/', [HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [DashbaordController::class, 'index'])->name('home');

    Route::get('/dashboard', [DashbaordController::class, 'index'])->name('dashboard');

    Route::get('/application/create', [ApplicationController::class, 'create'])->name('application.create');
    Route::post('/application/create', [ApplicationController::class, 'store'])->name('application.store');


    // routes in application/create to save and retrive data every 60 seconds 

    Route::post('/save-form-data', [ApplicationController::class, 'save'])->name('application.save');
    Route::get('/save-form-data', [ApplicationController::class, 'reload'])->name('application.reload');


    // 


    Route::get('/application/edit', [ApplicationController::class, 'edit'])->name('application.edit');
    Route::put('/application/edit', [ApplicationController::class, 'update'])->name('application.update');

    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/security', [PasswordController::class, 'edit'])->name('password.edit');
    Route::post('/security', [PasswordController::class, 'update'])->name('password.update');
});


Route::group(['middleware' => 'guest'], function () {

    Route::get('/signup', [SignUpController::class, 'create'])->name('signup');
    Route::post('/signup', [SignUpController::class, 'store']);

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    Route::get('/forgot-password', [UserForgotPasswordController::class, 'create'])->name('forgot-password');
    Route::post('/forgot-password', [UserForgotPasswordController::class, 'store']);

    Route::get('/reset-password', [UserResetPasswordController::class, 'create'])->name('reset-password')->middleware('signed');
    Route::post('/reset-password', [UserResetPasswordController::class, 'store'])->name('reset-password');
});

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/login', [AuthLoginController::class, 'create'])->name('login');
    Route::post('/login', [AuthLoginController::class, 'store']);

    Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('forgot.password');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'store']);

    Route::get('/reset-password', [ResetPasswordController::class, 'create'])->name('reset.password')->middleware('signed');
    Route::post('/reset-password', [ResetPasswordController::class, 'store']);

    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile');
    Route::post('/profile', [AdminProfileController::class, 'update']);

    Route::post('/change-passwod', [AdminPasswordController::class, 'update'])->name('password.update');

    Route::post('/logout', [LogoutController::class, 'destroy'])->name('logout');

    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::post('/users/{user}/edit', [UsersController::class, 'update'])->name('users.update');
});
