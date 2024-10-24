<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
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

Route::middleware('guest')->group(function() {
    Route::get('/', function () {
        return view('pages.landing.home');
    })->name('home');
    Route::get('/jobs', function() {
        return view('pages.landing.job-vacancy');
    })->name('jobs');
    Route::get('/jobs/uuid/details', function() {
        return view('pages.landing.job-details');
    })->name('jobs.details');
    Route::get('/jobs/uuid/apply', function() {
        return view('pages.landing.job-apply');
    })->name('jobs.apply');
    Route::get('/about', function() {
        return view('pages.landing.about');
    })->name('about');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::get('/login', [AuthController::class, 'index'])->name('login');
});

Route::middleware('auth')->group(function() {
    Route::middleware('roles:hr')->group(function() {
        Route::get('/dashboard', function () {
            return view('pages.features.hr.dashboard.dashboard');
        })->name('dashboard');

        Route::get('/department', function () {
            return view('pages.features.hr.department.department');
        })->name('department');

        Route::get('/report', function () {
            return view('pages.features.hr.report.report');
        })->name('report');
    });

    Route::middleware('roles:applicant')->group(function() {

    });
});
