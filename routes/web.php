<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationCategoryController;
use App\Http\Controllers\KajianCategoryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CompanyInformationController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\MiniInformationController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\KajianController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/login', 'middleware' => 'guest'], function () {
    Route::get('/', [LoginController::class, 'index'])->name('login.index');
    Route::post('/action', [LoginController::class, 'post'])->name('login.post');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('categories/donations')->group(function () {
        Route::get('/', [DonationCategoryController::class, 'index'])->name('category.donation.index');
        Route::get('/create', [DonationCategoryController::class, 'create'])->name('category.donation.create');
        Route::post('/', [DonationCategoryController::class, 'store'])->name('category.donation.store');
        Route::get('/{id}/edit', [DonationCategoryController::class, 'edit'])->name('category.donation.edit');
        Route::put('/{id}/update', [DonationCategoryController::class, 'update'])->name('category.donation.update');
        Route::delete('/{id}/destroy', [DonationCategoryController::class, 'destroy'])->name('category.donation.destroy');
    });

    Route::prefix('categories/kajian')->group(function () {
        Route::get('/', [KajianCategoryController::class, 'index'])->name('category.kajian.index');
        Route::get('/create', [KajianCategoryController::class, 'create'])->name('category.kajian.create');
        Route::post('/', [KajianCategoryController::class, 'store'])->name('category.kajian.store');
        Route::get('/{id}/edit', [KajianCategoryController::class, 'edit'])->name('category.kajian.edit');
        Route::put('/{id}/update', [KajianCategoryController::class, 'update'])->name('category.kajian.update');
        Route::delete('/{id}/destroy', [KajianCategoryController::class, 'destroy'])->name('category.kajian.destroy');
    });

    Route::prefix('setting/banner')->group(function () {
        Route::get('/', [BannerController::class, 'index'])->name('banner.index');
        Route::get('/create', [BannerController::class, 'create'])->name('banner.create');
        Route::post('/', [BannerController::class, 'store'])->name('banner.store');
        Route::delete('/{id}/destroy', [BannerController::class, 'destroy'])->name('banner.destroy');
    });

    Route::prefix('setting/amazing_groups')->group(function () {
        Route::get('/', [GroupController::class, 'index'])->name('group.index');
        Route::get('/create', [GroupController::class, 'create'])->name('group.create');
        Route::post('/', [GroupController::class, 'store'])->name('group.store');
        Route::delete('/{id}/destroy', [GroupController::class, 'destroy'])->name('group.destroy');
    });

    Route::prefix('programs')->group(function () {
        Route::get('/', [ProgramController::class, 'index'])->name('program.index');
        Route::get('/create', [ProgramController::class, 'create'])->name('program.create');
        Route::post('/', [ProgramController::class, 'store'])->name('program.store');
        Route::get('/{id}/edit', [ProgramController::class, 'edit'])->name('program.edit');
        Route::put('/{id}/update', [ProgramController::class, 'update'])->name('program.update');
        Route::delete('/{id}/destroy', [ProgramController::class, 'destroy'])->name('program.destroy');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', [CompanyInformationController::class, 'index'])->name('information.index');
        Route::get('/{id}/edit', [CompanyInformationController::class, 'edit'])->name('information.edit');
        Route::put('/{id}/update', [CompanyInformationController::class, 'update'])->name('information.update');
    });

    Route::prefix('simple-information')->group(function () {
        Route::get('/', [MiniInformationController::class, 'index'])->name('mini.info.index');
        Route::get('/create', [MiniInformationController::class, 'create'])->name('mini.info.create');
        Route::post('/', [MiniInformationController::class, 'store'])->name('mini.info.store');
        Route::get('/{id}/edit', [MiniInformationController::class, 'edit'])->name('mini.info.edit');
        Route::put('/{id}/update', [MiniInformationController::class, 'update'])->name('mini.info.update');
        Route::delete('/{id}/destroy', [MiniInformationController::class, 'destroy'])->name('mini.info.destroy');
    });

    Route::prefix('donations')->group(function () {
        Route::get('/', [DonationController::class, 'index'])->name('donation.index');
        Route::get('/create', [DonationController::class, 'create'])->name('donation.create');
        Route::post('/', [DonationController::class, 'store'])->name('donation.store');
        Route::get('/{id}/edit', [DonationController::class, 'edit'])->name('donation.edit');
        Route::put('/{id}/update', [DonationController::class, 'update'])->name('donation.update');
        Route::delete('/{id}/destroy', [DonationController::class, 'destroy'])->name('donation.destroy');
    });

    Route::prefix('kajian')->group(function () {
        Route::get('/', [KajianController::class, 'index'])->name('kajian.index');
        Route::get('/create', [KajianController::class, 'create'])->name('kajian.create');
        Route::post('/', [KajianController::class, 'store'])->name('kajian.store');
        Route::get('/{id}/edit', [KajianController::class, 'edit'])->name('kajian.edit');
        Route::put('/{id}/update', [KajianController::class, 'update'])->name('kajian.update');
        Route::delete('/{id}/destroy', [KajianController::class, 'destroy'])->name('kajian.destroy');
    });
});