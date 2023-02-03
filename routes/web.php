<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudyController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('home.home');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/study', [StudyController::class, 'index'])->name('study.index');
});

Route::prefix('/admin')->middleware(['auth', 'role:50'])->group(function () {
    Route::get('/classroom', [ClassroomController::class, 'index'])->name('admin-classroom.index');
    Route::get('/classroom/show/{id}', [ClassroomController::class, 'show'])->name('admin-classroom.show');
    Route::patch('/classroom', [ClassroomController::class, 'update'])->name('admin-classroom.update');
    Route::delete('/classroom/{id}', [ClassroomController::class, 'destroy'])->name('admin-classroom.destroy');

    Route::get('/classroom-create', [ClassroomController::class, 'create'])->name('admin-classroom.create');
    Route::post('/classroom-create', [ClassroomController::class, 'store'])->name('admin-classroom.store');
});


require __DIR__ . '/auth.php';
