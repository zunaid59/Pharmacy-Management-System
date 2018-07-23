<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $connection = 'mysql';

    protected $table = 'customers';

    protected $primaryKey = 'id';

    public $timestamps = True;

    protected $fillable = ['customerName','address','mobileNumber'];

}
