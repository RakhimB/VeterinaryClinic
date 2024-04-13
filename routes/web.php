<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AdminController;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Appointment;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [DashboardController::class, 'index']);

Route::get('/add_doctor_view', [AdminController::class, 'addview']);

Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::post('/appointment', [DashboardController::class, 'appointment']);

Route::get('/myappointment', [DashboardController::class, 'myappointment']);

Route::get('/cancel_appoint/{id}', [DashboardController::class, 'cancel_appoint']);

Route::get('/showappointment', [AdminController::class, 'showappointment']);

Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('/canceled/{id}', [AdminController::class, 'canceled']);

Route::get('/showdoctor', [AdminController::class, 'showdoctor']);

Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);

Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor'])->middleware('web');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::check() && Auth::user()->usertype == '1') {
            return view('admin.home');
        } else {
            $doctor=doctor::all();
            return view('user.home', compact('doctor'));
        }
    })->middleware('auth','verified')->name('dashboard');
});

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware(['guest'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest']);
