<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Models\DetailPenjualan;
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
    return view('welcome');
});

//produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
Route::delete('/produk/{id}', [ProdukController::class, 'delete'])->name('produk.delete');
Route::get('/produk/{id}', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');
//

//pelanggan
Route::get('/pelanggan',[PelangganController::class,'index'])->name('pelanggan.index');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::delete('/pelanggan/{id}', [PelangganController::class, 'delete'])->name('pelanggan.delete');
Route::get('/pelanggan/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
//

//penjualan
Route::get('/penjualan', [PenjualanController::class,'index'])->name('penjualan.index');
Route::get('/penjualan/pelanggan', [PenjualanController::class,'pelanggan'])->name('penjualan.pelanggan');
Route::get('/penjualan/pelanggan/{id}', [PenjualanController::class,'create'])->name('penjualan.create');
Route::get('/penjualan/pelanggan/edit/{kode_penjualan}', [PenjualanController::class,'edit'])->name('penjualan.edit');
//

//detail penjualan
Route::post('/penjualan/detail/create', [DetailPenjualanController::class,'create'])->name('penjualan.detail.create');
Route::get('/penjualan/detail/delete{id}', [DetailPenjualanController::class,'delete'])->name('penjualan.detail.delete');
//

//invoice/nota
Route::get('/penjualan/invoice/{kode_penjualan}', [InvoiceController::class,'invoice'])->name('penjualan.invoice');
//
