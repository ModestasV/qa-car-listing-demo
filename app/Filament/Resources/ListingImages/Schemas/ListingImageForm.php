<?php

namespace App\Filament\Resources\ListingImages\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

class ListingImageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('listing_id')
                    ->relationship('listing', 'make_id')
                    ->required(true),
                FileUpload::make('image')
                    ->required(true),
                TextInput::make('title')
                    ->required(true)
            ]);
    }
}
