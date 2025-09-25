<?php

namespace App\Filament\Resources\CarModels;

use App\Filament\Resources\CarModels\Pages\CreateCarModel;
use App\Filament\Resources\CarModels\Pages\EditCarModel;
use App\Filament\Resources\CarModels\Pages\ListCarModels;
use App\Filament\Resources\CarModels\Pages\ViewCarModel;
use App\Filament\Resources\CarModels\Schemas\CarModelForm;
use App\Filament\Resources\CarModels\Schemas\CarModelInfolist;
use App\Filament\Resources\CarModels\Tables\CarModelsTable;
use App\Models\CarModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class CarModelResource extends Resource
{
    protected static ?string $model = CarModel::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-m-folder-plus';
        
    protected static UnitEnum|string|null $navigationGroup = 'Configuration';
    
    public static function form(Schema $schema): Schema
    {
        return CarModelForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CarModelInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CarModelsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCarModels::route('/'),
            'create' => CreateCarModel::route('/create'),
            'view' => ViewCarModel::route('/{record}'),
            'edit' => EditCarModel::route('/{record}/edit'),
        ];
    }
}
