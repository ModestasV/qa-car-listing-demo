<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'listing_id', 
        'user_id'
    ];

    public function listing()
    {
        return $this->belongsTo(Listing::class, 'listing_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}