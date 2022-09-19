<?php

namespace App\Http\Livewire\BackEnd;

use Livewire\Component;

class AuthorAddBookComponent extends Component
{
    public function render()
    {
        return view('livewire.back-end.author-add-book-component')->layout('layouts.dashboard');
    }
}
