<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Borrow extends Model
{
    protected $guarded = [];
    
    /**
     * My FK BelongsTo 
     */
    public function books() : BelongsTo {
        return $this->belongsTo(Book::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    /**
     * Who has my PK 
     */
    // public function user() : HasMany {
    //     return $this->hasMany(User::class);
    // }
}
