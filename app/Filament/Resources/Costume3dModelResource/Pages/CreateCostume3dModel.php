<?php

namespace App\Filament\Resources\Costume3dModelResource\Pages;

use App\Filament\Resources\Costume3dModelResource;
use App\Models\costume3dModel;
use App\Models\costumeImages;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCostume3dModel extends CreateRecord
{
    protected static string $resource = Costume3dModelResource::class;

    protected function handleRecordCreation(array $data): costume3dModel
    {
       $costume = costume3dModel::create([
            "costumeName"=> $data["costumeName"],
            "description"=> $data["description"],
            "category"=> $data["category"],
            "file_path"=> $data["file_path"],
       ]);


       if (!empty($data['imagePath'])) {
        foreach ($data['imagePath'] as $image) {
            costumeImages::create([
                'costume3dModelID' => $costume->costume3dModelID,
                'imagePath' => $image,
            ]);
        }
    }


       return $costume;

    }
}
