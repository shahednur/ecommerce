<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['house','road','community','zipcode','state','country'];
    protected $table = 'addresses';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function customers(){
        return $this->belongsTo('App\Model\Customer','address_id');
    }
}
