<?php

namespace App\Http\Resources\Patient;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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
            'old_id' => $this->old_id,
            'region_id' => $this->region_id,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'birthday' => $this->birthday,
            'address' => $this->address,
            'disability' => $this->disability,
            'disposal_date' => $this->disposal_date,
            'call_date' => $this->call_date,
            'amb_card' => $this->amb_card,
            'handbook_settlement_type_id' => $this->handbook_settlement_type_id,
            'handbook_genders_id' => $this->handbook_genders_id,
            'handbook_departmental_accounting_id' => $this->handbook_departmental_accounting_id,
            'handbook_chernobyl_type_id' => $this->handbook_chernobyl_type_id,
            'handbook_wwii_participants_status_id' => $this->handbook_wwii_participants_status_id,
            'handbook_vocation_id' => $this->handbook_vocation_id,
        ];
    }
}
