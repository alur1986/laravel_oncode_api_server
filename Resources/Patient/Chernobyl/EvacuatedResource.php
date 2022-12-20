<?php

namespace App\Http\Resources\Patient\Chernobyl;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EvacuatedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request $request
     * @return array
     */
    public function toArray($request)
    {
        if (is_null($this->resource)) {
            return [];
        }

        return [
            'id' => $this->id,
            'patient_id' => $this->patient_id,
            'handbook_city_id' => $this->handbook_city_id,
            'locality' => $this->locality,
            'address' => $this->address,
            'date' => $this->date,
        ];
    }
}
