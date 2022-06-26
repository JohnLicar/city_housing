<?php

use App\Http\Controllers\AccountLogController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\AccountLogs;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});


require __DIR__ . '/auth.php';

Route::middleware('auth')->group(function () {

    Route::group(['middleware' =>  ['role:Admin']], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('account-log', AccountLogController::class)->name('account.log');
        Route::resource('users', UserController::class);
        Route::resource('applicants', ApplicantsController::class);
        Route::resource('roles', RolesController::class);
    });

    Route::group(['middleware' =>  ['role:User']], function () {
        Route::resource('applicant', ApplicantsController::class);
    });

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
