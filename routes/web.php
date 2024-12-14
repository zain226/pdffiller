<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\DocumentController;
use App\Http\Controllers\User\EditorController;
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
    return view('frontend.index');
})->name('index');

Route::get('/user/dashboard', function () {
    return view('frontend.user.index');
})->middleware(['auth', 'verified', 'verified_phone'])->name('user.dashboard');



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('user')->name('user.')->group(function () {
        Route::prefix('document')->name('document.')->group(function () {
            Route::get('/upload', [DocumentController::class, 'create'])->name('upload');
            Route::prefix('editor')->name('editor.')->group(function () {
                Route::get('/{id?}', [EditorController::class, 'index'])->name('index');
                Route::get('/get/component', [EditorController::class, 'getComponent'])->name('get.component');
            });
        });
    });
});

Route::get('/testing', function () {

    return view('frontend.user.document.editor');
});

require __DIR__ . '/auth.php';
