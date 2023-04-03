<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

// Route::get('/about', [HomeController::class, 'index']);
// Route::get('/kartun', [HomeController::class, 'kartun']);

// Route::get('/presiden', [HomeController::class, 'presiden']);

// Route::get('/hello',[HomeController::class, 'hello']);

// Route::get('/debug',[HomeController::class, 'debug']);

//USER
Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');

Route::get('/edit-profile/{id}', [UserController::class, 'editProfile'])->name('edit.profile');
Route::patch('/update-profile/{id}', [UserController::class, 'updateProfile'])->name('update.profile');

Route::delete('/delete-profile/{id}', [UserController::class, 'deleteProfile'])->name('delete.profile');

Route::get('/user-list', [UserController::class, 'userList'])->name('user.list')->middleware('is_admin');

//TASK
Route::get('/tasks', [TaskController::class, 'index'])->name('home');
Route::get('/tasks/{id}', [TaskController::class, 'show']);

Route::get('/search', [TaskController::class, 'search'])->name('search');

//Tambah data
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create')->middleware('is_admin');
Route::post('/tasks', [TaskController::class, 'store'])->middleware('is_admin');

//Edit data
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit')->middleware('is_admin');
Route::patch('/tasks/{id}', [TaskController::class, 'update'])->name('task.update')->middleware('is_admin');

Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('task.destroy')->middleware('is_admin');

//Priority
Route::get('/priorities', [PriorityController::class, 'index'])->name('priority.index');
Route::get('/priorities-create', [PriorityController::class, 'create'])->name('priority.create');
Route::post('/priorities-store', [PriorityController::class, 'store'])->name('priority.store');
Route::get('/priorities-edit/{id}', [PriorityController::class, 'edit'])->name('priority.edit');
Route::patch('/priorities-update/{id}', [PriorityController::class, 'update'])->name('priority.update');
Route::delete('/priorities-delete/{id}', [PriorityController::class, 'destroy'])->name('priority.destroy');
