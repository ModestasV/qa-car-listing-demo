<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarModel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 
        'make_id'
    ];

    public function make()
    {
        return $this->belongsTo(Make::class, 'make_id');
    }
}