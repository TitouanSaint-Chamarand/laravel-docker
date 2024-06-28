<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/tasks', [TasksController::class, 'index']);

Route::get('tasks/add', [TasksController::class, 'create_view']);
Route::post('tasks/add', [TasksController::class, 'create']);

Route::get('tasks/edit/{id}', [TasksController::class, 'edit_view']);

