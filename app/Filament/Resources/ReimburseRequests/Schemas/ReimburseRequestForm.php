<?php

namespace App\Filament\Resources\ReimburseRequests\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ReimburseRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),

                TextInput::make('judul_reimburse')
                    ->required(),

                TextInput::make('nominal')
                    ->numeric()
                    ->required(),

                Textarea::make('deskripsi')
                    ->columnSpanFull(),

                FileUpload::make('bukti_nota')
                    ->image()
                    ->directory('nota-reimburse')
                    ->required(),

                Select::make('status')
                    ->options([
                        'Pending' => 'Pending',
                        'Disetujui' => 'Disetujui',
                        'Ditolak' => 'Ditolak',
                    ])
                    ->default('Pending')
                    ->required(),

                DatePicker::make('tanggal_pengajuan')
                    ->required(),
            ]);
    }
}