<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use App\Http\Controllers\CoreApiController;

class GenerateReportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $coreApiController = new CoreApiController();
        $user = User::whereToken($this->get('usertoken'))->first();

        /* TODO: Fix this hack when User and Domain models is within the BLA */
        if ($user instanceof User) {
            /* Get User's domains */
            $domainResponse = $coreApiController->GetDomains($this->get('usertoken'));
            $userDomains = collect($domainResponse['domains']);

            /* Check if report id -> scanResult -> domain -> belongsTo User */
            $rawResult = $coreApiController->GetResultById($this->get('id'));
            $scannedDomain = $rawResult['domain'];

            foreach ($userDomains as $testdomain) {
                if ($testdomain['domain'] === $scannedDomain)
                    return true;
            }
        }

        return false;
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'usertoken' => 'required',
            'id'        => 'required|integer',
            'language'  => 'string',
        ];
    }
}
