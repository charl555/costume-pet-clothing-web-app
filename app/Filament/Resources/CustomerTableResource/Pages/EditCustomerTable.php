<?php

namespace App\Filament\Resources\CustomerTableResource\Pages;

use App\Filament\Resources\CustomerTableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerTable extends EditRecord
{
    protected static string $resource = CustomerTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
