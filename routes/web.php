<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reservation', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/user/reviews', [ReviewController::class, 'myReviews'])->name('profile.reviews.index');
});



Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

Route::get('/menu/category/{category}', [MenuController::class, 'category'])->name('menu.category');

Route::get('/reviews/create', [ReviewController::class, 'create'])
    ->middleware('auth')
    ->name('reviews.create');
Route::post('/review', [ReviewController::class, 'store'])->name('review.store');

Route::patch('/reservation/{reservation}/status', [ReservationController::class, 'updateStatus'])->name('reservation.updateStatus');


require __DIR__.'/auth.php';
