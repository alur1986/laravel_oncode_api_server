<?php

namespace App\Http\Requests\Patient\Chernobyl;

use App\Http\Requests\ApiRequest;

class LiquidatorRequest extends ApiRequest
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
            'radiation_dose' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ];
    }
}
