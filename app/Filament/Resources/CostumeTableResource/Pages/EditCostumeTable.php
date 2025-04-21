<?php

namespace App\Filament\Resources\CostumeTableResource\Pages;

use App\Filament\Resources\CostumeTableResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCostumeTable extends EditRecord
{
    protected static string $resource = CostumeTableResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
