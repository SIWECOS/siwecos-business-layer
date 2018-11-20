<?php

namespace Tests;

use App\CoreAPI;
use App\User;
use Artisan;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    public function tearDown()
    {
        Artisan::call('migrate:reset');
        parent::tearDown();
    }

    public function getTestUser(bool $useTestToken = false)
    {
        // Create activated user
        $user = new User([
            'first_name'    => 'Marcel',
            'last_name'     => 'Wege',
            'salutation_id' => 1,
            'email'         => 'mwege@byte5.de',
            'address'       => 'Hanauer Landstraße 114',
            'plz'           => '60314',
            'city'          => 'Frankfurt',
            'phone'         => '+4915154727353',
            'org_name'      => 'byte5 digital media GmbH',
            'org_address'   => 'Hanauer Landstraße 114',
            'org_plz'       => '60314',
            'org_industry'  => 'IT',
            'org_phone'     => '+4915154727353',
            'org_size_id'   => '1',
            'acl_id'        => 1,
            'org_city'      => 'Frankfurt',
        ]);
        $user->password = \Hash::make('secret');
        $user->active = 1;
        $user->token = $useTestToken ? 'TEST_CASE_DUMMY_TOKEN' : CoreAPI::generateUserToken(50);
        $user->save();

        return $user;
    }
}
