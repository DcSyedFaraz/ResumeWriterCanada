<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deadline extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'duration_in_days'
    ];

    public function fare()
    {
        return $this->hasOne( Fare::class, 'id' );
    }
}
