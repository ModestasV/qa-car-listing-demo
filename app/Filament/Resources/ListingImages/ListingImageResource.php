<?php

namespace App\Filament\Resources\ListingImages;

use App\Filament\Resources\ListingImages\Pages\CreateListingImage;
use App\Filament\Resources\ListingImages\Pages\EditListingImage;
use App\Filament\Resources\ListingImages\Pages\ListListingImages;
use App\Filament\Resources\ListingImages\Pages\ViewListingImage;
use App\Filament\Resources\ListingImages\Schemas\ListingImageForm;
use App\Filament\Resources\ListingImages\Schemas\ListingImageInfolist;
use App\Filament\Resources\ListingImages\Tables\ListingImagesTable;
use App\Models\ListingImage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class ListingImageResource extends Resource
{
    protected static ?string $model = ListingImage::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';
    
    public static function form(Schema $schema): Schema
    {
        return ListingImageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ListingImageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ListingImagesTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListListingImages::route('/'),
            'create' => CreateListingImage::route('/create'),
            'view' => ViewListingImage::route('/{record}'),
            'edit' => EditListingImage::route('/{record}/edit'),
        ];
    }
}
