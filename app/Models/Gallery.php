<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public const DEFAULT_RESOURCE_DIRECTORY = 'images/projects/galleries';
    public $table = "project_gallery";
    protected $fillable = [

        'project_id',
        'img_path'

    ];

    public function project() {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }


}
