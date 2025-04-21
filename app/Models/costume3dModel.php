<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class costume3dModel extends Model
{
    protected $table = "costume3d_models";

    protected  $primaryKey = "3dmodelId";

    protected $fillable = [
        "costumeId",
        "filePath",
    ];

    public function costume()
    {
        return $this->belongsTo(
            \App\Models\costumeTable::class,
            'costumeId',   // FK on this table
            'costumeId'    // PK on costume_tables
        );
    }


}
