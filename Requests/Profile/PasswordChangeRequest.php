<?php

namespace App\Http\Requests\Profile;

use App\Http\Requests\ApiRequest;

class PasswordChangeRequest extends ApiRequest
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
            'password' => 'required|string|confirmed',
            'current_password' => 'required|string'
        ];
    }
}
