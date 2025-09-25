<?php

namespace App\Filament\Resources\CarModels\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class CarModelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(true),
                Select::make('make_id')
                    ->relationship('make', 'name')
                    ->required(true)
            ]);
    }
}
