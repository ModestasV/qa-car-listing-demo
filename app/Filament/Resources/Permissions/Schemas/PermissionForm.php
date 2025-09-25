<?php

namespace App\Filament\Resources\Permissions\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class PermissionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(true)
            ]);
    }
}
