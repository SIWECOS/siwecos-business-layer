<?php

namespace Tests\Feature;

use App\Token;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

const USER_API = '/api/v1/users/';

class SiwecosUserControllerTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    protected $mastertoken;
    protected $token;
    protected $domain;
    protected $testUserId;

    public function setUp()
    {
        parent::setUp();
        $this->mastertoken = new Token(['credits' => 9999]);
        $this->mastertoken->setAclLevel(9999);
        $this->mastertoken->save();

        $testUser = new User(
            ['first_name'      => 'Marcel',
                'last_name'    => 'Wege',
                'salutation_id'=> 1,
                'email'        => 'mwegeTest@byte5.de',
                'address'      => 'Hanauer Landstraße 114',
                'plz'          => '60314',
                'city'         => 'Frankfurt',
                'phone'        => '+4915154727353',
                'org_name'     => 'byte5 digital media GmbH',
                'org_address'  => 'Hanauer Landstraße 114',
                'org_plz'      => '60314',
                'org_industry' => 'IT',
                'org_phone'    => '+4915154727353',
                'org_size_id'  => '1',
                'acl_id'       => 1,
                'active'       => 1,
                'org_city'     => 'Frankfurt',
                'password'     => 'notMissingAnymore', ]);
        $testUser->token = 'TEST_CASE_DUMMY_TOKEN';
        $testUser->save();
        $this->testUserId = $testUser->id;
        $this->token = $testUser->token;
    }

    public function testCreateUserNoMasterKey()
    {
        $response = $this->json('POST', USER_API.'create');
        $response->assertStatus(403);
    }

    public function testCreateUserInvalidModel()
    {
        $response = $this->json('POST', USER_API.'create',
            ['first_name'   => 'Marcel',
                'last_name' => 'Wege', ], ['masterToken' => $this->mastertoken->token]);
        $response->assertStatus(422);
    }

    public function testCreateUser()
    {
        print_r('TOKEN: '.env('CORE_MASTER_TOKEN').' / '.'URL: '.env('CORE_URL'));
        $response = $this->json('POST', USER_API.'create',
            ['first_name'      => 'Marcel',
                'last_name'    => 'Wege',
                'salutation_id'=> 1,
                'email'        => 'mwege@byte5.de',
                'address'      => 'Hanauer Landstraße 114',
                'plz'          => '60314',
                'city'         => 'Frankfurt',
                'phone'        => '+4915154727353',
                'org_name'     => 'byte5 digital media GmbH',
                'org_address'  => 'Hanauer Landstraße 114',
                'org_plz'      => '60314',
                'org_industry' => 'IT',
                'org_phone'    => '+4915154727353',
                'org_size_id'  => '1',
                'acl_id'       => 1,
                'org_city'     => 'Frankfurt', ], ['masterToken' => $this->mastertoken->token]);
        $response->assertJsonStructure(['token', 'email']);
        $this->token = $response->json()['token'];
        $response->assertStatus(200);
    }

    public function testUserIsNotActivated()
    {
        $this->testCreateUser();
        //ACTIVATION IS MISSING
        $response = $this->json('POST', USER_API.'getTokenCredits',
            [], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        $response->assertStatus(403);
    }

    public function testCreateAndActivateUser()
    {
        $this->testCreateUser();
        $responseActivation = $this->json('POST', USER_API.'activateUser',
            [], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        $responseActivation->assertJson(['active'=>1]);
        $responseActivation->assertStatus(200);
    }

    public function testGetUserByEmailInvalidData()
    {
        $response = $this->json('POST', USER_API.'getToken',
            ['email' => 'lorem'], ['masterToken' => $this->mastertoken->token]);
        $response->assertStatus(422);
    }

    public function testGetUserByEmailValidData()
    {
        $this->testCreateAndActivateUser();
        $response = $this->json('POST', USER_API.'getToken',
            ['email' => 'mwege@byte5.de'], ['masterToken' => $this->mastertoken->token]);
        $response->assertJsonStructure(['token', 'email']);
        $response->assertStatus(200);
    }

    public function testGetUserByToken()
    {
        $response = $this->json('POST', USER_API.'getUserData',
            [], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        $response->assertJson(['email'=>'mwegeTest@byte5.de']);
        $response->assertStatus(200);
    }

    public function testUserMiddleWareMissingUserToken()
    {
        $responseGetCredits = $this->json('POST', USER_API.'getTokenCredits',
            [], ['masterToken' => $this->mastertoken->token]);
        $responseGetCredits->assertStatus(403);
    }

    public function testGetUserTokenInfo()
    {
        $this->testCreateAndActivateUser();
        $response = $this->json('POST', USER_API.'getTokenCredits',
            [], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        $response->assertJson(['credits'=>50]);
        $response->assertStatus(200);
    }

    public function testDeleteUser()
    {
        $this->testCreateUser();
        $responseDeletion = $this->json('POST', USER_API.'deleteUserData',
            [], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        $responseDeletion->assertStatus(200);
        $responseGetUser = $this->json('POST', USER_API.'getUserData',
            [], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        $responseGetUser->assertStatus(403);
    }

    public function testUpdateUserDataValidData()
    {
        $response = $this->json('POST', USER_API.'updateUserData',
            ['address' => 'Bachstraße 41'], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        $response->assertJson(['address'=>'Bachstraße 41', 'token' => $this->token, 'id' => $this->testUserId]);
        $response->assertStatus(200);
    }

    public function testUpdateTokenCredits()
    {
        $this->testCreateAndActivateUser();
        $response = $this->json('POST', USER_API.'getTokenCredits',
            [], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        $response->assertJson(['credits'=>50]);
        $response->assertStatus(200);

        $response = $this->json('POST', USER_API.'updateTokenCredits',
            ['credits' => 100], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        print_r($response->json());
        $response->assertStatus(200);

        $response = $this->json('POST', USER_API.'getTokenCredits',
            [], ['masterToken' => $this->mastertoken->token, 'userToken' => $this->token]);
        $response->assertJson(['credits'=>100]);
        $response->assertStatus(200);
    }
}
