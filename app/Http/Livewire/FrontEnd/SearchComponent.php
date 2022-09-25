<?php

namespace App\Http\Livewire\FrontEnd;

use App\Models\Book;
use Livewire\Component;
use Illuminate\Http\Request;

class SearchComponent extends Component
{
    public function autocompleteSearch(Request $request)
    {
        $data = Book::select("book_name as value", "id")
                    ->where('book_name', 'LIKE', '%'. $request->get('search'). '%')
                    ->get();
    
        return response()->json($data);
    }
    public function render()
    {
        return view('livewire.front-end.search-component');
    }
}
