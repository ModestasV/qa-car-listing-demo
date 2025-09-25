<?php

namespace App\Filament\Resources\Makes\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class MakeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(true),
                FileUpload::make('logo')
            ]);
    }
}
