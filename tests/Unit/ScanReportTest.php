<?php

namespace Tests\Unit;

use App\ScanReport;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Log;

class ScanReportTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function getResolvedTranslateableMessage_can_handle_scanner_interface_violations_regarding_placeholders()
    {
        $message = collect(
            json_decode('{
                        "translationStringId": "HASH_ALGO",
                        "placeholders": [
                            {
                                "hash": "SHA1"
                            },
                            {
                                "certificate": "Fingerprint: 4348a0e9444c78cb265e058d5e8944b4d84f9662bd26db257f8934a443c70161\nSubject: C=US,O=DigiCert Inc,OU=www.digicert.com,CN=DigiCert Global Root CA\nCommonNames: DigiCert Global Root CA\nValid From : Fri Nov 10 00:00:00 GMT 2006\nValid Till : Mon Nov 10 00:00:00 GMT 2031\nPublicKey  : RSA Public Key [b0:4c:5f:e9:5f:9d:2f:08:7e:a9:b6:00:d3:13:13:34:f6:b6:7d:ab]\n            modulus: e23be11172dea8a4d3a357aa50a28f0b7790c9a2a5ee12ce965b010920cc0193a74e30b753f743c46900579de28d22dd870640008109cece1b83bfdfcd3b7146e2d666c705b37627168f7b9e1e957deeb748a308dad6af7a0c3906657f4a5d1fbc17f8abbeee28d7747f7a78995985686e5c23324bbf4ec0e85a6de370bf7710bffc01f685d9a844105832a97518d5d1a2be47e2276af49a33f84908608bd45fb43a84bfa1aa4a4c7d3ecf4f5f6c765ea04b37919edc22e66dce141a8e6acbfecdb3146417c75b299e32bff2eefad30b42d4abb74132da0cd4eff881d5bb8d583fb51be84928a270da3104ddf7b216f24c0a4e07a8ed4a3d5eb57fa390c3af27\n    public exponent: 10001\n\nIssuer\t\t   : C=US,O=DigiCert Inc,OU=www.digicert.com,CN=DigiCert Global Root CA\nSignature Algorithm: RSA\nHash Algorithm     : SHA1\nROCA (simple): false"
                            }
                        ]
                    }')
        );

        $result = ScanReport::getResolvedTranslateableMessage($message, 'TLS');

        $this->assertIsString($result);
        Log::assertLogged('critical', function ($message, $context) {
            return Str::contains($message, "Scanner Interface Violation!");
        });
    }
}
