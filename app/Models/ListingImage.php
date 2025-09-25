<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ListingImage extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'listing_id', 
        'image', 
        'title'
    ];

    public function listing()
    {
        return $this->belongsTo(Listing::class, 'listing_id');
    }
}