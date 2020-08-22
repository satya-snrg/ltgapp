<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'name','parent_id','icon','top_category','image_url'
    ];
}
