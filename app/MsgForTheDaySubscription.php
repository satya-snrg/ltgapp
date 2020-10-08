<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MsgForTheDaySubscription extends Model
{

    protected $table = "msgfortheday_subscriptions";

    protected $fillable = [
        'name','email','phone'
    ];
}
