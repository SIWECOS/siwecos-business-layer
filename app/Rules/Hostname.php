<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class Hostname implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $forbiddenChars = collect([
            '/', '@', ':', ',', '?', '&'
        ]);

        if (strlen($value) < 3) {
            return false;
        }

        foreach ($forbiddenChars as $char) {
            if (Str::contains($value, $char)) {
                return false;
            }
        }

        if (Str::contains($value, '.')) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'No valid hostname provided.';
    }
}
