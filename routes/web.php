<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('dashboard');

    //student
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

    //Subject
    Route::get('subjects', [SubjectController::class, 'index'])->name('subjects.index');    // Route to view all subjects (index)
    Route::get('subjects/create', [SubjectController::class, 'create'])->name('subjects.create');
    Route::post('subjects', [SubjectController::class, 'store'])->name('subjects.store');
    Route::get('subjects/{subject}/edit', [SubjectController::class, 'edit'])->name('subjects.edit');
    Route::put('subjects/{subject}', [SubjectController::class, 'update'])->name('subjects.update');
    Route::delete('subjects/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');

    //levels
    Route::get('levels', [LevelController::class, 'index'])->name('levels.index'); // List levels
    Route::get('levels/create', [LevelController::class, 'create'])->name('levels.create'); // Create level form
    Route::post('levels', [LevelController::class, 'store'])->name('levels.store'); // Store new level
    Route::get('levels/{level}/edit', [LevelController::class, 'edit'])->name('levels.edit'); // Edit level form
    Route::put('levels/{level}', [LevelController::class, 'update'])->name('levels.update'); // Update level
    Route::delete('levels/{level}', [LevelController::class, 'destroy'])->name('levels.destroy'); // Delete level

    //teachers
    Route::get('teachers', [TeacherController::class, 'index'])->name('teachers.index'); // Show all teachers
    Route::get('teachers/create', [TeacherController::class, 'create'])->name('teachers.create'); // Show form to create teacher
    Route::post('teachers', [TeacherController::class, 'store'])->name('teachers.store'); // Store new teacher
    Route::get('teachers/{teacher}/edit', [TeacherController::class, 'edit'])->name('teachers.edit'); // Show form to edit teacher
    Route::put('teachers/{teacher}', [TeacherController::class, 'update'])->name('teachers.update'); // Update teacher
    Route::delete('teachers/{teacher}', [TeacherController::class, 'destroy'])->name('teachers.destroy'); // Delete teacher

});
