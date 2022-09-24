<?php

use App\Http\Livewire\BackEnd\AuthorAddBookComponent;
use App\Http\Livewire\BackEnd\AuthorBookComponent;
use App\Http\Livewire\BackEnd\AuthorDashboardComponent;
use App\Http\Livewire\BackEnd\AuthorReadBook;
use App\Http\Livewire\BackEnd\AuthorUserComponent;
use App\Http\Livewire\FrontEnd\DetailsComponent;
use App\Http\Livewire\FrontEnd\HomeComponent;
use App\Http\Livewire\FrontEnd\ReadBookIndexComponent;
use Illuminate\Support\Facades\Route;



//Common
Route::get('/',HomeComponent::class)->name('home');
Route::get('/book_details/{id}',DetailsComponent::class)->name('book_details');
Route::get('/read_book_index/{id}',ReadBookIndexComponent::class)->name('read_book_index');

//User
/* Route::middleware(['auth:sanctum','verified'])->group(function(){

}); */

//Author
Route::middleware(['auth:sanctum','verified','authauthor'])->group(function(){
    Route::get('/author/dashboard',AuthorDashboardComponent::class)->name('author_dashboard');
    Route::get('/author/books',AuthorBookComponent::class)->name('author_books');
    Route::get('/author/add_book',AuthorAddBookComponent::class)->name('author_add_book');
    Route::get('/author/read_book/{id}',AuthorReadBook::class)->name('author_read_book');
    Route::get('/author/show/users',AuthorUserComponent::class)->name('author_show_users');

 });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
