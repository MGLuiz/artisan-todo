<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::get('/task', [TaskController::class, 'index'])->name("task.index");
Route::get('/task/new', [TaskController::class, 'create'])->name("task.create");
Route::get('/task/edit', [TaskController::class, 'edit'])->name("task.edit");
Route::get('/task/delete', [TaskController::class, 'destroy'])->name("task.delete");

Route::get('/login', [AuthController::class, 'index'])->name("login");
Route::get('/register', [AuthController::class, 'register'])->name("register");