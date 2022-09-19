<?php

use App\Http\Livewire\BackEnd\AuthorAddBookComponent;
use App\Http\Livewire\BackEnd\AuthorDashboardComponent;
use App\Http\Livewire\FrontEnd\HomeComponent;
use Illuminate\Support\Facades\Route;




Route::get('/',HomeComponent::class);
Route::get('/author/dashboard',AuthorDashboardComponent::class)->name('author_dashboard');
Route::get('/author/add_book',AuthorAddBookComponent::class)->name('author_add_book');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
