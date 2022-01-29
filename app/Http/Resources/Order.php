<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
{
    public function toArray($request){
        //return parent::toArray($request);
        return [
          'id' => $this->id,
          'ordem' => $this->ordem,
          'status' => $this->status
        ];
    }
}
