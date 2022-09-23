<?php

namespace App\Http\Livewire\BackEnd;

use App\Models\User;
use Livewire\Component;

class AuthorDashboardComponent extends Component
{
    public function render()
    {
        $totalUser = User::where('utype','STD')->count();
        return view('livewire.back-end.author-dashboard-component',['totalUser'=>$totalUser])->layout('layouts.dashboard');
    }
}
