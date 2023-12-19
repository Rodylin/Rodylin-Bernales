<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TraineeController;

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
    return view('home');
});
// Route::get('/user', function () {
//     return view('user');
// });
Route::get('/home', function () {
    return view('home');
});

Route::get('/user', [UserController::class,'use'])->name('user');
Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user/{user}', [UserController::class, 'edit']);
Route::delete('/user/delete/{user}', [UserController::class, 'delete']);
Route::patch('/user/{user}', [UserController::class, 'update']);
Route::post('/user/create', [UserController::class, 'store']);


Route::get('/about', [TrainorController::class,'train'])->name('trainor');
Route::get('/trainor/create', [TrainorController::class, 'create'])->name('trainor');
Route::post('/trainor/create', [TrainorController::class, 'store'])->name('trainor');





Route::get('/course', [CourseController::class,'cour'])->name('course');




