<?php

namespace App\Filament\Resources\CustomerTableResource\Pages;

use App\Filament\Resources\CustomerTableResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerTable extends CreateRecord
{
    protected static string $resource = CustomerTableResource::class;
}
