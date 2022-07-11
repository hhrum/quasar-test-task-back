<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'Required|min:3|string',
            'sex' => 'Required|string',
            'birthday' => 'Required|Date|before:today',
            'phone'=> 'Required|regex:/^\+\d\(\d{3}\)-\d{3}-\d{4}$/i|unique',
        ];
    }
}
