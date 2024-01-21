<?php

use App\Http\Controllers\AdminHomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;

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



Auth::routes();

Route::get('/', \App\Http\Livewire\Home::class)->name('home');
Route::get('/produk', \App\Http\Livewire\Produkindex::class)->name('produk');
Route::get('/produkdetail{id}', \App\Http\Livewire\ProdukDetail::class)->name('produk.detail');
Route::get('/pesanann', \App\Http\Livewire\Pesanann::class)->name('pesanann');
Route::get('/checkout', \App\Http\Livewire\Checkout::class)->name('checkout');
Route::get('/history', \App\Http\Livewire\History::class)->name('history');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminLoginController::class, 'loginForm']);
    Route::get('/login', [AdminLoginController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::get('/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', \App\Http\Livewire\Dashboard::class)->name('admin.dashboard');
    Route::get('/pesananmasuk', \App\Http\Livewire\Pesananmasuk::class)->name('admin.pesanan');
    Route::get('/produkadmin', \App\Http\Livewire\Produkadmin::class)->name('admin.produk');
    Route::get('/riwayatpesanan', \App\Http\Livewire\Riwayatpesanan::class)->name('admin.riwayat');
    Route::get('/produkdetail{id}', \App\Http\Livewire\Produkdetailadmin::class)->name('admin.detail');
    Route::get('/tambahbarang', \App\Http\Livewire\Tambahbarang::class)->name('admin.tambah');
});
