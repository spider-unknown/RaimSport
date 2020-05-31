<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    public const DEFAULT_RESOURCE_DIRECTORY = 'images/projects';

    protected $fillable = [

        'category_id',
        'name',
        'description',
        'img_path',
        'is_visible'

    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function galleries() {
        return $this->hasMany(Gallery::class, 'project_id', 'id');
    }
}
