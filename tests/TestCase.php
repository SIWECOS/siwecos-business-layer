<?php

namespace Tests;

use App\CoreAPI;
use App\User;
use Artisan;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Returns an activated User.
     *
     * @param array $attributes
     * @return App\User
     */
    protected function getActivatedUser($attributes = [])
    {
        return factory(User::class)->create(array_merge($attributes, ['active' => true]));
    }
}
