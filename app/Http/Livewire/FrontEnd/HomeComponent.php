<?php

namespace App\Http\Livewire\FrontEnd;

use App\Models\Book;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $books = Book::get();
        $newbooks = Book::latest()->get()->take(5);
        $oldbooks = Book::orderBy('created_at','asc')->get()->take(6);
        return view('livewire.front-end.home-component',['books'=>$books,'newbooks'=>$newbooks,'oldbooks'=>$oldbooks])->layout('layouts.base');
    }
}
