<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class RoleInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('permissions.title')
                    ->badge()
            ]);
    }
}
