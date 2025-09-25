<?php

namespace App\Filament\Resources\Favorites\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class FavoritesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('listing.make_id'),
                TextColumn::make('user.name'),
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
