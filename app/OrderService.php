<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderService extends Model
{
    public $timestamps=false;

    public $table = 'order_services';

    protected $fillable=[
        'id',
        'name',
    ];

    public function fare()
    {
        return $this->hasOne( Fare::class, 'id' );
    }
}
