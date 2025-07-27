<?php

use App\Livewire\Sectors\SectorCreate;
use App\Livewire\Sectors\SectorEdit;
use App\Livewire\Sectors\SectorIndex;
use App\Livewire\Sectors\SectorShow;
use App\Livewire\Users\UserIndex;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserEdit;
use App\Livewire\Users\UserShow;

use App\Models\Sector;
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
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');


    //Users Routes
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', UserIndex::class)->name('index');
        Route::get('/create', UserCreate::class)->name('create');
        Route::get('/{id}/edit', UserEdit::class)->name('edit');
        Route::get('/{id}', UserShow::class)->name('show');
    });

    //Sectors Routes
    Route::prefix('sectors')->name('sectors.')->group(function () {
        Route::get('/', SectorIndex::class)->name('index');
        Route::get('/create', SectorCreate::class)->name('create');
        Route::get('/{id}/edit', SectorEdit::class)->name('edit');
        Route::get('/{id}', SectorShow::class)->name('show');
    });



});

require __DIR__ . '/auth.php';
