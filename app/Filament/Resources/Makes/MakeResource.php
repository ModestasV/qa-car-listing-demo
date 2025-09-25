<?php

namespace App\Filament\Resources\Makes;

use App\Filament\Resources\Makes\Pages\CreateMake;
use App\Filament\Resources\Makes\Pages\EditMake;
use App\Filament\Resources\Makes\Pages\ListMakes;
use App\Filament\Resources\Makes\Pages\ViewMake;
use App\Filament\Resources\Makes\Schemas\MakeForm;
use App\Filament\Resources\Makes\Schemas\MakeInfolist;
use App\Filament\Resources\Makes\Tables\MakesTable;
use App\Models\Make;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class MakeResource extends Resource
{
    protected static ?string $model = Make::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-building-office';
        
    protected static UnitEnum|string|null $navigationGroup = 'Configuration';
    
    public static function form(Schema $schema): Schema
    {
        return MakeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MakeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MakesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMakes::route('/'),
            'create' => CreateMake::route('/create'),
            'view' => ViewMake::route('/{record}'),
            'edit' => EditMake::route('/{record}/edit'),
        ];
    }
}
