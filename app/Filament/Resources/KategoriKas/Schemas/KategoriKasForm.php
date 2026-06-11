<?php

namespace App\Filament\Resources\KategoriKas\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class KategoriKasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_kategori')
                    ->required(),
                Select::make('tipe')
                    ->options(['Masuk' => 'Masuk', 'Keluar' => 'Keluar'])
                    ->required(),
                Textarea::make('deskripsi')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
