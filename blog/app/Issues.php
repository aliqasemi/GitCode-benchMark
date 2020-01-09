<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    //

    protected $fillable = [
        'subject', 'date' , 'description' , 'push_id' , 'creator_user_id' , 'handler_user_id'
    ];
}
