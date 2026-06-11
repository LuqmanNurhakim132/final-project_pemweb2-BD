<?php

namespace App\Filament\Resources\KategoriKas\Pages;

use App\Filament\Resources\KategoriKas\KategoriKasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKategoriKas extends ListRecords
{
    protected static string $resource = KategoriKasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
