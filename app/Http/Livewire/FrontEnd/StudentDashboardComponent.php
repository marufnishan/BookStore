<?php

namespace App\Http\Livewire\FrontEnd;

use Livewire\Component;

class StudentDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.front-end.student-dashboard-component')->layout('layouts.dashboard');
    }
}
