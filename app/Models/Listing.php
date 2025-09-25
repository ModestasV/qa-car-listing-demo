<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'make_id', 
        'model_id', 
        'engine', 
        'gearbox', 
        'price', 
        'description', 
        'package'
    ];

    public function make()
    {
        return $this->belongsTo(Make::class, 'make_id');
    }

    public function carModel()
    {
        return $this->belongsTo(CarModel::class, 'model_id');
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }
}