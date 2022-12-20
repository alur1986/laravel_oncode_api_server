<?php

namespace App\Http\Requests\User;

use App\Enums\UserRole;
use App\Http\Requests\ApiRequest;
use Illuminate\Validation\Rule;

class UserRequest extends ApiRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'role' => ['integer', Rule::in(UserRole::getWithoutDeveloper())],
        ];
    }
}
