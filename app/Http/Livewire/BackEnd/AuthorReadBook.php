<?php

namespace App\Http\Livewire\BackEnd;

use App\Models\Book;
use Livewire\Component;

class AuthorReadBook extends Component
{
    public $book;
    public function mount($id){
        $this->book =Book::find($id);
    }
    public function render()
    {
        return view('livewire.back-end.author-read-book')->layout('layouts.dashboard');
    }
}
