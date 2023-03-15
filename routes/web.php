<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResturantController;
use App\Http\Controllers\User\FavouriteController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return Inertia::render('Home');
})->name('dashboard')->middleware(['auth', 'verified']);

Route::get('/city/resturants', [ResturantController::class, 'index'])->name('resturants#index');

Route::get('/resturants/1/menu', [ResturantController::class, 'menuPage'])->name('resturant#menuPage');

Route::get('/order/checkout', [OrderController::class, 'checkout'])->name('order#checkout');


Route::get('/profile/index', [UserProfileController::class, 'index'])->name('profile#index')->middleware('auth');
Route::get('/favourite', [FavouriteController::class, 'index'])->name('favourite#index')->middleware('auth');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
