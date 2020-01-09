<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pushes extends Model
{
    //
    protected $fillable = [
        'file', 'comment' , 'date_and_time' , 'user_id' , 'branch_id'
    ];

}
