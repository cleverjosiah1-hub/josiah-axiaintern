<?php
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:SuperAdmin'])->group(function(){
    Route::get('/admin/dashboard',[SuperAdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['role:Teacher'])->group(function(){
    Route::get('/teacher/dashboard',[TeacherController::class, 'index'])->name('teacher.dashboard');
});
