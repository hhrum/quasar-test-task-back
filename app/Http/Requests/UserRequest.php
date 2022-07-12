<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'sex' => [Rule::in(User::SEX),'Required|string'] ,
            'birthday' => 'Required|Date|before:today',
            'phone'=> 'Required|regex:/^\+\d\(\d{3}\)-\d{3}-\d{4}$/i|unique',
        ];
    }
}
