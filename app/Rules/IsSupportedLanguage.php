<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsSupportedLanguage implements Rule
{
    protected $supportedLanguages = ['de', 'en'];

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (in_array($value, $this->supportedLanguages))
            return true;

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('validation.language_unsupported');
    }
}
