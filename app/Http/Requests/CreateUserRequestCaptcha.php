<?php

namespace App\Http\Requests;

use Arcanedev\NoCaptcha\Rules\CaptchaRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequestCaptcha extends FormRequest
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
	        'g-recaptcha-response' => ['required', new CaptchaRule],
	        'salutation_id' => 'required|integer|min:1|max:2',
	        'email' => 'email|required|unique:users',
	        'password' => 'required|min:8',
	        'first_name' => 'required',
	        'last_name' => 'required',
	        'org_size_id' => 'integer|min:1|max:7'
        ];
    }
}
