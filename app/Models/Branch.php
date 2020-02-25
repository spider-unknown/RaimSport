<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    public const DEFAULT_RESOURCE_DIRECTORY = 'images/branches';

    use SoftDeletes;

    protected $fillable = [
        'name', 'name_in_menu', 'description', 'is_visible'
    ];
}
