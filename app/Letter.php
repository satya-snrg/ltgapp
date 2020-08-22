<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{

    protected $table = "letters";

    protected $fillable = [
        'question','message'
    ];
}
