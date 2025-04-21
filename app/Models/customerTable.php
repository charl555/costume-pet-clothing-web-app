<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customerTable extends Model
{
    protected $table = "customer_tables";
    protected $primaryKey = "customerId";
    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'contactNo',
        'address',
    ];
}
