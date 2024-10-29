<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $guarded = [];

    /**
     * My FK BelongsTo : 
     */
    public function author() : BelongsTo {
        return $this->belongsTo(Author::class);
    }

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    /**
     * Who Has My PK
     */
    public function loan_books() : HasMany {
        return $this->hasMany(Borrow::class);
    }

    public function reading_list_books() : HasMany {
        return $this->hasMany(ReadingListBook::class);
    }
}
