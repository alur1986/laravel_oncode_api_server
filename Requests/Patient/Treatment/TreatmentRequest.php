<?php

namespace App\Http\Requests\Patient\Treatment;

use App\Http\Requests\ApiRequest;

class TreatmentRequest extends ApiRequest
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
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'handbook_treatment_information_id' => 'required|exists:handbook_treatment_information,id',
            'handbook_institution_id' => 'required|exists:handbook_institutions,id',
            'handbook_institution_type_id' => 'required|exists:handbook_institution_types,id',
            'handbook_treatment_type_id' => 'required|exists:handbook_treatment_types,id',
            'handbook_treatment_nature_id' => 'required|exists:handbook_treatment_nature,id',
            'handbook_operation_code_id' => 'required|exists:handbook_operation_codes,id',
            'handbook_operation_method_id' => 'required|exists:handbook_operation_methods,id',
            'handbook_localization_id' => 'required|exists:handbook_localizations,id',
        ];
    }
}
