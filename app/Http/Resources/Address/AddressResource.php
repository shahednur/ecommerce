<?php

namespace App\Http\Resources\Address;

use Illuminate\Http\Resources\Json\Resource;

class AddressResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'house'=>$this->house,
            'road'=>$this->road,
            'city'=>$this->community,
            'zipcode'=>$this->zipcode,
            'state'=>$this->state,
            'country'=>$this->country,
        ];
    }
}
