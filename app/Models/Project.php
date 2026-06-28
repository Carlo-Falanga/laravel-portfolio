<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    protected $fillable = [
        'title',
        'category_id',
        'description',
        'technologies',
        'thumbnail',
        'repository_url',
        'demo_url',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
