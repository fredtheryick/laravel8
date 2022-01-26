<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', [UserController::class, 'getHomepage'])->name('homepage');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [UserController::class, 'getDashboard'])->name('dashboard');
    
    Route::group(['prefix' => 'user'], function () {
        Route::get('/view-profile', [UserController::class, 'getViewProfile'])->name('view.profile');
        Route::post('/update-profile', [UserController::class, 'postUpdateProfile'])->name('update.profile');
        Route::post('/change-password', [UserController::class, 'postChangePassword'])->name('change.password');
    });
});