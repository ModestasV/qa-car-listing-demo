<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class PackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(true),
                TextInput::make('price')
                    ->required(true),
                TextInput::make('duration')
                    ->numeric()
                    ->required(true),
                Textarea::make('features')
                    ->required(true)
            ]);
    }
}
