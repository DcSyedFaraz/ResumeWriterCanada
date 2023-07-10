<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'title',
        'slug',
        'canonical',
        'meta_description',
        'body',
        'user_id',
        'is_published',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
