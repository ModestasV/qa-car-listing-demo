<?php

namespace App\Filament\Resources\Makes\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class MakeInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id'),
                TextEntry::make('name'),
                ImageEntry::make('logo'),
                TextEntry::make('created_at')
                    ->dateTime()
            ]);
    }
}
