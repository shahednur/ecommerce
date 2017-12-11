<?php

namespace App\Model;

use App\Model\Product;
use App\Model\Customer;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    protected $fillable = ['product_id','customer_id','review','star'];
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function products(){
        return $this->belongsTo(Product::class);
    }
    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
