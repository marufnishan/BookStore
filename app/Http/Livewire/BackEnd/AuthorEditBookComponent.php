<?php

namespace App\Http\Livewire\BackEnd;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AuthorEditBookComponent extends Component
{
    use WithFileUploads;

    public $book_id;

    public $book_name;
    public $book_image;
    public $book_new_image;
    public $book_description;
    public $book_category;
    public $book_type;
    public $book_price;
    public $book_sale_price;
    public $book_author_name;
    public $book_pdf_file;
    public $book_new_pdf_file;
    public $book_index_file;
    public $book_new_index_file;
    public $book_demo_vedio;
    public $book_new_demo_vedio;

    

    public function mount($id){
        $this->book_id = $id;
        $book = Book::find($this->book_id);
        $this->book_name = $book->book_name;
        $this->book_image = $book->book_image;
        $this->book_description = $book->book_description;
        $this->book_category = $book->book_category;
        $this->book_type = $book->book_type;
        $this->book_price = $book->book_price;
        $this->book_sale_price = $book->book_sale_price;
        $this->book_author_name = $book->book_author_name;
        $this->book_pdf_file = $book->book_pdf_file;
        $this->book_index_file = $book->book_index_file;
        $this->book_demo_vedio = $book->book_demo_vedio;

    }

    public function UpdateBook(){
        $book = Book::find($this->book_id);
        $book->book_name = $this->book_name;
        if($this->book_new_image)
        {
            unlink('assets/image/'.$book->book_image);
            $imageName = Carbon::now()->timestamp. '.' . $this->book_new_image->extension();
            $this->book_new_image->storeAs('book-images',$imageName);
            $book->book_image = 'book-images/'.$imageName;
        }   
        $book->book_description = $this->book_description;
        $book->book_category = $this->book_category;
        $book->book_type = $this->book_type;
        $book->book_price = $this->book_price;
        $book->book_sale_price = $this->book_sale_price;
        $book->book_author_name = $this->book_author_name;

        if($this->book_new_pdf_file)
        {
            unlink('assets/image/'.$book->book_pdf_file);
            $pdfName = Carbon::now()->timestamp. '.' . $this->book_new_pdf_file->extension();
            $this->book_new_pdf_file->storeAs('book-pdf',$pdfName);
            $book->book_pdf_file = 'book-pdf/'.$pdfName;   
        }
        if($this->book_new_index_file)
        {
            unlink('assets/image/'.$book->book_index_file);
            $pdfindexName = Carbon::now()->timestamp. '.' . $this->book_new_index_file->extension();
            $this->book_new_index_file->storeAs('book-index-pdf',$pdfindexName);
            $book->book_index_file = 'book-index-pdf/'.$pdfindexName;
        }
        if($this->book_new_demo_vedio)
        {
            unlink('assets/image/'.$book->book_demo_vedio);
            $vedioName = Carbon::now()->timestamp. '.' . $this->book_new_demo_vedio->extension();
            $this->book_new_demo_vedio->storeAs('book-demo-vedio',$vedioName);
            $book->book_demo_vedio = 'book-demo-vedio/'.$vedioName;  
        } 
        $book->save();

        session()->flash('message', 'Book Updated successfully.');
    }
    public function render()
    {
        return view('livewire.back-end.author-edit-book-component')->layout('layouts.dashboard');
    }
}
