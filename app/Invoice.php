<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $connection = 'mysql';

    protected $table = 'invoices';

    protected $primaryKey = 'id';

    public $timestamps = True;

    protected $fillable = ['medicineName','quantity','price','totalAmount'];

    public function medicines(){

        return $this->hasMany(Medicine::class);
    }

}
