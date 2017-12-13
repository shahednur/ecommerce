<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = ['name','detail','price','stock','discount','user_id'];
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timeStamps = true;

    public function reviews(){
        return $this->hasMany('App\Model\Review','id');
    }
    public function users(){
        return $this->belongsTo('App\User','id');
    }
}
