<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\DashboardController as UserDashBoard;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\OrderController;
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

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
    Route::resource('products', ProductController::class);
    Route::get('orders', [AdminOrderController::class, 'index'])->name('orders');
});

Route::group(['as' => '', 'prefix' => '', 'middleware' => ['auth', 'isUser']], function () {
    Route::get('dashboard', [UserDashboard::class, 'index'])->name('dashboard');
    Route::resource('orders', OrderController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
