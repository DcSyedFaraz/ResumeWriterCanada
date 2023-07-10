<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\TransactionalEloquentEvents;

class Order extends Model
{
    use TransactionalEloquentEvents;

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'user_id',
        "package_id",
        "career_level",
        "phone",
        "package",
        "deadline",
        "detail",
        "status_id",
    ];

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id','id' );
    }

    public function careerLevel()
    {
        return $this->belongsTo(CareerLevel::class, 'career_level','id' );
    }

    public function orderService()
    {
        return $this->belongsTo(OrderService::class,'order_service','id');
    }

    public function packageOrder()
    {
        return $this->belongsTo(Package::class,'package_id','id');
    }

    public function invoice()
    {
        return $this->hasOne('App\Invoice');
    }

    public function deadlineOrder()
    {
        return $this->belongsTo(Deadline::class,'deadline', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class,'status_id', 'id');
    }


}
