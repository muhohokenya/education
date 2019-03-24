<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
