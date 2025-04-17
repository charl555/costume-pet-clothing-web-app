<?php

namespace App\Filament\Resources\Costume3dModelResource\Pages;

use App\Filament\Resources\Costume3dModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCostume3dModels extends ListRecords
{
    protected static string $resource = Costume3dModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
