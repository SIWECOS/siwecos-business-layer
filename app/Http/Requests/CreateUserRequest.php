<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Swagger\Annotations as SWG;

/**
 * Class CreateUserRequest.
 *
 * @SWG\Definition(required={"salutation_id"}, type="object")
 */
class CreateUserRequest extends FormRequest
{
    /**
     * @var int
     * @SWG\Property(format="integer")
     */
    public $salutation_id;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $email;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $first_name;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $last_name;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $address;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $plz;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $city;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $phone;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $org_name;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $org_address;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $org_plz;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $org_city;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $org_industry;

    /**
     * @var int
     * @SWG\Property(format="integer")
     */
    public $org_size_id;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $org_phone;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    public $password;

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
        ];
    }
}
