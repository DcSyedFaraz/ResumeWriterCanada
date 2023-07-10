<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    public $timestamps = false;

    public $table = 'fares';

    protected $fillable = [
        'career_level_id',
        'package_id',
        'day_model_id',
        'fare',
    ];

    public function career_level()
    {
        return $this->belongsTo(CareerLevel::class, "career_level_id");
    }

    public function package()
    {
        return $this->belongsTo(Package::class, "package_id");
    }

    public function deadline()
    {
        return $this->belongsTo(Deadline::class,"day_model_id");
    }
}
