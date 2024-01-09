<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
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
    $url = '/';
    return view('index', compact('url'));
})->name('index');

Route::controller(ContactController::class)->group(function () {

    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact/detail/send/', 'store')->name('contact.send');
});
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');

    Route::get('/orders', function () {
        return "OrdersList";
    })->name('orders');

    Route::get('/wishlist', function () {
        return "WishList";
    })->name('wishlist');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
