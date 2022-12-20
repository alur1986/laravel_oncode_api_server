<?php

namespace App\Http\Requests\Patient\State;

use App\Http\Requests\ApiRequest;

class StateRequest extends ApiRequest
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
            'handbook_patient_state_id' => 'required|integer|exists:handbook_patient_states,id'
        ];
    }
}
