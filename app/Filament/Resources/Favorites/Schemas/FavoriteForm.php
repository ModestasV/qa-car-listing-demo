<?php

namespace App\Filament\Resources\Favorites\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;

class FavoriteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('listing_id')
                    ->relationship('listing', 'make_id')
                    ->required(true),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(true)
            ]);
    }
}
