<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'date',
        'time',
        'location',
        'description',
        'visibility',
        'recurring'
    ];
    const VISIBILITY_PUBLIC = 'Public';
    const VISIBILITY_PRIVATE = 'Private';
}
