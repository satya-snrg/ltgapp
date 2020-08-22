<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{

    protected $table = "contactform";

    protected $fillable = [
        'name','email','subject','message','phone'
    ];
}
