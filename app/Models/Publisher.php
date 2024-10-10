<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Publisher extends Model
{
    use HasFactory;

    public function book(): HasOne
    {
        return $this->hasOne(Book::class);
    }
}
