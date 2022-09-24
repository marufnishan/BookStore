<?php

namespace App\Http\Livewire\FrontEnd;

use Livewire\Component;

class StudentBookComponent extends Component
{
    public function render()
    {
        return view('livewire.front-end.student-book-component')->layout('layouts.dashboard');
    }
}
