<?php

namespace App\Http\Resources\Patient\Chernobyl;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LiquidatorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
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
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'radiation_dose' => $this->radiation_dose,
        ];
    }
}
