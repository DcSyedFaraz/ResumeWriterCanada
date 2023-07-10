<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectServices extends Model
{

    public $timestamps=false;

    protected $fillable=[
        'id',
        'name', 
    ];

    public function fare()
    {
        return $this->hasOne( Fare::class, 'id' );
    }
}
