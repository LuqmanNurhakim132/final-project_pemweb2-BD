<?php

namespace App\Filament\Resources\ReimburseRequests\Pages;

use App\Filament\Resources\ReimburseRequests\ReimburseRequestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListReimburseRequests extends ListRecords
{
    protected static string $resource = ReimburseRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
