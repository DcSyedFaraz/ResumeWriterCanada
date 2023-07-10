<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public $timestamps=false;

    public $table = 'packages';

    protected $fillable=[
        'id',
        'name',
    ];

    public function fare()
    {
        return $this->hasOne( Fare::class, 'id' );
    }
}

