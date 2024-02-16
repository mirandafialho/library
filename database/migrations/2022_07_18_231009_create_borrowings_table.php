<?php

use App\Models\Book;
use App\Models\User;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Book::class);
            $table->foreignIdFor(User::class);
            $table->string('code');
            $table->dateTime('borrowed_at');
            $table->dateTime('due_at');
            $table->dateTime('brought_at')->nullable();
            $table->decimal('fine')->default(0.00);
            $table->integer('renewals')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('borrowings');
    }
};
