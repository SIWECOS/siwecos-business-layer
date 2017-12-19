<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'salutation_id' => 'integer',
            'email' => 'email',
            'first_name' => 'string',
            'last_name' => 'string',
            'address' => '',
            'plz' => '',
            'city' => '',
            'phone' => '',
            'org_name' => '',
            'org_address' => '',
            'org_plz' => '',
            'org_city' => '',
            'org_industry' => '',
            'org_phone' => '',
            'org_size_id' => 'integer'
        ];
    }
}
