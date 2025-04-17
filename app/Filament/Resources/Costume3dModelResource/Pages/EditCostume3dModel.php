<?php

namespace App\Filament\Resources\Costume3dModelResource\Pages;

use App\Filament\Resources\Costume3dModelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCostume3dModel extends EditRecord
{
    protected static string $resource = Costume3dModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
