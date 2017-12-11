<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['name','detail','price','stock','discount'];
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timeStamps = true;

    public function reviews(){
        return $this->hasMany('App\Model\Review','id');
    }
}
