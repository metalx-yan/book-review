<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
      'title', 'writer', 'year', 'cover', 'publisher'
    ];

    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
}
