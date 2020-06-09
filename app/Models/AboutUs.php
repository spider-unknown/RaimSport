<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    public $timestamps = false;
    public const MAIN = 0;
    public const CHILD = 1;
    public const COUNT_CHILD = 2;
    public const ABOUT_US = 3;
    public const MAIN_IMAGE = 4;
    public const DEFAULT_DIRECTORY = 'client';
    protected $fillable = [
        'title',
        'description',
        'type',

    ];
}
