<?php

use App\Http\Controllers\CronJobTaskController;
use App\Http\Controllers\DocumentationController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportsController;
use App\Models\CronJobTaskModel;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['guest']], function () {
    /**
     * Register Routes
     */
    Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
    Route::post('/register/perform', [RegisterController::class, 'register'])->name('register.perform');

    /**
     * Login Routes
     */
    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/soon', [HomeController::class, 'index'])->name('soon');

    Route::get('/', [HomeController::class, 'index'])->name('home.index');

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

    Route::prefix('home')->group(function () {});

    Route::prefix('domains')->group(function () {
        Route::get('/', [DomainController::class, 'index'])->name('domains.index');
        Route::post('/store', [DomainController::class, 'store']);
        Route::post('/destroy/{id}', [DomainController::class, 'destroy']);
        Route::post('/update/{id}', [DomainController::class, 'update']);
        Route::post('/datatables', [DomainController::class, 'datatables']);
    });

    Route::prefix('cronjobtask')->group(function () {
        Route::get('/', [CronJobTaskController::class, 'index'])->name('cronjobtask.index');
    });

    Route::prefix('reports')->group(function () {
        Route::get('/', [ReportsController::class, 'index'])->name('reports.index');
    });

    Route::prefix('documentation')->group(function () {
        Route::get('/', [DocumentationController::class, 'index'])->name('documentation.index');
    });
});
