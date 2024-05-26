<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;
use App\Http\Controllers\CompletedTasksController;
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

Route::get('/', [ToDoListController::class, 'index']);

Route::get('/completedTasksRoute', [CompletedTasksController::class, 'ListCompletedTasks'])->name('completedtasks');

Route::post('/addTaskRoute', [ToDoListController::class, 'addTask'])->name('addTask');

Route::delete('/task/{id}', [ToDoListController::class, 'deleteTask'])->name('destroyTask');

Route::post('/markCompletedRoute/{id}', [ToDoListController::class, 'markCompleted'])->name('markCompleted');

Route::post('/markNotCompletedRoute/{id}', [ToDoListController::class, 'markNotCompleted'])->name('markNotCompleted');


