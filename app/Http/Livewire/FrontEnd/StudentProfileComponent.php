<?php

namespace App\Http\Livewire\FrontEnd;

use Livewire\Component;

class StudentProfileComponent extends Component
{
    public function render()
    {
        return view('livewire.front-end.student-profile-component')->layout('layouts.dashboard');
    }
}
