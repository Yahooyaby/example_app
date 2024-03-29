<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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
Route::get('/users',[UserController::class,'show']
);
Route::prefix('menu')->group(function (){
Route::get('/alcohol', function () {
    return 'vodka';
});
Route::get('/soups', function () {
    return 'soup';
});
});

