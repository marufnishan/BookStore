<?php

namespace App\Http\Livewire\FrontEnd;

use App\Models\Book;
use Livewire\Component;
use Illuminate\Http\Request;

class BookSearchComponent extends Component
{
    public function render(Request $request)
    {
        $data = Book::where('book_name', 'LIKE', '%'. $request->get('search'). '%')
                    ->get();
        $book = Book::where('book_name', $request->get('search'))
        ->first();
        $newbooks = Book::latest()->get()->take(5);
        $oldbooks = Book::orderBy('created_at','asc')->get()->take(6);
        return view('livewire.front-end.book-search-component',['data'=>$data,'book'=>$book,'newbooks'=>$newbooks,'oldbooks'=>$oldbooks])->layout('layouts.base');
    }
}
