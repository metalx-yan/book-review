<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
      'title', 'slug', 'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->hasOne(Book::class);
    }

    public function answers()
    {
      return $this->hasMany(Answer::class);
    }
}
