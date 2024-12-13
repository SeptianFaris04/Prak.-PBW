<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable =[
        'title',
        'slug',
        'body',
        'teaser',
        'meta title',
        'meta description',
    ];
}
