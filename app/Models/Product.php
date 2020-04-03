<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public const DEFAULT_RESOURCE_DIRECTORY = 'images/products';

    protected $fillable = [

        'category_id',
        'name',
        'description',
        'img_path',
        'price'

    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
