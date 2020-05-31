<?php

namespace App\Models;

use App\User;
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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
