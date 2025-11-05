<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title','slug','summary','cover_image','gallery','tech_stack','repo_url','live_url'
    ];

    protected $casts = [
        'gallery'    => 'array',
        'tech_stack' => 'array',
    ];

    // Use slug instead of id in URLs: /projects/my-app
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
