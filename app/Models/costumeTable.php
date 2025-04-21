<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class costumeTable extends Model
{
    protected $table = "costume_tables";

    protected $primaryKey = "costumeId";

    protected $fillable = [
    "costumeName",
    "ageCategory",
    "costumeCategory",
    'description',
    "measurements",
];

public function model3d()
{
    return $this->hasOne(
        \App\Models\costume3dModel::class,
        'costumeId',    
        'costumeId'     
    );
}

public function images()
{
    return $this->hasMany(
        \App\Models\costumeImages::class,
        'costumeId',   
        'costumeId'   
    );
}

}
