<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::livewire('/admin', 'admin.dashboard')
    ->layout('livewire.admin.master')->name('admin.home');

Route::livewire('/admin/tempat', 'admin.tempat.index')
    ->layout('livewire.admin.master')->name('admin.tempat');
Route::livewire('/admin/tempat/create', 'admin.tempat.create')
    ->layout('livewire.admin.master')->name('admin.tempat.create');
Route::livewire('/admin/tempat/edit/{id}', 'admin.tempat.edit')
    ->layout('livewire.admin.master')->name('admin.tempat.edit');

Route::livewire('/admin/vaksinasi', 'admin.vaksinasi.index')
    ->layout('livewire.admin.master')->name('admin.vaksinasi');
Route::livewire('/admin/vaksinasi/create', 'admin.vaksinasi.create')
    ->layout('livewire.admin.master')->name('admin.vaksinasi.create');
Route::livewire('/admin/vaksinasi/edit/{id}', 'admin.vaksinasi.edit')
    ->layout('livewire.admin.master')->name('admin.vaksinasi.edit');

Route::livewire('/admin/laporan/peserta', 'admin.laporan.index')
    ->layout('livewire.admin.master')->name('admin.laporan.perserta');
// Route::livewire('/admin/laporan/vaksinasi', 'admin.dashboard')
//     ->layout('livewire.admin.master')->name('admin.home');
// Route::livewire('/admin/laporan/tempat', 'admin.dashboard')
//     ->layout('livewire.admin.master')->name('admin.home');

// Route::livewire('/admin/peserta', 'admin.dashboard')
//     ->layout('livewire.admin.master')->name('admin.home');

// Route::livewire('/admin/cekpeserta', 'admin.dashboard')
//     ->layout('livewire.admin.master')->name('admin.home');