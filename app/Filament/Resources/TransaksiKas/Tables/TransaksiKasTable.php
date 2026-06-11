<?php

namespace App\Filament\Resources\TransaksiKas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class TransaksiKasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Pencatat')
                    ->searchable(),

                TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori')
                    ->searchable(),

                TextColumn::make('nominal')
                    ->money('IDR')
                    ->sortable(),

                TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),

                ImageColumn::make('bukti_gambar')
                    ->label('Bukti'),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
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