<?php

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('books_has_authors', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(Author::class);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books_has_authors');
    }
};
