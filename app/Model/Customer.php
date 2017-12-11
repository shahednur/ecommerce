<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    protected $fillable = ['name','email','phone','address_id'];
    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function addresses(){
        return $this->belongsTo('App\Model\Address','address_id');
    }
    public function reviews(){
        return $this->hasMany('App\Model\Review','id');
    }
}
