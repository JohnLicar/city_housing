<?php

use App\Http\Controllers\{
    AccountLogsController,
    ApplicantsController,
    DashboardController,
    HousingUnitController,
    RolesController,
    UserController
};

use App\Http\Livewire\AccountLogs;
use App\Http\Livewire\HousingUnit\HousingUnit;
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

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('roles', RolesController::class);
    Route::resource('housingprojects', HousingUnitController::class);

    Route::resource('applicants', ApplicantsController::class)->except('show');
    Route::get('applicants/{applicant}', [ApplicantsController::class, 'show'])->name('applicants.show')->withTrashed();


    Route::resource('accountlogs', AccountLogsController::class);

    Route::get('housingunits', HousingUnit::class)->name('housingunits');


    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
