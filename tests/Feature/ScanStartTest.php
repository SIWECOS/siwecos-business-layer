<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Queue;
use App\Jobs\StartScanJob;
use App\Token;

class ScanStartTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_scan_can_be_started_by_a_valid_token_for_a_verified_associated_domain()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/scan', [
            'domain' => $domain->domain
        ], ['SIWECOS-Token' => $domain->token->token]);

        $response->assertStatus(200);
        Queue::assertPushed(StartScanJob::class);
    }

    /** @test */
    public function a_scan_can_not_be_started_without_a_valid_token_or_without_the_domain_parameter()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);

        $response = $this->json('POST', '/api/v2/scan', [
            'domain' => $domain->domain
        ]);
        $response->assertStatus(403);

        $response = $this->json('POST', '/api/v2/scan', [
            'domain' => 'not_a_domain'
        ], ['SIWECOS-Token' => $domain->token->token]);
        $response->assertStatus(422);

        Queue::assertNotPushed(StartScanJob::class);
    }

    /** @test */
    public function a_scan_can_not_be_started_for_a_domain_that_does_not_belong_to_the_token()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => true]);
        $foreignToken = factory(Token::class)->create();

        $response = $this->json('POST', '/api/v2/scan', [
            'domain' => $domain->domain
        ], ['SIWECOS-Token' => $foreignToken->token]);

        $response->assertStatus(404);
        $response->assertJson([
            'message' => 'Associated Domain not found or unverified'
        ]);
        Queue::assertNotPushed(StartScanJob::class);
    }

    /** @test */
    public function a_scan_can_not_be_started_for_a_not_verified_domain()
    {
        $domain = $this->getRegisteredDomain(['is_verified' => false]);

        $response = $this->json('POST', '/api/v2/scan', [
            'domain' => $domain->domain
        ], ['SIWECOS-Token' => $domain->token->token]);

        $response->assertStatus(404);
        $response->assertJson([
            'message' => 'Associated Domain not found or unverified'
        ]);
        Queue::assertNotPushed(StartScanJob::class);
    }
}
