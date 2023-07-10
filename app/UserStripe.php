<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStripe extends Model
{
    public $timestamps = false;

    protected $fillable = [
        "user_id",
        "stripe_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id' );
    }

}
