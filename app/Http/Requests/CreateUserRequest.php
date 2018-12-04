<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use App\Rules\IsSupportedLanguage;

class CreateUserRequest extends FormRequest
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

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'salutation_id' => 'required|integer|min:1|max:2',
            'email'         => 'email|required|unique:users',
            'password'      => 'required|min:8',
            'first_name'    => 'required',
            'last_name'     => 'required',
            'org_size_id'   => 'integer|min:1|max:7',
            'preferred_language' => new IsSupportedLanguage(),
        ];
    }
}
