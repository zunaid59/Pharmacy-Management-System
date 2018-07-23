<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $connection = 'mysql';

    protected $table = 'medicines';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['medicineName','type','purchase_price','sell_price','expire_date','quantity'];

    public function invoice(){

        return $this->belongsTo('App\Invoice');
    }
}
