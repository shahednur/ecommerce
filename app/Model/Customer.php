<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;
use App\Model\Address;


class Customer extends Model
{
    protected $fillable = ['name','email','phone','address_id'];
    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function addresses(){
        return $this->belongsTo(Address::class);
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
