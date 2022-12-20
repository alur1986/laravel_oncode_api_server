<?php

namespace App\Http\Requests\Patient;

use App\Enums\PatientGender;
use App\Http\Requests\ApiRequest;
use Illuminate\Validation\Rule;

class PatientRequest extends ApiRequest
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
            'old_id' => 'required|string|max:255',
            'region_id' => 'required|integer|exists:regions,id',
            'gender' => ['integer', Rule::in(PatientGender::getValues())],
            'first_name' => 'required|string|max:255',
            'middle_name' => 'string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'date',
            'address' => 'string|max:255',
            'disability' => 'integer',
            'disposal_date' => 'date',
            'call_date' => 'date',
            'amb_card' => 'string|max:255',
            'handbook_settlement_type_id' => 'integer|exists:handbook_settlement_types,id',
            'handbook_departmental_accounting_id' => 'integer|exists:handbook_departmental_accounting,id',
            'handbook_сhernobyl_type_id' => 'integer|exists:handbook_сhernobyl_types,id',
            'handbook_wwii_participants_status_id' => 'integer|exists:handbook_wwii_participants_statuses,id',
            'handbook_vocation_id' => 'integer|exists:handbook_vocations,id',
        ];
    }
}
