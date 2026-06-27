<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    protected $fillable = [
        'title',
        'category',
        'description',
        'technologies',
        'thumbnail',
        'repository_url',
        'demo_url',
    ];
}
