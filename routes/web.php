<?php

use App\Http\Controllers\ProfileController;
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


Route::name('frontend.')->group(function () {

    Route::get('/', function () {
        return view('frontend.index');
    })->name('index');

    Route::get('/packages', function () {
        return view('frontend.packages.packages');
    })->name('packages');
    Route::get('/package-details', function () {
        return view('frontend.packages.package-details');
    })->name('package-details');
    Route::get('/contact-us', function () {
        return view('frontend.contact-us');
    })->name('contact-us');

    Route::prefix('about')->name('about.')->group(function () {
        Route::get('/agents', function () {
            return view('frontend.abouts.agent');
        })->name('agents');

        Route::get('/who-we-are', function () {
            return view('frontend.abouts.who-we-are');
        })->name('who-we-are');
    });
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
