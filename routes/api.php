<?php

use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::get('/students/{student}',[StudentController::class,'show'])->name('student.show');
