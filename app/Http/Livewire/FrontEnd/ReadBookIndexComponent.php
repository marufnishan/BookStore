<?php

namespace App\Http\Livewire\FrontEnd;

use App\Models\Book;
use Livewire\Component;

class ReadBookIndexComponent extends Component
{
    public $book;
    public function mount($id){
        $this->book =Book::find($id);
    }
    public function render()
    {
        return view('livewire.front-end.read-book-index-component')->layout('layouts.read');
    }
}
