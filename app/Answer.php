<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
      'question_id','user_id','id','message', 'super',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function question()
    {
      return $this->belongsTo(Question::class);
    }

    public function rates()
    {
      return $this->hasMany(Rate::class);
    }
}
