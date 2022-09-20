<?php

namespace App\Http\Livewire\BackEnd;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AuthorAddBookComponent extends Component
{
    use WithFileUploads;
    public $book_name;
    public $book_image;
    public $book_description;
    public $book_category;
    public $book_type;
    public $book_price;
    public $book_sale_price;
    public $book_author_name;
    public $book_pdf_file;
    public $book_index_file;
    public $book_demo_vedio;

    protected $rules = [
        'book_name' => 'required',
        'book_image' => 'required|mimes:jpeg,png',
        'book_description' => 'required',
        'book_price' => 'required',
        'book_pdf_file' => 'required|mimes:pdf|max:10000',
    ];

    public function addBook(){
        $this->validate();
        

        $books = new Book();
        $books->book_name = $this->book_name;
        $imageName = Carbon::now()->timestamp. '.' . $this->book_image->extension();
        $this->book_image->storeAs('book-images',$imageName);
        $books->book_image = 'book-images/'.$imageName;     
        $books->book_description = $this->book_description;
        $books->book_category = $this->book_category;
        $books->book_type = $this->book_type;
        $books->book_price = $this->book_price;
        $books->book_sale_price = $this->book_sale_price;
        $books->book_author_name = $this->book_author_name;

        $pdfName = Carbon::now()->timestamp. '.' . $this->book_pdf_file->extension();
        $this->book_pdf_file->storeAs('book-pdf',$pdfName);
        $books->book_pdf_file = 'book-pdf/'.$pdfName;   
        
        $pdfindexName = Carbon::now()->timestamp. '.' . $this->book_index_file->extension();
        $this->book_index_file->storeAs('book-index-pdf',$pdfindexName);
        $books->book_index_file = 'book-index-pdf/'.$pdfindexName;

        $vedioName = Carbon::now()->timestamp. '.' . $this->book_demo_vedio->extension();
        $this->book_demo_vedio->storeAs('book-demo-vedio',$vedioName);
        $books->book_demo_vedio = 'book-demo-vedio/'.$vedioName;   
        $books->save();

        session()->flash('message', 'Book Added successfully.');
    }
    public function render()
    {
        return view('livewire.back-end.author-add-book-component')->layout('layouts.dashboard');
    }
}
