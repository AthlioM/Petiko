<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::get('/show-task/{task}', [TaskController::class, 'show'])->name('task.show');
Route::get('/create-task', [TaskController::class, 'create'])->name('task.create');
Route::post('/store-task', [TaskController::class, 'store'])->name('task.store');

Route::get('/edit-task/{task}', [TaskController::class, 'edit'])->name('task.edit');
Route::put('/update-task/{task}', [TaskController::class, 'update'])->name('task.update');

Route::delete('/destroy-task/{task}', [TaskController::class, 'destroy'])->name('task.destroy');
