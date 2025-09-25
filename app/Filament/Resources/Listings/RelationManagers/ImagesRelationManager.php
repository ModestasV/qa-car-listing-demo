<?php

namespace App\Filament\Resources\Listings\RelationManagers;

use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class ImagesRelationManager extends RelationManager
{
    protected static string $relationship = 'images';

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('title'),
            ])
            ->headerActions([
                CreateAction::make(),
            ]);
    }

    public function form($schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->required(true),
                TextInput::make('title')
                    ->required(true)
            ]);
    }
}
