<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Hostname;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'domain' => ['required', 'string', new Hostname, 'exists:domains,domain'],
            'crawledUrls' => ['array'],
            'crawledUrls.*' => ['url'],
            'mailServerDomainList' => ['array'],
            'mailServerDomainList.*' => [new Hostname],
        ];
    }
}
