<?php

namespace App\Filament\Resources\Kegiatans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KegiatanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_kegiatan')
                    ->required()
                    ->maxLength(255),

                TextInput::make('anggaran_direncanakan')
                    ->numeric()
                    ->required(),

                DatePicker::make('tanggal_pelaksanaan')
                    ->required(),
            ]);
    }
}
