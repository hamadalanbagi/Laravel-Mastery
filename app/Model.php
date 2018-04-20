<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // protected $fillable = ['title', 'body'];


    // This field cannot be mass input
    protected $guarded = [];
}
