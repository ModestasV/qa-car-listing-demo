<?php

namespace App\Filament\Resources\CarModels\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class CarModelInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),
                TextEntry::make('name'),
                TextEntry::make('make.name'),
                TextEntry::make('created_at')
                    ->dateTime()
            ]);
    }
}
