<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name', 'book_image','book_description', 'book_category','book_type', 'book_price','book_sale_price', 'book_author_name','book_pdf_file', 'book_index_file','book_demo_vedio',
    ];
}
