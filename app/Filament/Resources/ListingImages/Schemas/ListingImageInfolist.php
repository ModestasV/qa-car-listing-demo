<?php

namespace App\Filament\Resources\ListingImages\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class ListingImageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),
                TextEntry::make('listing.make_id'),
                ImageEntry::make('image'),
                TextEntry::make('title'),
                TextEntry::make('created_at')
                    ->dateTime()
            ]);
    }
}
