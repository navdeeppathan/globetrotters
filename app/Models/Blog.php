<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'short_description',
        'image',
        'published_at',
        'status',
        'challanges',
        'quote',
        'fb_link',
        'twitter',
        'linkedin',
        'author_name',
        'category',
        'bio'
    ];

    protected $casts = [
        'published_at' => 'date',
    ];
}