<?php

namespace App\Filament\Resources\ReimburseRequests\Pages;

use App\Filament\Resources\ReimburseRequests\ReimburseRequestResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditReimburseRequest extends EditRecord
{
    protected static string $resource = ReimburseRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
