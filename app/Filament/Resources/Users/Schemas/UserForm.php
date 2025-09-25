<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(true),
                TextInput::make('email')
                    ->required(true),
                TextInput::make('password')
                    ->password()
                    ->required(true)
                    ->hiddenOn('edit'),
                Select::make('roles')
                    ->relationship('roles', 'title')
                    ->multiple()
                    ->required(true)
            ]);
    }
}
