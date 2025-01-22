<?php

use App\Http\Controllers\UserController;
use App\Livewire\Authentication;
use App\Livewire\Dashboard;
use App\Livewire\UserManagement;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [Authentication::class, 'render'])->name('login');
Route::get('/', [Authentication::class, 'render'])->name('login');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [Dashboard::class, 'render'])->name('dashboard');

    Route::get('/user-management', [UserManagement::class, 'render'])->name('user-management');
    Route::get('user-management', [UserController::class, 'index']);
    Route::get('/user-management/create', [UserController::class, 'create'])->name('user-management.create');
});

Route::get('/logout', function () {
    auth()->logout();
    return redirect()->to('/login');
})->name('logout');




