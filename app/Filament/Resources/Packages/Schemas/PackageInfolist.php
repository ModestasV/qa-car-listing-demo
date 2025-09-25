<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class PackageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),
                TextEntry::make('name'),
                TextEntry::make('price')
                    ->money(),
                TextEntry::make('duration')
                    ->numeric(),
                TextEntry::make('features'),
                TextEntry::make('created_at')
                    ->dateTime()
            ]);
    }
}
