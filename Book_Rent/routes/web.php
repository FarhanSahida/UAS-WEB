<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RentLogController;
use App\Http\Controllers\BookRentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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
//     return view('welcome');
// });
Route::get('/', [PublicController::class, 'index']);

Route::middleware('only_guest')->group(function(){
    
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function(){

    Route::get('logout', [AuthController::class, 'logout']);
    
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');
    
    Route::middleware('only_admin')->group(function(){

        Route::get('dashboard', [DashboardController::class, 'index']);

        Route::get('books', [BookController::class, 'index']);
        Route::get('books-add', [BookController::class, 'add']);
        Route::post('books-add', [BookController::class, 'send']);
        Route::get('books-edit/{slug}', [BookController::class, 'edit']);
        Route::post('books-edit/{slug}', [BookController::class, 'update']);
        Route::get('books-delete/{slug}', [BookController::class, 'delete']);
        Route::get('books-restore/{slug}', [BookController::class, 'restore']);
        Route::get('books-deleted', [BookController::class, 'deleted']);
    
        Route::get('categories', [CategoryController::class, 'index']);
        Route::get('category-add', [CategoryController::class, 'add']);
        Route::post('category-add', [CategoryController::class, 'send']);
        Route::get('category-edit/{slug}', [CategoryController::class, 'edit']);
        Route::put('category-edit/{slug}', [CategoryController::class, 'update']);
        Route::get('category-delete/{slug}', [CategoryController::class, 'delete']);
        Route::get('category-deleted', [CategoryController::class, 'deleted']);
        Route::get('category-restore/{slug}', [CategoryController::class, 'restore']);
        
        Route::get('users', [UserController::class, 'index']);
        Route::get('registered-users', [UserController::class, 'registeredUsers']);
        Route::get('users-detail/{slug}', [UserController::class, 'show']);
        Route::get('users-approve/{slug}', [UserController::class, 'approve']);
        Route::get('users-ban/{slug}', [UserController::class, 'ban']);
        Route::get('users-deleted', [UserController::class, 'deleted']);
        Route::get('users-restore/{slug}', [UserController::class, 'restore']);

        Route::get('book-rent', [BookRentController::class, 'index']);
        Route::post('book-rent', [BookRentController::class, 'store']);
    
        Route::get('rent-logs', [RentLogController::class, 'index']);
    });

    
    
});