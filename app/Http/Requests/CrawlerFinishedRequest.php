<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Hostname;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Validation\Validator;

class CrawlerFinishedRequest extends FormRequest
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
        Log::critical('Crawler response could not be processed for domain: ' . request()->json('domain') . $validator->errors());
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
            'hasError' => ['required', 'boolean'],
            'domain' => ['required', 'string', new Hostname, 'exists:domains,domain'],
            'crawledUrls' => ['array'],
            'crawledUrls.*' => ['url'],
            'mailServerDomainList' => ['array'],
            'mailServerDomainList.*' => [new Hostname],
        ];
    }
}
