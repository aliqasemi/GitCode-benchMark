<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    //

    protected $fillable = [
        'name', 'type' , 'project_id'
    ];
}
