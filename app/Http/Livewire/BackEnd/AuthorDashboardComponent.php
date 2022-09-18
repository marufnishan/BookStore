<?php

namespace App\Http\Livewire\BackEnd;

use Livewire\Component;

class AuthorDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.back-end.author-dashboard-component')->layout('layouts.dashboard');
    }
}
