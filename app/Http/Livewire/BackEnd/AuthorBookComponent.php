<?php

namespace App\Http\Livewire\BackEnd;

use App\Models\Book;
use Livewire\Component;

class AuthorBookComponent extends Component
{
    public function exportBookPdf($id)
    {
            $indexpdf =Book::find($id);
            $path = public_path('assets/image/'.$indexpdf->book_pdf_file);
            return response()->download($path);
    }
    public function exportIndexPdf($id)
    {
            $indexpdf =Book::find($id);
            $path = public_path('assets/image/'.$indexpdf->book_index_file);
            return response()->download($path);
    }
    public function render()
    {
        $books = Book::latest()->get();
        return view('livewire.back-end.author-book-component',["books"=>$books])->layout('layouts.dashboard');
    }
}
