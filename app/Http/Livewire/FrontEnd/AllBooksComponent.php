<?php

namespace App\Http\Livewire\FrontEnd;

use App\Models\Book;
use Livewire\Component;

class AllBooksComponent extends Component
{
    public function render()
    {
        $books = Book::latest()->paginate(5);
        return view('livewire.front-end.all-books-component',['books'=>$books])->layout('layouts.base');
    }
}
