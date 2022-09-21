<?php

namespace App\Http\Livewire\FrontEnd;

use Livewire\Component;

class DetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.front-end.details-component')->layout('layouts.base');
    }
}
