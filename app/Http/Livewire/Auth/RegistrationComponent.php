<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Livewire\WithFileUploads;

class RegistrationComponent extends Component
{
    use WithFileUploads;
    public function render()
    {
        return view('livewire.auth.registration-component');
    }
}
