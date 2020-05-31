<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public const DEFAULT_RESOURCE_DIRECTORY = 'images/services';

    protected $fillable = [
        'title',
        'description',
        'img_path',
        'price',
    ];
}
