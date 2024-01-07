<?php

use App\Http\Controllers\CabangController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');

    Route::get('/gudang', [GudangController::class, 'index'])->name('gudang.index');
    Route::get('/gudang/create', [GudangController::class, 'create'])->name('gudang.create');
    Route::post('/gudang', [GudangController::class, 'store'])->name('gudang.store');
    Route::get('/gudang/{id}/edit', [GudangController::class, 'edit'])->name('gudang.edit');
    Route::put('/gudang/{id}', [GudangController::class, 'edit'])->name('gudang.update');
    Route::match(['put', 'patch'], '/gudang/{id}', [GudangController::class, 'update'])->name('gudang.update');
    Route::delete('/gudang/{id}', [GudangController::class, 'destroy'])->name('gudang.destroy');

    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');

    Route::get('/cabang', [CabangController::class, 'index'])->name('cabang.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
});

require __DIR__ . '/auth.php';
