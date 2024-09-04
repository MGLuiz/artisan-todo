<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::get('/login', [AuthController::class, 'index'])->name("login");

Route::get('/register', [AuthController::class, 'register'])->name("register");
Route::post('/register', [AuthController::class, 'storeUser'])->name("storeUser");

Route::get('/task', [TaskController::class, 'index'])->name("task.index");

Route::get('/task/new', [TaskController::class, 'create'])->name("task.create");
Route::post('/task/store', [TaskController::class, 'store'])->name("task.store");

Route::get('/task/isDone/{id}', [TaskController::class, 'isDonePut']);

Route::get('/task/edit', [TaskController::class, 'edit'])->name("task.edit");
Route::post('/task/update', [TaskController::class, 'update'])->name('task.update');

Route::get('/task/delete', [TaskController::class, 'destroy'])->name("task.delete");