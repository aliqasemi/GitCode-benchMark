<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersCode extends Model
{
    //
    protected $fillable = [
        'type', 'project_id'
    ];

}
