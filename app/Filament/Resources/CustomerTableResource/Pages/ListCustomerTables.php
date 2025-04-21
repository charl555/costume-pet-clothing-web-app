<?php

namespace App\Filament\Resources\CustomerTableResource\Pages;

use App\Filament\Resources\CustomerTableResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerTables extends ListRecords
{
    protected static string $resource = CustomerTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
