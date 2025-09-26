<?php

namespace App\Filament\Resources\Listings\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class ListingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),
                TextEntry::make('make.name'),
                TextEntry::make('carModel.name'),
                TextEntry::make('engine'),
                TextEntry::make('gearbox'),
                TextEntry::make('price')
                    ->money(),
                TextEntry::make('description')
                    ->html(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('packages.name')
                    ->badge()
            ]);
    }
}
