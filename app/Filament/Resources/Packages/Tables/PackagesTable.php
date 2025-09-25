<?php

namespace App\Filament\Resources\Packages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class PackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                TextColumn::make('price')
                    ->money(),
                TextColumn::make('duration')
                    ->numeric(),
                TextColumn::make('features'),
                TextColumn::make('created_at')
                    ->dateTime()
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
