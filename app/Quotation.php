<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'file_path',
    ];
}
