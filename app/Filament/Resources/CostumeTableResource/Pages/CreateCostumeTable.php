<?php

namespace App\Filament\Resources\CostumeTableResource\Pages;

use App\Filament\Resources\CostumeTableResource;
use App\Models\costumeTable;
use App\Models\costume3dModel;
use App\Models\costumeImages;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCostumeTable extends CreateRecord
{
    protected static string $resource = CostumeTableResource::class;

    protected function handleRecordCreation(array $data): costumeTable
    {
        $costume = costumeTable::create([
            "costumeName"=> $data["costumeName"],
            "ageCategory"=> $data["ageCategory"],
            "costumeCategory"=> $data["costumeCategory"],
            "description"=> $data["description"],
            "measurements"=> $data["measurements"],
        ]); 

        $model = $costume->model3d()->create([
            "filePath"=> $data["filePath"],
        ]);

        $costume->images()->create([
            'imagePath' => $data['thumbnail'],
            'thumbnail' => true,
        ]);

        foreach ($data['imagePath'] ?? [] as $path) {
            $costume->images()->create([
                'imagePath' => $path,
                'thumbnail' => false,
            ]);
        }


        return $costume;
    }
}
