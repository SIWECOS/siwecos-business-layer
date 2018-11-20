<?php

namespace Tests\Feature;

use App\Token;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

const USER_API = '/api/v1/users/';
const DOMAIN_API = '/api/v1/domains/';
const TEST_DOMAIN = 'http://siwecos-test-domain';

class SiwecosDomainControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $mastertoken;
    protected $token;
    protected $domain;
    protected $testUserId;
    protected $user;

    public function setUp()
    {
        parent::setUp();

        // Generate mastertoken
        $this->mastertoken = new Token(['credits' => 9999]);
        $this->mastertoken->setAclLevel(9999);
        $this->mastertoken->save();
    }

    public function testAddNewDomainAndDelete()
    {
        $user = $this->getTestUser();

        $response = $this->json('POST', DOMAIN_API.'addNewDomain', ['domain' => TEST_DOMAIN, 'danger_level' => 0],
            ['masterToken' => $this->mastertoken->token, 'userToken' => $user->token]);
        $response->assertJsonStructure(['domainToken', 'domainId']);
        $response->assertStatus(200);

        $response = $this->json('POST', DOMAIN_API.'deleteDomain', ['domain' => TEST_DOMAIN],
            ['masterToken' => $this->mastertoken->token, 'userToken' => $user->token]);

        $response->assertStatus(200);
    }

    public function testAddNewDomainWithoutToken()
    {
        $response = $this->json('POST', DOMAIN_API.'addNewDomain', ['domain' => TEST_DOMAIN, 'danger_level' => 0],
            ['masterToken' => $this->mastertoken->token]);
        $response->assertStatus(403);
    }

    public function testAddNewDomainWithExistingEntity()
    {
        // DOMAIN ALREADY VERIFIED

        // Try to set the domain again
        $user = $this->getTestUser(true);
        $response = $this->json('POST', DOMAIN_API.'addNewDomain', ['domain' => TEST_DOMAIN, 'danger_level' => 0],
            ['masterToken' => $this->mastertoken->token, 'userToken' => $user->token]);

        $response->assertStatus(409);

    }

    /** @test */
    public function verify_domain_returns_417_if_domain_can_not_be_validated()
    {
        $user = $this->getTestUser();
        $response = $this->json('POST', DOMAIN_API.'addNewDomain', ['domain' => TEST_DOMAIN, 'danger_level' => 0],
            ['masterToken' => $this->mastertoken->token, 'userToken' => $user->token]);
        $response->assertJsonStructure(['domainToken', 'domainId']);
        $response->assertStatus(200);

        $response = $this->json('POST',  DOMAIN_API.'verifyDomain', ['domain' => TEST_DOMAIN],
            ['masterToken' => $this->mastertoken->token, 'userToken' => $user->token]);
        $response->assertStatus(417);

        $response = $this->json('POST', DOMAIN_API.'deleteDomain', ['domain' => TEST_DOMAIN],
            ['masterToken' => $this->mastertoken->token, 'userToken' => $user->token]);
        $response->assertStatus(200);
    }

    public function testListDomain()
    {
        $user = $this->getTestUser();
        $response = $this->json('POST', DOMAIN_API.'addNewDomain', ['domain' => TEST_DOMAIN, 'danger_level' => 0],
            ['masterToken' => $this->mastertoken->token, 'userToken' => $user->token]);
        $response->assertJsonStructure(['domainToken', 'domainId']);
        $response->assertStatus(200);

        $response = $this->json('POST', DOMAIN_API.'listDomains', [],
            ['masterToken' => $this->mastertoken->token, 'userToken' => $user->token]);
        $response->assertJsonStructure(['domains']);
        $response->assertStatus(200);

        $response = $this->json('POST', DOMAIN_API.'deleteDomain', ['domain' => TEST_DOMAIN],
            ['masterToken' => $this->mastertoken->token, 'userToken' => $user->token]);
        $response->assertStatus(200);
    }
}
