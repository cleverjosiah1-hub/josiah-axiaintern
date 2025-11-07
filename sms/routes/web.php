<?php
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\BursarController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\SchoolAdminController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:SuperAdmin'])->group(function(){
    Route::get('/admin/dashboard',[SuperAdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['role:SchoolAdmin'])->group(function(){
    Route::get('/school/dashboard',[SchoolAdminController::class, 'index'])->name('school.dashboard');
});

Route::middleware(['role:Teacher'])->group(function(){
    Route::get('/teacher/dashboard',[TeacherController::class, 'index'])->name('teacher.dashboard');
});

Route::middleware(['role:Student'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
});

Route::middleware(['role:Parent'])->group(function () {
    Route::get('/parent/dashboard', [ParentController::class, 'index'])->name('parent.dashboard');
});

Route::middleware(['role:Bursar'])->group(function () {
    Route::get('/bursar/dashboard', [bursarController::class, 'index'])->name('bursar.dashboard');
});

Route::get('/select-role', function () {
    return view('auth.select-role');
})->name('select.role');

// Handle role assignment and redirect
Route::post('/assign-role', [RoleController::class, 'assignRole'])->name('assign.role');

