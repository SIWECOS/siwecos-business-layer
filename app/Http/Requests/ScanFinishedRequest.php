<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ScanFinishedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (config('siwecos.coreApiAuthenticationToken')) {
            return config('siwecos.coreApiAuthenticationToken') === request()->header('Authentication-Token');
        }

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
        // dd(request()->all());
        return [
            'results' => ['required', 'array'],
            'results.*' => ['array'],
            'results.*.name' => ['required', 'string'],
            'results.*.started_at' => ['required', 'string'],
            'results.*.finished_at' => ['required', 'string'],
            'results.*.hasError' => ['required', 'boolean'],
            'results.*.score' => ['required', 'integer'],
        ];
    }
}
