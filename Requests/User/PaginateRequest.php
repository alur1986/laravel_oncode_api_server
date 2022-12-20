<?php

namespace App\Http\Requests\User;

use App\Enums\UserRole;
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
            'email' => 'email',
            'role' => Rule::in(UserRole::getWithoutDeveloper())
        ];
    }
}
