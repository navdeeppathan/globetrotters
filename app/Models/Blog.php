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
        'image',
        'published_at',
        'status'
    ];

    protected $casts = [
        'published_at' => 'date',
    ];
}