<?php

use App\Models\{Author, Publisher, Category};

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Publisher::class);
            $table->foreignIdFor(Author::class);
            $table->foreignIdFor(Category::class);
            $table->string('name');
            $table->text('cover');
            $table->string('isbn', 20);
            $table->integer('print_length');
            $table->year('publication_year');
            $table->integer('edition');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('books');
    }
};
