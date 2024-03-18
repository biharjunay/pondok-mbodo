<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('index');
Route::prefix("tentang-kami")->group(function () {
    Route::get('/', \App\Livewire\TentangKami::class)->name('tentang_kami');
    Route::get('/sejarah', \App\Livewire\Sejarah::class)->name('tentang_kami.sejarah');
    Route::get('/pendiri', \App\Livewire\Pendiri::class)->name('tentang_kami.pendiri');
    Route::get('/pendiri/{id}', \App\Livewire\PendiriDetail::class)->name('tentang_kami.pendiri_detail');
    Route::get('/pengurus', \App\Livewire\Pengurus::class)->name('tentang_kami.pengurus');
    Route::get('/peraturan', \App\Livewire\Peraturan::class)->name('tentang_kami.peraturan');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/dashboard', fn() => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
