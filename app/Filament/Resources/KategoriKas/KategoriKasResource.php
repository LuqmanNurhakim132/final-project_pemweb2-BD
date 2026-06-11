<?php

namespace App\Filament\Resources\KategoriKas;

use App\Filament\Resources\KategoriKas\Pages\CreateKategoriKas;
use App\Filament\Resources\KategoriKas\Pages\EditKategoriKas;
use App\Filament\Resources\KategoriKas\Pages\ListKategoriKas;
use App\Filament\Resources\KategoriKas\Schemas\KategoriKasForm;
use App\Filament\Resources\KategoriKas\Tables\KategoriKasTable;
use App\Models\KategoriKas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KategoriKasResource extends Resource
{
    protected static ?string $model = KategoriKas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_kategori';

    public static function form(Schema $schema): Schema
    {
        return KategoriKasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KategoriKasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKategoriKas::route('/'),
            'create' => CreateKategoriKas::route('/create'),
            'edit' => EditKategoriKas::route('/{record}/edit'),
        ];
    }
}
