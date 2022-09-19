<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("book_name");
            $table->string("book_image");
            $table->string("book_description");
            $table->string("book_category")->nullable();
            $table->string("book_type")->nullable();
            $table->string("book_price");
            $table->string("book_sale_price")->nullable();
            $table->string("book_author_name")->nullable();
            $table->string("book_pdf_file");
            $table->string("book_index_file")->nullable();
            $table->string("book_demo_vedio")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
