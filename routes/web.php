<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Middleware\Authenticate;

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

// Route::get('/', function () {
//     return view('auth_layouts.login');
// });

Route::get('/dashboard',[UserController::class,'index'])->name('dashboard')->middleware(Authenticate::class);
Route::get('/register',[UserController::class,'create'])->name('auth_layouts.register');
Route::post('/register',[UserController::class,'store'])->name('auth_layouts.register');
Route::get('/login',[UserController::class,'login'])->name('auth_layouts.login');
Route::post('/',[UserController::class,'check'])->name('auth_layouts.check');
Route::post('/login',[UserController::class,'destroy'])->name('dashboard.logout');


//post route

Route::get('/',[PostController::class,'index'])->name('main');
Route::get('/dashboard/posts/create',[PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}/detail',[PostController::class,'show'])->name('posts.show');

 

