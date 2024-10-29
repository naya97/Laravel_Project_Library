<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReadingList extends Model
{
    protected $guarded = [];

    /**
     * Who has my PK
     */
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function reading_list_books() : HasMany {
        return $this->hasMany(ReadingListBook::class);
    }
}
