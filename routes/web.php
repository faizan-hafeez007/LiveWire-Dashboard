<?php

use App\Livewire\Counter;
use App\Livewire\Login;
use App\Livewire\Dashboard;
use App\Livewire\SignUp;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateDashboard;
use App\Livewire\Logout;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class)->name('counter');
Route::get('/signup', SignUp::class)->name('signup');
Route::get('/login', Login::class)->name('login');
// Route::middleware('auth')->get('/logout', Logout::class)->name('logout');
// Route::post('/logout', Logout::class)->name('logout');

Route::middleware([AuthenticateDashboard::class])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/logout', Logout::class);
});

