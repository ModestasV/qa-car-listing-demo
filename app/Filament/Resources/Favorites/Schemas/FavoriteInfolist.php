<?php

namespace App\Filament\Resources\Favorites\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class FavoriteInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),
                TextEntry::make('listing.make_id'),
                TextEntry::make('user.name'),
                TextEntry::make('created_at')
                    ->dateTime()
            ]);
    }
}
