<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public const DEFAULT_RESOURCE_DIRECTORY = 'images/blogs';

    protected $fillable = [
        'title',
        'description',
        'img_path',
        'user_id',
    ];
}
