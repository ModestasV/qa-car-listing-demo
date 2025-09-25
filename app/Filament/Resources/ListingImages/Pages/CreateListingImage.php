<?php

namespace App\Filament\Resources\ListingImages\Pages;

use App\Filament\Resources\ListingImages\ListingImageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateListingImage extends CreateRecord
{
    protected static string $resource = ListingImageResource::class;
}