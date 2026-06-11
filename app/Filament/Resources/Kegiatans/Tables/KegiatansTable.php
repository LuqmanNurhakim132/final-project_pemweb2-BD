<?php

namespace App\Filament\Resources\Kegiatans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class KegiatansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kegiatan')
                    ->searchable(),

                TextColumn::make('anggaran_direncanakan')
                    ->money('IDR')
                    ->sortable(),

                TextColumn::make('tanggal_pelaksanaan')
                    ->date()
                    ->sortable(),

                TextColumn::make('users_count')
                    ->counts('users')
                    ->label('Jumlah Peserta'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
