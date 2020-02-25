<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public const DEFAULT_RESOURCE_DIRECTORY = 'images/meditations';

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'img_path',
        'scale'
    ];
}
