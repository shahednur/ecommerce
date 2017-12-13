<?php

namespace App\Http\Resources\Review;

use Illuminate\Http\Resources\Json\Resource;
use App\Model\Review;


class ReviewResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request , Customer $customer)
    {
        return [
            'customer'=>$customer->reviews(),
            'body'=>$this->review,
            'star'=>$this->star,
        ];
    }
}
