<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Swagger\Annotations as SWG;

/**
 * Class CreateUserRequest
 * @package App\Http\Requests
 * @SWG\Definition(required={"salutation_id"}, type="object")
 */
class CreateUserRequest extends FormRequest
{

    /**
     * @var int
     * @SWG\Property(format="integer")
     */
    var $salutation_id;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $email;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $first_name;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $last_name;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $address;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $plz;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $city;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $phone;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $org_name;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $org_address;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $org_plz;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $org_city;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $org_industry;

    /**
     * @var int
     * @SWG\Property(format="integer")
     */
    var $org_size_id;

    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $org_phone;


    /**
     * @var string
     * @SWG\Property(format="string")
     */
    var $password;



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
            'salutation_id' => 'required|integer|min:1|max:2',
            'email' => 'email|required',
            'password' => 'required|min:8',
            'first_name' => 'required',
            'last_name' => 'required',
            'org_size_id' => 'integer|min:1|max:7'
        ];
    }
}
