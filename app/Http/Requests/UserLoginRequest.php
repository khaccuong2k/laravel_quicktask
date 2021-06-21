<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required',
        ];
    }

    /**
     * Return array messages for request login
     */
    public function messages()
    {
        return [
            'email.required' => 'messages.login.validate.requiredEmail',
            'password.required' => 'messages.login.validate.requiredPassword',
        ];
    }
}
