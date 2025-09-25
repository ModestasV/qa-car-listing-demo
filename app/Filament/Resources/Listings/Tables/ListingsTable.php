<?php

namespace App\Filament\Resources\Listings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\Action;
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
                Action::make('favorites')
                    ->label(function ($record) {
                        if ($record->favorites->where('user_id', auth()->user()->id)->first()) {
                            return 'Remove from Favorites';
                        } else {
                            return 'Add to Favorites';
                        }
                    })
                    ->icon('heroicon-o-heart')
                    ->color(function ($record) {
                        return $record->favorites->where('user_id', auth()->user()->id)->first() ? 'danger' : 'success';
                    })
                    ->action(function ($record) {
                        if ($record->favorites->where('user_id', auth()->user()->id)->first()) {
                            return $record->favorites->where('user_id', auth()->user()->id)->first()->delete();
                        } else {
                            return $record->favorites()->create([
                                'listing_id' => $record->id,
                                'user_id' => auth()->user()->id,
                            ]);
                        }
                    })
            ])
            ->headerActions([])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
