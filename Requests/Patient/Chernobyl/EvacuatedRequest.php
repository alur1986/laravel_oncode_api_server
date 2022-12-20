<?php

namespace App\Http\Requests\Patient\Chernobyl;

use App\Http\Requests\ApiRequest;

class EvacuatedRequest extends ApiRequest
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
            'handbook_city_id' => 'required|integer|exists:handbook_cities,id',
            'locality' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'date' => 'required|date',
        ];
    }
}
