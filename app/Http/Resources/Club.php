<?php

namespace App\Http\Resources;

use App\Club_gallery;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Event as EventResource;
use Carbon\Carbon;
class Club extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'suburb_name' => $this->suburb->name,
            'name' => $this->name,
            'address' => $this->address,
            'description' => $this->description,
            'cover_photo' => $this->cover_photo,
            'order' => $this->order,
            'email' => $this->email,
            'phone' => $this->phone,
            'open' => $this->open ,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
        ];
    }

}
