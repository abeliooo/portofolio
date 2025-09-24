<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'organization',
        'event_name',
        'start_year',
        'end_year',
    ];
}
