<?php

namespace App\Http\Livewire\FrontEnd;

use App\Models\Book;
use App\Models\Subscription;
use Livewire\Component;

class HomeComponent extends Component
{
    public $subscription_email;
    protected $rules = ['subscription_email' => 'required|unique:subscription_email'];
    public function subscription(){
        $email = new Subscription();
        $email->subscription_email = $this->subscription_email;
        $email->save();
        session()->flash('message', 'Subscription Done !!');

    }
    public function render()
    {
        $books = Book::get();
        $newbooks = Book::latest()->get()->take(5);
        $oldbooks = Book::orderBy('created_at','asc')->get()->take(6);
        return view('livewire.front-end.home-component',['books'=>$books,'newbooks'=>$newbooks,'oldbooks'=>$oldbooks])->layout('layouts.base');
    }
}
