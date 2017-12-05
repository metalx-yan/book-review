<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $fillable = [
      'type','id','answer_id','user_id'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function answer()
    {
      return $this->belongsTo(Answer::class);
    }
}
