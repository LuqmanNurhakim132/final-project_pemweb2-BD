<?php

namespace App\Filament\Resources\ReimburseRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;

class ReimburseRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
                    ->columns([
                TextColumn::make('user.name')
                    ->label('Pengaju')
                    ->searchable(),

                TextColumn::make('judul_reimburse')
                    ->searchable(),

                TextColumn::make('nominal')
                    ->money('IDR')
                    ->sortable(),

                ImageColumn::make('bukti_nota')
                    ->label('Nota'),

                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Disetujui' => 'success',
                        'Ditolak' => 'danger',
                        default => 'warning',
                    }),

                TextColumn::make('tanggal_pengajuan')
                    ->date()
                    ->sortable(),

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
