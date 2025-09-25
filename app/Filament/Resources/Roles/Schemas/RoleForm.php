<?php

namespace App\Filament\Resources\Roles\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;

class RoleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(true),
                Select::make('permissions')
                    ->relationship('permissions', 'title')
                    ->multiple()
                    ->required(true)
            ]);
    }
}
