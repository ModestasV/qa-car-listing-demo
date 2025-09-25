<?php

namespace App\Filament\Resources\Listings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ListingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('make.name'),
                TextColumn::make('carModel.name'),
                TextColumn::make('engine'),
                TextColumn::make('gearbox'),
                TextColumn::make('price')
                    ->money(),
                TextColumn::make('description'),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('packages.name')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
