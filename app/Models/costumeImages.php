<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class costumeImages extends Model
{
    protected $table = "costume_images";

    protected $primaryKey = "costumeimageId";
    protected $fillable = [
        "costumeId",
        "thumbnail",
        "imagePath",
    ];

    public function costume()
{
    return $this->belongsTo(costumeTable::class, 'costumeId');
}

}
