<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReadingListBook extends Model
{
    protected $guarded = [];

    /**
     * My FK BelongsTo
     */
    public function reading_lists() : BelongsTo {
        return $this->belongsTo(ReadingList::class);
    }

    public function books(): BelongsTo {
        return $this->belongsTo(Book::class);
    }
}
