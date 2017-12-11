<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    protected $fillable = ['product_id','customer_id','review','star'];
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function products(){
        return $this->belongsTo('App\Model\Product','product_id');
    }
    public function customers(){
        return $this->belongsTo('App\Model\Customer','customer_id');
    }
}
