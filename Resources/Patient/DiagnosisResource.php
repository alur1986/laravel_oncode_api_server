<?php

namespace App\Http\Resources\Patient;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DiagnosisResource extends JsonResource
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
            'morphology_conclusion_date' => $this->morphology_conclusion_date,
            'tnm_t' => $this->tnm_t,
            'tnm_n' => $this->tnm_n,
            'tnm_m' => $this->tnm_m,
            'tnm_pt' => $this->tnm_pt,
            'tnm_pn' => $this->tnm_pn,
            'tnm_pm' => $this->tnm_pm,
            'serum_marker' => $this->serum_marker,
            'risk_factor' => $this->risk_factor,
            'histological_report_id' => $this->histological_report_id,
            'histological_report_date' => $this->histological_report_date,
            'immunohist_report_id' => $this->immunohist_report_id,
            'immunohist_report_date' => $this->immunohist_report_date,
            'set_date' => $this->set_date,
            'taken_date' => $this->taken_date,
            'diagnosis_status_date' => $this->diagnosis_status_date,
            'handbook_localization_id' => $this->handbook_localization_id,
            'handbook_localization_side_id' => $this->handbook_localization_side_id,
            'handbook_icd10_id' => $this->handbook_icd10_id,
            'handbook_differentiation_degree_id' => $this->handbook_differentiation_degree_id,
            'handbook_morphology_type_id' => $this->handbook_morphology_type_id,
            'handbook_phase_id' => $this->handbook_phase_id,
            'handbook_confirmation_method_id' => $this->handbook_confirmation_method_id,
            'handbook_immunohist_status_id' => $this->handbook_immunohist_status_id,
            'handbook_circumstance_id' => $this->handbook_circumstance_id,
            'handbook_institution_id' => $this->handbook_institution_id,
            'handbook_institution_type_id' => $this->handbook_institution_type_id,
            'handbook_initial_registration_id' => $this->handbook_initial_registration_id,
            'handbook_neglect_cause_id' => $this->handbook_neglect_cause_id,
            'handbook_diagnosis_status_id' => $this->handbook_diagnosis_status_id,
        ];
    }
}
