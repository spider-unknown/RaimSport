<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    public const DEFAULT_RESOURCE_DIRECTORY = 'images/categories';
    use SoftDeletes;

    protected $fillable = [
        'name', 'img_path', 'branch_id', 'description', 'is_visible'
    ];

    public function branch() {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }
}
