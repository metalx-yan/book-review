<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->hasOne(Book::class);
    }
}
