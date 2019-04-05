<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Language Lines
  |--------------------------------------------------------------------------
  |
  | This is a generated file.
  |
  | Any manual change will be lost.
  |
  */

  // These are the en texts for
  'SCANNER_NAME' => 'TLS Scanner',

  // Test: BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE_HEADLINE'      => 'Check for Bleichenbacher vulnerability <span class="promarker"></span>',
  'BLEICHENBACHER_VULNERABLE_POSITIVE'      => 'Not vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/RSA_(cryptosystem)#Adaptive_chosen_ciphertext_attacks">Bleichenbacher</a> (ROBOT).',
  'BLEICHENBACHER_VULNERABLE_NEGATIVE'      => 'Vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/RSA_(cryptosystem)#Adaptive_chosen_ciphertext_attacks">Bleichenbacher</a> (ROBOT).',
  'BLEICHENBACHER_VULNERABLE_DESCRIPTION'   => '<p>The server is vulnerable to a <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/RSA_(cryptosystem)#Adaptive_chosen_ciphertext_attacks">Bleichenbacher</a> attack (ROBOT). Through such an attack, the communication can be decoded and user input, such as passwords, can be read as clear text during transfer. </p>',
  'BLEICHENBACHER_VULNERABLE_SOLUTION_TIPS' => '<p>If <i>vulnerability</i> was reported, check your <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">certificate</a> or update your <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS implementation</a> on your server immediately. </p>',
  'BLEICHENBACHER_VULNERABLE_LINK'          => 'https://siwecos.de/wiki/Bleichenbacher-Vulnerability/EN',

  // Test: CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED_HEADLINE'      => 'Check of certificate validity period',
  'CERTIFICATE_EXPIRED_POSITIVE'      => '<a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">Certificate</a> not expired',
  'CERTIFICATE_EXPIRED_NEGATIVE'      => '<a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">Certificate</a> expired',
  'CERTIFICATE_EXPIRED_DESCRIPTION'   => '<p>This message means that your <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">Server certificate</a> has expired. Visitors will be warned that your website may be insecure or not trustworthy. If a visitor uses HTTPS to open your website, he or she may receive an error message, for example "Your certificate expired on (date)". The website will appear insecure or not trustworthy to visitors. </p>',
  'CERTIFICATE_EXPIRED_SOLUTION_TIPS' => '<p>If <i>Certificate expired</i> was reported renew the <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">certificate</a>. For information on how to renew a certificate, please refer to: <a target="siwecos_wiki" href="https://siwecos.de/wiki/Zertifikate#Was_tun.2C_wenn_ein_SSL-Zertifikat_abgelaufen_ist.3F" title="Zertifikate">certificate expired (German only)</a>. </p>',
  'CERTIFICATE_EXPIRED_LINK'          => 'https://siwecos.de/wiki/Certificate-Expired/EN',

  // Test: CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER_HEADLINE'      => 'Verification of certificate transmission',
  'CERTIFICATE_NOT_SENT_BY_SERVER_POSITIVE'      => 'Server sends a certificate',
  'CERTIFICATE_NOT_SENT_BY_SERVER_NEGATIVE'      => 'Server does not send a certificate',
  'CERTIFICATE_NOT_SENT_BY_SERVER_DESCRIPTION'   => '<p>The server has not sent a <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">certificate</a>. This is unusual and should not occur. The server should check its <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS configuration</a> and, if necessary, disable anonymous <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cipher_suite">cipher suites</a>. </p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_SOLUTION_TIPS' => '<p>If <i>Server does not send a certificate</i> was reported, urgently update your <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS implementation</a>. Current software no longer allows this type of configuration. </p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_LINK'          => 'https://siwecos.de/wiki/Certificate-Not-Sent/EN',

  // Test: CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET_HEADLINE'      => 'Check of certificate validity',
  'CERTIFICATE_NOT_VALID_YET_POSITIVE'      => '<a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">Certificate</a> is already valid',
  'CERTIFICATE_NOT_VALID_YET_NEGATIVE'      => '<a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">Certificate</a> is not yet valid',
  'CERTIFICATE_NOT_VALID_YET_DESCRIPTION'   => '<p>This message means that your <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">server certificate</a> is not yet valid. Visitors will be warned that your website may be insecure or not trustworthy. If a visitor uses HTTPS to open your website, he or she may receive an error message. </p>',
  'CERTIFICATE_NOT_VALID_YET_SOLUTION_TIPS' => '<p>If <i>Certificate is not yet valid</i> was reported, deactivate the <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">certificate</a> while it is not yet valid. Your website will then not be certified, but at least visitors will not receive a warning message when they open your website. Alternatively, it is possible to use your old certificate while it is still valid. For information on how to renew certificate, please refer to: <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate-Expired/EN" title="Certificate-Expired/EN">certificate expired</a>. </p>',
  'CERTIFICATE_NOT_VALID_YET_LINK'          => 'https://siwecos.de/wiki/Certificate-Not-Valid/EN',

  // Test: CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION_HEADLINE'      => 'Check of the certificate\'s encryption strength',
  'CERTIFICATE_WEAK_HASH_FUNCTION_POSITIVE'      => 'Strong hash algorithm',
  'CERTIFICATE_WEAK_HASH_FUNCTION_NEGATIVE'      => 'Weak hash algorithm',
  'CERTIFICATE_WEAK_HASH_FUNCTION_DESCRIPTION'   => '<p>This message means that your <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">server certificate</a> has a weak hash algorithm (encryption). It may be an easy target for hacker attacks. However, a weak hash algorithm will not cause a warning message to be displayed when your website is accessed. </p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_SOLUTION_TIPS' => '<p>If <i>weak hash algorithm</i> was reported, you should install a new <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">certificate</a> with a secure hash function (strong encryption). For information on how to obtain a secure certificate, please refer to: <a target="siwecos_wiki" href="https://siwecos.de/wiki/Zertifikate#Wie_wird_ein_SSL-Zertifikat_installiert.3F" title="Zertifikate">install certificates (German only)</a>. </p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_LINK'          => 'https://siwecos.de/wiki/Weak-Encryption/EN',

  // Test: CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED_HEADLINE'      => 'Check of client encryption method',
  'CIPHERSUITEORDER_ENFORCED_POSITIVE'      => 'Responsible selection of encryption methods',
  'CIPHERSUITEORDER_ENFORCED_NEGATIVE'      => 'Irresponsible selection of encryption methods',
  'CIPHERSUITEORDER_ENFORCED_DESCRIPTION'   => '<p>Your web server/website is configured to give priority to the encryption method selected by the website visitor rather than by your web server. Servers should not allow their clients to select the encryption method, but should actively select strong connections. </p>',
  'CIPHERSUITEORDER_ENFORCED_SOLUTION_TIPS' => '<p>If <i>Irresponsible selection of encryption methods</i> was reported, configure your web server so that the web server selects the encryption method that is used for communication between your website and the visitor\'s web browser. </p>',
  'CIPHERSUITEORDER_ENFORCED_LINK'          => 'https://siwecos.de/wiki/Encryption-Method-Client/EN',

  // Test: CIPHERSUITE_ANON
  'CIPHERSUITE_ANON_HEADLINE'      => 'Check for anonymous encryption method',
  'CIPHERSUITE_ANON_POSITIVE'      => 'Anonymous key exchange not supported',
  'CIPHERSUITE_ANON_NEGATIVE'      => 'Anonymous key exchange supported',
  'CIPHERSUITE_ANON_DESCRIPTION'   => '<p>Your web server/website is configured to make connections using an insecure encryption method (<a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cipher_suite">cipher suite</a>) without access rights control. This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>. </p>',
  'CIPHERSUITE_ANON_SOLUTION_TIPS' => '<p>If <i>Anonymous key exchange supported</i> was reported, deactivate support for anonymous key exchange in the encryption method settings. As a consequence of the known <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> vulnerabilities, the most important rule is to use TLS 1.2 whenever possible. SSL 3.0 should be disabled in the Browser. </p>',
  'CIPHERSUITE_ANON_LINK'          => 'https://siwecos.de/wiki/Key-Exchange-Method/EN',

  // Test: CIPHERSUITE_DES
  'CIPHERSUITE_DES_HEADLINE'      => 'Check for DES encryption method',
  'CIPHERSUITE_DES_POSITIVE'      => 'Outdated DES encryption method not supported',
  'CIPHERSUITE_DES_NEGATIVE'      => 'Outdated DES encryption method supported',
  'CIPHERSUITE_DES_DESCRIPTION'   => '<p>Your web server/website is configured to support the outdated DES encryption method (<a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cipher_suite">cipher suite</a>), which is regarded as insecure. This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>. </p>',
  'CIPHERSUITE_DES_SOLUTION_TIPS' => '<p>If <i>Outdated DES encryption method supported</i> was reported, deactivate support for the DES encryption method in your web server software. </p>',
  'CIPHERSUITE_DES_LINK'          => 'https://siwecos.de/wiki/Weak-DES-Encryption-Protocol/EN',

  // Test: CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT_HEADLINE'      => 'Check for weak encryption functions',
  'CIPHERSUITE_EXPORT_POSITIVE'      => 'Weak EXPORT encryption not supported',
  'CIPHERSUITE_EXPORT_NEGATIVE'      => 'Weak EXPORT encryption supported',
  'CIPHERSUITE_EXPORT_DESCRIPTION'   => '<p>Your web server/website is configured to support intentionally insecure encryption methods (<a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cipher_suite">cipher suite</a>). This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>. </p>',
  'CIPHERSUITE_EXPORT_SOLUTION_TIPS' => '<p>If <i>Weak EXPORT encryption supported</i> was reported, deactivate support for EXPORT encryption methods on the web server. </p>',
  'CIPHERSUITE_EXPORT_LINK'          => 'https://siwecos.de/wiki/Weakened-Encryption-Protocol/EN',

  // Test: CIPHERSUITE_NULL
  'CIPHERSUITE_NULL_HEADLINE'      => 'Check for NULL ciphers',
  'CIPHERSUITE_NULL_POSITIVE'      => 'Insecure NULL ciphers not supported',
  'CIPHERSUITE_NULL_NEGATIVE'      => 'Insecure NULL ciphers supported',
  'CIPHERSUITE_NULL_DESCRIPTION'   => '<p>Your web server/website is configured to allow unencrypted voice transmission via a secure channel. This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>. </p>',
  'CIPHERSUITE_NULL_SOLUTION_TIPS' => '<p>If <i>Insecure NULL ciphers supported</i> was reported, deactivate support for NULL encryption methods. </p>',
  'CIPHERSUITE_NULL_LINK'          => 'https://siwecos.de/wiki/Unencrypted-Communication/EN',

  // Test: CIPHERSUITE_RC4
  'CIPHERSUITE_RC4_HEADLINE'      => 'Check for RC4 encryption method',
  'CIPHERSUITE_RC4_POSITIVE'      => 'Outdated <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/RC4">RC4</a> encryption method not supported',
  'CIPHERSUITE_RC4_NEGATIVE'      => 'Outdated <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/RC4">RC4</a> encryption method supported',
  'CIPHERSUITE_RC4_DESCRIPTION'   => '<p>Your web server/website is configured to support the outdated <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/RC4">RC4</a> encryption method (<a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cipher_suite">cipher suite</a>), which is regarded as insecure. This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>. </p>',
  'CIPHERSUITE_RC4_SOLUTION_TIPS' => '<p>If <i>Outdated RC4 encryption method supported</i> was reported, deactivate support for the <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/RC4">RC4</a> encryption method. </p>',
  'CIPHERSUITE_RC4_LINK'          => 'https://siwecos.de/wiki/Insecure-Encryption-Function_RC4/EN',

  // Test: CRIME_VULNERABLE
  'CRIME_VULNERABLE_HEADLINE'      => 'Check for the CRIME vulnerability',
  'CRIME_VULNERABLE_POSITIVE'      => 'Not vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/CRIME-Vulnerability/EN" title="CRIME-Vulnerability/EN">Crime</a>',
  'CRIME_VULNERABLE_NEGATIVE'      => 'Vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/CRIME-Vulnerability/EN" title="CRIME-Vulnerability/EN">Crime</a>',
  'CRIME_VULNERABLE_DESCRIPTION'   => '<p>The server is vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/CRIME-Vulnerability/EN" title="CRIME-Vulnerability/EN">Crime</a>. This allows an attacker to decode the communication. </p>',
  'CRIME_VULNERABLE_SOLUTION_TIPS' => '<p>Crime vulnerability can be defeated by preventing the use of compression. Either on the client side, if the browser disables the compression of SPDY requests, or if the web page prevents the use of data compression for such transactions using the protocol negotiation characteristics of the <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> protocol. Deactivate TLS compression on your server. </p>',
  'CRIME_VULNERABLE_LINK'          => 'https://siwecos.de/wiki/CRIME-Vulnerability/EN',

  // Test: HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE_HEADLINE'      => 'Check for the <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Heartbleed">Heartbleed</a> vulnerability. <span class="promarker"></span>',
  'HEARTBLEED_VULNERABLE_POSITIVE'      => 'Not vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/Heartbleed-Vulnerability/EN" title="Heartbleed-Vulnerability/EN">Heartbleed</a>',
  'HEARTBLEED_VULNERABLE_NEGATIVE'      => 'Vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/Heartbleed-Vulnerability/EN" title="Heartbleed-Vulnerability/EN">Heartbleed</a>',
  'HEARTBLEED_VULNERABLE_DESCRIPTION'   => '<p>The server is vulnerable to a <a target="siwecos_wiki" href="https://siwecos.de/wiki/Heartbleed-Vulnerability/EN" title="Heartbleed-Vulnerability/EN">Heartbleed attack</a>. As a result, an attacker could read sensitive data from the server\'s working memory, such as private keys and customer data. </p>',
  'HEARTBLEED_VULNERABLE_SOLUTION_TIPS' => '<p>In case of vulnerability update your <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> implementation on your server immediately. </p>',
  'HEARTBLEED_VULNERABLE_LINK'          => 'https://siwecos.de/wiki/Heartbleed-Vulnerability/EN',

  // Test: HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED_HEADLINE'      => 'Check response time of the HTTPS header',
  'HTTPS_NOT_SUPPORTED_POSITIVE'      => 'Server speaks <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a>.',
  'HTTPS_NOT_SUPPORTED_NEGATIVE'      => 'Server does not seem to speak <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a>.',
  'HTTPS_NOT_SUPPORTED_DESCRIPTION'   => '<p>The server does not seem to support <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> (Transport Layer Security). This means that you are not using encryption to protect your own and your customers\' data. </p>',
  'HTTPS_NOT_SUPPORTED_SOLUTION_TIPS' => '<p>If <i>Server does not seem to speak TLS</i> was reported, activate <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> (Transport Layer Security). </p>',
  'HTTPS_NOT_SUPPORTED_LINK'          => 'https://siwecos.de/wiki/No-TLS-Support/EN',

  // Test: HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE_HEADLINE'      => 'Check response time of the <a target="siwecos_wiki" href="https://siwecos.de/wiki/Header" title="Header">Headers</a>',
  'HTTPS_NO_RESPONSE_POSITIVE'      => 'Server responds.',
  'HTTPS_NO_RESPONSE_NEGATIVE'      => 'Server does not respond.',
  'HTTPS_NO_RESPONSE_DESCRIPTION'   => '<p>The server does not seem to respond. Have you entered the <a target="siwecos_wiki" href="https://siwecos.de/wiki/Domain" title="Domain">Domain</a> correctly? </p>',
  'HTTPS_NO_RESPONSE_SOLUTION_TIPS' => '<p>If the server does not respond, please check your input for typing errors. </p>',
  'HTTPS_NO_RESPONSE_LINK'          => 'https://siwecos.de/wiki/Response-Time-Exceeded/EN',

  // Test: INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_HEADLINE'      => 'Check for the Ephemeral Invalid Curve vulnerability. <span class="promarker"></span>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_POSITIVE'      => 'Not vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Vulnerability/EN" title="Invalid-Curve-Ephemeral-Vulnerability/EN">Ephemeral Invalid Curve attacks</a>.',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_NEGATIVE'      => 'Vulnerable by <a target="siwecos_wiki" href="https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Vulnerability/EN" title="Invalid-Curve-Ephemeral-Vulnerability/EN">Ephemeral Invalid Curve attacks</a>.',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_DESCRIPTION'   => '<p>The server is vulnerable to an <a target="siwecos_wiki" href="https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Vulnerability/EN" title="Invalid-Curve-Ephemeral-Vulnerability/EN">Ephemeral Invalid Curve Angriff</a>. This allows an attacker to attack connections. </p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SOLUTION_TIPS' => '<p>If vulnerability was reported, update your <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> implementation on your server immediately. </p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_LINK'          => 'https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Vulnerability/EN',

  // Test: INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE_HEADLINE'      => 'Check for the Invalid Curve vulnerability. <span class="promarker"></span>',
  'INVALID_CURVE_VULNERABLE_POSITIVE'      => 'Not vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/Invalid-Curve-Vulnerability/EN" title="Invalid-Curve-Vulnerability/EN">Invalid Curve attacks</a>.',
  'INVALID_CURVE_VULNERABLE_NEGATIVE'      => 'Vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/Invalid-Curve-Vulnerability/EN" title="Invalid-Curve-Vulnerability/EN">Invalid Curve attacks</a>.',
  'INVALID_CURVE_VULNERABLE_DESCRIPTION'   => '<p>The server is vulnerable to an <a target="siwecos_wiki" href="https://siwecos.de/wiki/Invalid-Curve-Vulnerability/EN" title="Invalid-Curve-Vulnerability/EN">Invalid Curve attack</a>. This allows an attacker to steal the private key of your <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">certificate</a>. </p>',
  'INVALID_CURVE_VULNERABLE_SOLUTION_TIPS' => '<p>If vulnerability was reported, update your <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> implementation on your server immediately. </p>',
  'INVALID_CURVE_VULNERABLE_LINK'          => 'https://siwecos.de/wiki/Invalid-Curve-Vulnerability/EN',

  // Test: PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE_HEADLINE'      => 'Check for the Padding Oracle vulnerability. <span class="promarker"></span>',
  'PADDING_ORACLE_VULNERABLE_POSITIVE'      => 'Not vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/Padding-Oracle-Vulnerability/EN" title="Padding-Oracle-Vulnerability/EN">Padding Oracle attacks</a>.',
  'PADDING_ORACLE_VULNERABLE_NEGATIVE'      => 'Vulnerable to <a target="siwecos_wiki" href="https://siwecos.de/wiki/Padding-Oracle-Vulnerability/EN" title="Padding-Oracle-Vulnerability/EN">Padding Oracle attacks</a>.',
  'PADDING_ORACLE_VULNERABLE_DESCRIPTION'   => '<p>The server is vulnerable to a <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Padding_oracle_attack">Padding Oracle attack</a>, which allows an attacker to decrypt the communication. </p>',
  'PADDING_ORACLE_VULNERABLE_SOLUTION_TIPS' => '<p>If vulnerability was reported, update your <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> implementation on your server immediately. </p>',
  'PADDING_ORACLE_VULNERABLE_LINK'          => 'https://siwecos.de/wiki/Padding-Oracle-Vulnerability/EN',

  // Test: POODLE_VULNERABLE
  'POODLE_VULNERABLE_HEADLINE'      => 'Check for the Poodle vulnerability',
  'POODLE_VULNERABLE_POSITIVE'      => 'Not vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/POODLE">POODLE</a>',
  'POODLE_VULNERABLE_NEGATIVE'      => 'Vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/POODLE">POODLE</a>',
  'POODLE_VULNERABLE_DESCRIPTION'   => '<p>The server is vulnerable to a <a target="siwecos_wiki" href="https://siwecos.de/wiki/POODLE-Vulnerability/EN" title="POODLE-Vulnerability/EN">POODLE attack</a>, which allows an attacker to decrypt the communication. </p>',
  'POODLE_VULNERABLE_SOLUTION_TIPS' => '<p>If vulnerability was reported, deactivate the outdated encryption protocol SSL3 on your server immediately! </p>',
  'POODLE_VULNERABLE_LINK'          => 'https://siwecos.de/wiki/POODLE-Vulnerability/EN',

  // Test: PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2_HEADLINE'      => 'Check for outdated SSL2 protocol',
  'PROTOCOLVERSION_SSL2_POSITIVE'      => 'Outdated protocol version SSL2 not supported.',
  'PROTOCOLVERSION_SSL2_NEGATIVE'      => 'Outdated protocol version SSL2 supported.',
  'PROTOCOLVERSION_SSL2_DESCRIPTION'   => '<p>The server supports the outdated protocol version SSL2, which is considered to be highly insecure. By using this version, you massively compromise the security of the server and possibly your entire company network. </p>',
  'PROTOCOLVERSION_SSL2_SOLUTION_TIPS' => '<p>If <i>Outdated protocol version SSL2 supported</i> was reported: <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS encoding</a> is considered to be the standard today. Therefore you should not use SSL2. </p>',
  'PROTOCOLVERSION_SSL2_LINK'          => 'https://siwecos.de/wiki/Outdated-Protocol-Version-SSL2/EN',

  // Test: PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3_HEADLINE'      => 'Check for outdated SSL3 protocol',
  'PROTOCOLVERSION_SSL3_POSITIVE'      => 'Outdated protocol version SSL3 not supported.',
  'PROTOCOLVERSION_SSL3_NEGATIVE'      => 'Outdated protocol version SSL3 supported.',
  'PROTOCOLVERSION_SSL3_DESCRIPTION'   => '<p>The server supports the outdated protocol version SSL3, which is considered to be highly insecure. By using this version, you massively compromise the security of the server and possibly your entire company network. </p>',
  'PROTOCOLVERSION_SSL3_SOLUTION_TIPS' => '<p>If <i>Outdated protocol version SSL3 supported</i> was reported: <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> encoding is considered to be the standard today. Therefore you should not use SSL3. </p>',
  'PROTOCOLVERSION_SSL3_LINK'          => 'https://siwecos.de/wiki/Outdated-Protocol-Version-SSL3/EN',

  // Test: PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13_HEADLINE'      => 'Check for use of the <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS 1.3 protocol</a>',
  'PROTOCOLVERSION_TLS13_POSITIVE'      => '<a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS 1.3 protocol</a> not supported.',
  'PROTOCOLVERSION_TLS13_NEGATIVE'      => 'Modern <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS 1.3 protocol</a> supported.',
  'PROTOCOLVERSION_TLS13_DESCRIPTION'   => '<p>The server supports the latest <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS 1.3 protocol version</a>. This version is still going through the standardisation process. If you do not understand what this means, you can deactivate the version, because most browsers do not yet support this version, and TLS 1.3 is still in development. </p>',
  'PROTOCOLVERSION_TLS13_SOLUTION_TIPS' => '<p>There is no need for action. </p>',
  'PROTOCOLVERSION_TLS13_LINK'          => 'https://siwecos.de/wiki/Protocol-Version-TLS13-Found/EN',

  // Test: SWEET32_VULNERABLE
  'SWEET32_VULNERABLE_HEADLINE'      => 'Check for the Sweet32 vulnerability',
  'SWEET32_VULNERABLE_POSITIVE'      => 'Not vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Sweet32">Sweet32</a>.',
  'SWEET32_VULNERABLE_NEGATIVE'      => 'Vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Sweet32">Sweet32</a>.',
  'SWEET32_VULNERABLE_DESCRIPTION'   => '<p>The server is vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Sweet32">Sweet32</a>, which allows an attacker to decrypt parts of the communication if large amounts of data is transferred via a connection. </p>',
  'SWEET32_VULNERABLE_SOLUTION_TIPS' => '<p>Wherever possible, you should refrain from using Triple-DES and Blowfish. Deactivate <a target="siwecos_extern" rel="nofollow" class="external text" href="https://www.itwissen.info/Blockchiffre-block-cipher.html">Blockchiffren (German only)</a> with a length of 64 bit. Make sure that protocols such as SSLv2 and SSLv3 are disabled. </p>',
  'SWEET32_VULNERABLE_LINK'          => 'https://siwecos.de/wiki/Sweet32-Vulnerability/EN',

  // Test: TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE_HEADLINE'      => 'Check for the TLS-POODLE vulnerability',
  'TLS_POODLE_VULNERABLE_POSITIVE'      => 'Not vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/POODLE">TLS POODLE</a>.',
  'TLS_POODLE_VULNERABLE_NEGATIVE'      => 'Vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/POODLE">TLS POODLE</a>.',
  'TLS_POODLE_VULNERABLE_DESCRIPTION'   => '<p>The server is vulnerable to a variant of the <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/POODLE">POODLE attack</a> on <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a>, which allows an attacker to decrypt the communication. </p>',
  'TLS_POODLE_VULNERABLE_SOLUTION_TIPS' => '<p>If vulnerability was reported, update the <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> implementation on your server immediately. In the Apache configuration, you can specify the line "SSLProtocol All -SSLv2 -SSLv3 ". </p>',
  'TLS_POODLE_VULNERABLE_LINK'          => 'https://siwecos.de/wiki/TLS-POODLE-Vulnerability/EN',

  // Result texts follow
  'ANON_SUITES'                        => 'Your web server/website is configured to make connections using an anonymous encryption method (<a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cipher_suite">cipher suite</a>) without authentication. This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>.',
  'CERTIFICATE_WEAK_SIGN_ALGO'         => 'Check of certificate encryption',
  'CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS' => 'Check of certificate encryption',
  'DES_SUITES'                         => 'Your web server/website is configured to support the outdated DES encryption method (<a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cipher_suite">cipher suite</a>), which is regarded as insecure. This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>.',
  'EXPIRED'                            => 'Your <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">certificate</a> expired on :DATE. Visitors will be warned that your website may be insecure or not trustworthy.',
  'EXPORT_SUITES'                      => 'Your web server/website is configured to support intentionally insecure encryption methods (<a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cipher_suite">cipher suite</a>). This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>.',
  'HASH_ALGO'                          => 'Your server certificate uses the weak hash algorithm :HASH. This allows the <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">certificate</a> to be forged very easily. However, a weak hash algorithm will not cause a warning message to be displayed when your website is accessed.',
  'HTTPS_RESPONSE'                     => 'The server “:HOST“ does not respond to encrypted HTTP (HTTPS) requests.',
  'HTTPS_SUPPORTED'                    => 'The server “:HOST“ does not seem to support <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Transport_Layer_Security">TLS</a> (Transport Layer Security). This means that you are not using encryption to protect your own and your customers\' data.',
  'NOT_YET_VALID'                      => 'Your <a target="siwecos_wiki" href="https://siwecos.de/wiki/Certificate" title="Certificate">certificate</a> is not valid before :DATE. Until then, visitors to your website will be warned that your website may be insecure or not trustworthy.',
  'NULL_SUITES'                        => 'Your web server/website is configured to allow unencrypted voice transmission via a secure channel. This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>.',
  'RC4_SUITES'                         => 'Your web server/website is configured to support the outdated <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/RC4">RC4</a> encryption method (<a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cipher_suite">cipher suite</a>), which is regarded as insecure. This makes you vulnerable to <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Man-in-the-middle_attack">man-in-the-middle-attacks</a>.',

];
