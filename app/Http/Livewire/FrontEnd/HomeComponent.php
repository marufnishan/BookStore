<?php

namespace App\Http\Livewire\FrontEnd;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.front-end.home-component')->layout('layouts.base');;
    }
}
