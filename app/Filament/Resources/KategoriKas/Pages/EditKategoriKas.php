<?php

namespace App\Filament\Resources\KategoriKas\Pages;

use App\Filament\Resources\KategoriKas\KategoriKasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKategoriKas extends EditRecord
{
    protected static string $resource = KategoriKasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
