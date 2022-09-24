<?php

namespace App\Http\Livewire\BackEnd;

use App\Models\User;
use Livewire\Component;

class AuthorUserComponent extends Component
{
    public function render()
    {
        $users = User::where('utype','STD')->latest()->get();
        return view('livewire.back-end.author-user-component',['users'=>$users])->layout('layouts.dashboard');
    }
}
