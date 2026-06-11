<?php

namespace App\Filament\Resources\ReimburseRequests;

use App\Filament\Resources\ReimburseRequests\Pages\CreateReimburseRequest;
use App\Filament\Resources\ReimburseRequests\Pages\EditReimburseRequest;
use App\Filament\Resources\ReimburseRequests\Pages\ListReimburseRequests;
use App\Filament\Resources\ReimburseRequests\Schemas\ReimburseRequestForm;
use App\Filament\Resources\ReimburseRequests\Tables\ReimburseRequestsTable;
use App\Models\ReimburseRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ReimburseRequestResource extends Resource
{
    protected static ?string $model = ReimburseRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'judul_reimburse';

    public static function form(Schema $schema): Schema
    {
        return ReimburseRequestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ReimburseRequestsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListReimburseRequests::route('/'),
            'create' => CreateReimburseRequest::route('/create'),
            'edit' => EditReimburseRequest::route('/{record}/edit'),
        ];
    }
}
