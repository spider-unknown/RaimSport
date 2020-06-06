<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    public $timestamps = false;
    public const MAIN = 0;
    public const CHILD = 1;
    public const COUNT_CHILD = 2;
    protected $fillable = [
        'title',
        'description',
        'type',

    ];
}
