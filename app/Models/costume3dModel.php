<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class costume3dModel extends Model
{
    protected $table = "costume3d_models";

    protected  $primaryKey = "costume3dModelID";

    protected $fillable = [
        "costumeName",
        "description",
        "category",
        "file_path",
        "thumbnail",
    ];


}
