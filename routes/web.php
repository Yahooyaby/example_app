<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProfileController;


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

Route::get('/vanya', [FirstController::class,'show']
);
Route::get('/vanya/kva', [FirstController::class,'all']
);
Route::get('/posts',[PostController::class,'show']
);
Route::get('/profiles',[ProfileController::class,'show']);

Route::get('/sessions',[PostController::class,'index']);

//Route::match(['get', 'post'], '/read', [UserController::class, 'read'])->name('user.read');
Route::get('/users',[UserController::class,'index'])->name('user.index');
Route::get('/create',[UserController::class,'create'])->name('user.create');
Route::post('/store',[UserController::class,'store'])->name('user.store');
Route::delete('/users/{user}', [UserController::class, 'delete'])->name('user.delete');
Route::put('/users/{user}', [UserController::class, 'update'])->name('user.update');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('user.edit');


