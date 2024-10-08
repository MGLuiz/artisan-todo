<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){

    Route::get('/', [HomeController::class, 'index'])->name("home");
    
    Route::get('/task', [TaskController::class, 'index'])->name("task.index");
    
    Route::get('/task/new', [TaskController::class, 'create'])->name("task.create");
    Route::post('/task/store', [TaskController::class, 'store'])->name("task.store");
    
    Route::post('/task/isDone', [TaskController::class, 'isDonePut']);
    
    Route::get('/task/edit', [TaskController::class, 'edit'])->name("task.edit");
    Route::post('/task/update', [TaskController::class, 'update'])->name('task.update');
    
    Route::get('/task/delete', [TaskController::class, 'destroy'])->name("task.delete");
    
});


Route::get('/login', [AuthController::class, 'index'])->name("login");
Route::post('/login', [AuthController::class, 'loginAuth'])->name("loginAuth");
Route::get('/logout', [AuthController::class, 'logout'])->name("logout");

Route::get('/register', [AuthController::class, 'register'])->name("register");
Route::post('/register', [AuthController::class, 'storeUser'])->name("storeUser");

Route::get('/ping', function () { return "pong"; });