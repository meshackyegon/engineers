<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
  return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
  ->middleware(['auth', 'verified'])
  ->name('dashboard');

Route::middleware(['auth'])->group(function () {
  Route::redirect('settings', 'settings/profile');

  Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
  Volt::route('settings/password', 'settings.password')->name('settings.password');
  
  // Membership payments
  Route::get('payments', [App\Http\Controllers\PaymentsController::class, 'index'])->name('payments.index');
  Route::post('payments/mpesa', [App\Http\Controllers\PaymentsController::class, 'mpesa'])->name('payments.mpesa');
});

require __DIR__ . '/auth.php';
