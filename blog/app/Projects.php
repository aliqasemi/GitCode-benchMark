<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $project_id)
 */
class Projects extends Model
{
    //

    protected $fillable = [
        'name', 'create_date'
    ];

}
