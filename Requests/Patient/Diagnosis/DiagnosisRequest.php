<?php

namespace App\Http\Requests\Patient\Diagnosis;

use App\Http\Requests\ApiRequest;

class DiagnosisRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'morphology_conclusion_date' => 'nullable|date',
            'tnm_t' => 'nullable|integer',
            'tnm_n' => 'nullable|integer',
            'tnm_m' => 'nullable|integer',
            'tnm_pt' => 'nullable|integer',
            'tnm_pn' => 'nullable|integer',
            'tnm_pm' => 'nullable|integer',
            'serum_marker' => 'nullable|integer',
            'risk_factor' => 'nullable|integer',
            'histological_report_id' => 'nullable|string|max:255',
            'histological_report_date' => 'nullable|date',
            'immunohist_report_id' => 'nullable|string|max:255',
            'immunohist_report_date' => 'nullable|date',
            'set_date' => 'nullable|date',
            'taken_date' => 'nullable|date',
            'diagnosis_status_date' => 'nullable|date',
            'handbook_circumstance_id' => 'nullable|integer',
            'handbook_institution_id' => 'nullable|integer',
            'handbook_institution_type_id' => 'nullable|integer',
            'handbook_initial_registration_id' => 'nullable|integer',
            'handbook_neglect_cause_id' => 'nullable|integer',
            'handbook_diagnosis_status_id' => 'nullable|integer',
            'handbook_confirmation_method_id' => 'nullable|integer',
            'handbook_immunohist_status_id' => 'nullable|integer',
            'handbook_phase_id' => 'nullable|integer',
            'handbook_localization_id' => 'nullable|integer',
            'handbook_localization_side_id' => 'nullable|integer',
            'handbook_icd10_id' => 'nullable|integer',
            'handbook_differentiation_degree_id' => 'nullable|integer',
            'handbook_morphology_type_id' => 'nullable|integer',
        ];
    }
}
