<?php

namespace App\Filament\Resources\ListingImages\Pages;

use App\Filament\Resources\ListingImages\ListingImageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewListingImage extends ViewRecord
{
    protected static string $resource = ListingImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
