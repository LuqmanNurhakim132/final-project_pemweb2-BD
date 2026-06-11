<?php

namespace App\Filament\Resources\TransaksiKas\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TransaksiKasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),

                Select::make('kategori_id')
                    ->relationship('kategori', 'nama_kategori')
                    ->required(),

                TextInput::make('nominal')
                    ->numeric()
                    ->required(),

                DatePicker::make('tanggal')
                    ->required(),

                FileUpload::make('bukti_gambar')
                    ->image()
                    ->directory('bukti-kas'),

                Textarea::make('keterangan')
                    ->columnSpanFull(),
            ]);
    }
}