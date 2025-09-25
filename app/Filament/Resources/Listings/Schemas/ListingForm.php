<?php

namespace App\Filament\Resources\Listings\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ListingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('make_id')
                    ->relationship('make', 'name')
                    ->required(true),
                Select::make('model_id')
                    ->relationship('carModel', 'name')
                    ->required(true),
                TextInput::make('engine')
                    ->required(true),
                TextInput::make('gearbox')
                    ->required(true),
                TextInput::make('price')
                    ->required(true),
                Textarea::make('description')
                    ->required(true),
                Select::make('package')
                    ->relationship('packages', 'name')
                    ->multiple()
                    ->required(true)
            ]);
    }
}
