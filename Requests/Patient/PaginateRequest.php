<?php

namespace App\Http\Requests\Patient;

use App\Enums\PatientGender;
use Illuminate\Validation\Rule;

class PaginateRequest extends \App\Http\Requests\PaginateRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'paginate' => 'integer|min:'.$this->min_paginate.'|max:'.$this->max_paginate,
            'page' => 'integer',
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'middle_name' => 'string|max:255',
            'birthday' => 'date',
            'address' => 'string|max:255',
            'region' => 'string|max:255',
            'gender' => Rule::in(PatientGender::getValues()),
            'disability' => 'integer',
            'disposal_date' => 'date',
            'call_date' => 'date',
        ];
    }

}
