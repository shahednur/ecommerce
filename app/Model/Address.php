<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Customer;

class Address extends Model
{
    protected $fillable = ['house','road','community','zipcode','state','country'];
    protected $table = 'addresses';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
