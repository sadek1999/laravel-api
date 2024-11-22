<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/students', [StudentController::class, 'index'])->name('student.index');
Route::post('/students', [StudentController::class, 'store'])->name('student.store');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('student.show');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
