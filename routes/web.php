<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoomTypeController;


Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
    Route::get('admin/room-types', [RoomTypeController::class, 'index'])->name('admin.room-types.index');
});

require __DIR__.'/settings.php';
