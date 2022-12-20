<?php

namespace App\Http\Resources\Patient\Treatment;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TreatmentResource extends JsonResource
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
            'handbook_treatment_information_id' => $this->handbook_treatment_information_id,
            'handbook_institution_id' => $this->handbook_institution_id,
            'handbook_institution_type_id' => $this->handbook_institution_type_id,
            'handbook_treatment_type_id' => $this->handbook_treatment_type_id,
            'handbook_treatment_nature_id' => $this->handbook_treatment_nature_id,
            'handbook_operation_code_id' => $this->handbook_operation_code_id,
            'handbook_operation_method_id' => $this->handbook_operation_method_id,
            'handbook_localization_id' => $this->handbook_localization_id,
        ];
    }
}
