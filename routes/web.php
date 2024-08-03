<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
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

// Authentification Controller 
Route::get('/', [AuthController::class, 'index']);
Route::get('/', [AuthController::class, 'index'])->name('home');

Route::get('/Register', [AuthController::class, 'registerPage'])->name('signUp');
Route::post('/Register', [AuthController::class, 'registerPost'])->name('register_action');

// Route::get('/Login', [AuthController::class, 'loginPage']);
Route::get('/Login', [AuthController::class, 'loginPage'])->name('signIn');
Route::post('/Login', [AuthController::class, 'loginPost'])->name('login_action');

Route::middleware(['auth', 'user'])->group(function(){
    // Task Page
    Route::get('/mytasks', [ToDoListController::class, 'tasks'])->name('tasks');
    
    // Completed Tasks Controller
    Route::get('/mytasks/completed', [CompletedTasksController::class, 'ListCompletedTasks'])->name('completedtasks');
    // Route::get('/mytasks/completed', [CompletedTasksController::class, 'ListCompletedTasks']);

    // To Do List Controller
    Route::post('/mytasks/add', [ToDoListController::class, 'addTask'])->name('addTask');

    Route::put('/mytasks/update/{id}', [ToDoListController::class, 'updateTask'])->name('updateTask');

    Route::delete('/mytask/delete/{id}', [ToDoListController::class, 'deleteTask'])->name('destroyTask');

    // Compeleted Tasks
    Route::post('/mytasks/markcompleted/{id}', [ToDoListController::class, 'markCompleted'])->name('markCompleted');
    Route::post('/mytasks/marknotcomplete/{id}', [ToDoListController::class, 'markNotCompleted'])->name('markNotCompleted');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});






