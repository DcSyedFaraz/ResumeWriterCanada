<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    public $table = 'payments';

    public $timestamps = true;

    protected $fillable = [
        "id",
        "user_id",
        "order_id",
        "invoice_id",
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id', 'id');
    }

}
