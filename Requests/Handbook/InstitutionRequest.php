<?php

namespace App\Http\Requests\Handbook;

use App\Http\Requests\ApiRequest;

class InstitutionRequest extends ApiRequest
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
            'name' => 'required|string|max:255',
            'disabled' => 'required|boolean',
            'handbook_institution_type_id' => 'required|exists:handbook_institution_types,id'
        ];
    }
}
