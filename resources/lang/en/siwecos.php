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

  //
  // Category: %Domain% unknown.
  //
  // COULDNT_RESOLVE_HOST
  'COULDNT_RESOLVE_HOST'            => "%domain% is unknown.\n",
  //
  // Category: Attacks
  //
  // BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE'            => "Check for Bleichenbacher vulnerability <span class=\"promarker\"></span>\n",
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => "Not vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/RSA_(cryptosystem)#Adaptive_chosen_ciphertext_attacks\">Bleichenbacher</a> (ROBOT).\n",
  'BLEICHENBACHER_VULNERABLE_ERROR'      => "Vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/RSA_(cryptosystem)#Adaptive_chosen_ciphertext_attacks\">Bleichenbacher</a> (ROBOT).\n",
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => "<p>The server is vulnerable to a <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/RSA_(cryptosystem)#Adaptive_chosen_ciphertext_attacks\">Bleichenbacher</a> attack (ROBOT). Through such an attack, the communication can be decoded and user input, such as passwords, can be read as clear text during transfer.\n</p>",
  'BLEICHENBACHER_VULNERABLE_TIPS'       => "<p>Check your <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">certificate</a> or update your <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS implementation</a> on your server immediately.\n</p>",
  'BLEICHENBACHER_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Bleichenbacher-Vulnerability/EN",
  //
  // CRIME_VULNERABLE
  'CRIME_VULNERABLE'            => "Check for the CRIME vulnerability\n",
  'CRIME_VULNERABLE_SUCCESS'    => "Not vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external autonumber\" href=\"https://en.wikipedia.org/wiki/CRIME\">[1]</a>\n",
  'CRIME_VULNERABLE_ERROR'      => "Vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external autonumber\" href=\"https://en.wikipedia.org/wiki/CRIME\">[1]</a>\n",
  'CRIME_VULNERABLE_ERROR_DESC' => "<p>The server is vulnerable to [<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external autonumber\" href=\"https://en.wikipedia.org/wiki/CRIME\">[1]</a>]. This allows an attacker to decode the communication.\n</p>",
  'CRIME_VULNERABLE_TIPS'       => "<p><a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external autonumber\" href=\"https://en.wikipedia.org/wiki/CRIME\">[1]</a> can be defeated by preventing the use of compression. Either on the client side, if the browser disables the compression of SPDY requests, or if the web page prevents the use of data compression for such transactions using the protocol negotiation characteristics of the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> protocol. Deactivate TLS compression on your server.\n</p>",
  'CRIME_VULNERABLE_LINK'       => "https://siwecos.de/wiki/CRIME-Vulnerability/EN",
  //
  // HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE'            => "Check for the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Heartbleed\">Heartbleed</a> vulnerability. <span class=\"promarker\"></span>\n",
  'HEARTBLEED_VULNERABLE_SUCCESS'    => "Not vulnerable to Heartbleed\n",
  'HEARTBLEED_VULNERABLE_ERROR'      => "Vulnerable to Heartbleed\n",
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => "<p>The server is vulnerable to a Heartbleed attack. As a result, an attacker could read sensitive data from the server's working memory, such as private keys and customer data.\n</p>",
  'HEARTBLEED_VULNERABLE_TIPS'       => "<p>Update your <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> implementation on your server immediately.\n</p>",
  'HEARTBLEED_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Heartbleed-Vulnerability/EN",
  //
  // INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE'            => "Check for the Ephemeral Invalid Curve vulnerability. <span class=\"promarker\"></span>\n",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => "Not vulnerable to Ephemeral Invalid Curve attacks.\n",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => "Vulnerable by Ephemeral Invalid Curve attacks.\n",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => "<p>The server is vulnerable to an <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.golem.de/news/verschluesselung-punkte-auf-der-falschen-ellipt\">ischen-kurve-1511-117643.html Ephemeral Invalid Curve Angriff</a>. This allows an attacker to attack connections.\n</p>",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_TIPS'       => "<p>Update your <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> implementation on your server immediately.\n</p>",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Vulnerability/EN",
  //
  // INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE'            => "Check for the Invalid Curve vulnerability. <span class=\"promarker\"></span>\n",
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => "Not vulnerable to Invalid Curve attacks.\n",
  'INVALID_CURVE_VULNERABLE_ERROR'      => "Vulnerable to Invalid Curve attacks.\n",
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => "<p>The server is vulnerable to an Invalid Curve attack. This allows an attacker to steal the private key of your <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">certificate</a>.\n</p>",
  'INVALID_CURVE_VULNERABLE_TIPS'       => "<p>Update your <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> implementation on your server immediately.\n</p>",
  'INVALID_CURVE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Invalid-Curve-Vulnerability/EN",
  //
  // PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE'            => "Check for the Padding Oracle vulnerability. <span class=\"promarker\"></span>\n",
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => "Not vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Padding_oracle_attack\">Padding Oracle attacks</a>.\n",
  'PADDING_ORACLE_VULNERABLE_ERROR'      => "Vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Padding_oracle_attack\">Padding Oracle attacks</a>.\n",
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => "<p>The server is vulnerable to a <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Padding_oracle_attack\">Padding Oracle attack</a>, which allows an attacker to decrypt the communication.\n</p>",
  'PADDING_ORACLE_VULNERABLE_TIPS'       => "<p>Update your <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> implementation on your server immediately.\n</p>",
  'PADDING_ORACLE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Padding-Oracle-Vulnerability/EN",
  //
  // POODLE_VULNERABLE
  'POODLE_VULNERABLE'            => "Check for the Poodle vulnerability\n",
  'POODLE_VULNERABLE_SUCCESS'    => "Not vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/POODLE\">POODLE</a>\n",
  'POODLE_VULNERABLE_ERROR'      => "Vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/POODLE\">POODLE</a>\n",
  'POODLE_VULNERABLE_ERROR_DESC' => "<p>The server is vulnerable to a <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/POODLE\">POODLE attack</a>, which allows an attacker to decrypt the communication.\n</p>",
  'POODLE_VULNERABLE_TIPS'       => "<p>Deactivate the outdated encryption protocol SSL3 on your server immediately!\n</p>",
  'POODLE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/POODLE-Vulnerability/EN",
  //
  // SWEET32_VULNERABLE
  'SWEET32_VULNERABLE'            => "Check for the Sweet32 vulnerability\n",
  'SWEET32_VULNERABLE_SUCCESS'    => "Not vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Sweet32\">Sweet32</a>.\n",
  'SWEET32_VULNERABLE_ERROR'      => "Vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Sweet32\">Sweet32</a>.\n",
  'SWEET32_VULNERABLE_ERROR_DESC' => "<p>The server is vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Sweet32\">Sweet32</a>, which allows an attacker to decrypt parts of the communication if large amounts of data is transferred via a connection.\n</p>",
  'SWEET32_VULNERABLE_TIPS'       => "<p>Wherever possible, you should refrain from using Triple-DES and Blowfish. Deactivate <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.itwissen.info/Blockchiffre-block-cipher.html\">Blockchiffren (German only)</a> with a length of 64 bit. Make sure that protocols such as SSLv2 and SSLv3 are disabled.\n</p>",
  'SWEET32_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Sweet32-Vulnerability/EN",
  //
  // TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE'            => "Check for the TLS-POODLE vulnerability\n",
  'TLS_POODLE_VULNERABLE_SUCCESS'    => "Not vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/POODLE\">TLS POODLE</a>.\n",
  'TLS_POODLE_VULNERABLE_ERROR'      => "Vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/POODLE\">TLS POODLE</a>.\n",
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => "<p>The server is vulnerable to a variant of the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/POODLE\">POODLE attack</a> on <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a>, which allows an attacker to decrypt the communication.\n</p>",
  'TLS_POODLE_VULNERABLE_TIPS'       => "<p>Update the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> implementation on your server immediately. In the Apache configuration, you can specify the line \"SSLProtocol All -SSLv2 -SSLv3 \".\n</p>",
  'TLS_POODLE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Tls-Poodle-Vulnerability/EN",
  //
  // Category: Certificates
  //
  // CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED'            => "Check of certificate validity period\n",
  'CERTIFICATE_EXPIRED_SUCCESS'    => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">Certificate</a> not expired\n",
  'CERTIFICATE_EXPIRED_ERROR'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">Certificate</a> expired\n",
  'CERTIFICATE_EXPIRED_ERROR_DESC' => "<p>This message means that your <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">|Server certificate</a> has expired. Visitors will be warned that your website may be insecure or not trustworthy. If a visitor uses HTTPS to open your website, he or she may receive an error message, for example \"Your certificate expired on (date)\". The website will appear insecure or not trustworthy to visitors.\n</p>",
  'CERTIFICATE_EXPIRED_TIPS'       => "<p>This problem can be solved by renewing the [Certificate/EN|certificate]]. For information on how to renew a certificate, please refer to: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE#Was_tun.2C_wenn_ein_SSL-Zertifikat_abgelaufen_ist.3F\" title=\"Zertifikate/DE\">certificate expired (German only)</a>.\n</p>",
  'CERTIFICATE_EXPIRED_LINK'       => "https://siwecos.de/wiki/Certificate-Expired/EN",
  //
  // CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER'            => "Verification of certificate transmission\n",
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => "Server sends a certificate\n",
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => "Server does not send a certificate\n",
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => "<p>The server has not sent a <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">certificate</a>. This is unusual and should not occur. The server should check its <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS configuration</a> and, if necessary, disable anonymous <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cipher_suite\">cipher suites</a>.\n</p>",
  'CERTIFICATE_NOT_SENT_BY_SERVER_TIPS'       => "<p>Urgently update your <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS implementation</a>. Current software no longer allows this type of configuration.\n</p>",
  'CERTIFICATE_NOT_SENT_BY_SERVER_LINK'       => "https://siwecos.de/wiki/Certificate-Not-Sent/EN",
  //
  // CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET'            => "Check of certificate validity\n",
  'CERTIFICATE_NOT_VALID_YET_SUCCESS'    => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">Certificate</a> is already valid\n",
  'CERTIFICATE_NOT_VALID_YET_ERROR'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">Certificate</a> is not yet valid\n",
  'CERTIFICATE_NOT_VALID_YET_ERROR_DESC' => "<p>This message means that your <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">server certificate</a> is not yet valid. Visitors will be warned that your website may be insecure or not trustworthy. If a visitor uses HTTPS to open your website, he or she may receive an error message.\n</p>",
  'CERTIFICATE_NOT_VALID_YET_TIPS'       => "<p>Deactivate the <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">certificate</a> while it is not yet valid. Your website will then not be certified, but at least visitors will not receive a warning message when they open your website. Alternatively, it is possible to use your old certificate while it is still valid. For information on how to renew certificate, please refer to: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikat-Abgelaufen/DE\" title=\"Zertifikat-Abgelaufen/DE\">Zertifikat abgelaufen (German only)</a>.\n</p>",
  'CERTIFICATE_NOT_VALID_YET_LINK'       => "https://siwecos.de/wiki/Certificate-Not-Valid/EN",
  //
  // CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION'            => "Check of the certificate's encryption strength\n",
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => "Strong hash algorithm\n",
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => "Weak hash algorithm\n",
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => "<p>This message means that your <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">server certificate</a> has a weak hash algorithm (encryption). It may be an easy target for hacker attacks.\n</p>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_TIPS'       => "<p>To solve this problem, you should install a new <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">certificate</a> with a secure hash function (strong encryption). For information on how to obtain a secure certificate, please refer to: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE#Wie_wird_ein_SSL-Zertifikat_installiert.3F\" title=\"Zertifikate/DE\">install certificates (German only)</a>.\n</p>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_LINK'       => "https://siwecos.de/wiki/Weak-Encryption/EN",
  //
  // CERTIFICATE_WEAK_SIGN_ALGO
  'CERTIFICATE_WEAK_SIGN_ALGO'            => "Check of certificate encryption\n",
  //
  // CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS
  'CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS'            => "Check of certificate encryption\n",
  //
  // Category: Encryption method
  //
  // CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED'            => "Check of client encryption method\n",
  'CIPHERSUITEORDER_ENFORCED_SUCCESS'    => "Responsible selection of encryption methods\n",
  'CIPHERSUITEORDER_ENFORCED_ERROR'      => "Irresponsible selection of encryption methods\n",
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => "<p>Your web server/website is configured to give priority to the encryption method selected by the website visitor rather than by your web server. Servers should not allow their clients to select the encryption method, but should actively select strong connections.\n</p>",
  'CIPHERSUITEORDER_ENFORCED_TIPS'       => "<p>Configure your web server so that the web server selects the encryption method that is used for communication between your website and the visitor's web browser.\n</p>",
  'CIPHERSUITEORDER_ENFORCED_LINK'       => "https://siwecos.de/wiki/Encryption-Method-Client/EN",
  //
  // CIPHERSUITE_ANON
  'CIPHERSUITE_ANON'            => "Check for anonymous encryption method\n",
  'CIPHERSUITE_ANON_SUCCESS'    => "Anonymous key exchange not supported\n",
  'CIPHERSUITE_ANON_ERROR'      => "Anonymous key exchange supported\n",
  'CIPHERSUITE_ANON_ERROR_DESC' => "<p>Your web server/website is configured to make connections using an insecure encryption method (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cipher_suite\">cipher suite</a>) without access rights control. This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n</p>",
  'CIPHERSUITE_ANON_TIPS'       => "<p>Deactivate support for anonymous key exchange in the encryption method settings. As a consequence of the known <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> vulnerabilities, the most important rule is to use TLS 1.2 whenever possible. SSL 3.0 should be disabled in the Browser.\n</p>",
  'CIPHERSUITE_ANON_LINK'       => "https://siwecos.de/wiki/Key-Exchange-Method/EN",
  //
  // CIPHERSUITE_DES
  'CIPHERSUITE_DES'            => "Check for DES encryption method\n",
  'CIPHERSUITE_DES_SUCCESS'    => "Outdated DES encryption method not supported\n",
  'CIPHERSUITE_DES_ERROR'      => "Outdated DES encryption method supported\n",
  'CIPHERSUITE_DES_ERROR_DESC' => "<p>Your web server/website is configured to support the outdated DES encryption method (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cipher_suite\">cipher suite</a>), which is regarded as insecure. This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n</p>",
  'CIPHERSUITE_DES_TIPS'       => "<p>Deactivate support for the DES encryption method in your web server software.\n</p>",
  'CIPHERSUITE_DES_LINK'       => "https://siwecos.de/wiki/Weak-DES-Encryption-Protocol/EN",
  //
  // CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT'            => "Check for weak encryption functions\n",
  'CIPHERSUITE_EXPORT_SUCCESS'    => "Weak EXPORT encryption not supported\n",
  'CIPHERSUITE_EXPORT_ERROR'      => "Weak EXPORT encryption supported\n",
  'CIPHERSUITE_EXPORT_ERROR_DESC' => "<p>Your web server/website is configured to support intentionally insecure encryption methods (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cipher_suite\">cipher suite</a>). This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n</p>",
  'CIPHERSUITE_EXPORT_TIPS'       => "<p>Deactivate support for EXPORT encryption methods on the web server.\n</p>",
  'CIPHERSUITE_EXPORT_LINK'       => "https://siwecos.de/wiki/Weakened-Encryption-Protocol/EN",
  //
  // CIPHERSUITE_NULL
  'CIPHERSUITE_NULL'            => "Check for NULL ciphers\n",
  'CIPHERSUITE_NULL_SUCCESS'    => "Insecure NULL ciphers not supported\n",
  'CIPHERSUITE_NULL_ERROR'      => "Insecure NULL ciphers supported\n",
  'CIPHERSUITE_NULL_ERROR_DESC' => "<p>Your web server/website is configured to allow unencrypted voice transmission via a secure channel. This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n</p>",
  'CIPHERSUITE_NULL_TIPS'       => "<p>Deactivate support for NULL encryption methods.\n</p>",
  'CIPHERSUITE_NULL_LINK'       => "https://siwecos.de/wiki/Unencrypted-Communication/EN",
  //
  // CIPHERSUITE_RC4
  'CIPHERSUITE_RC4'            => "Check for RC4 encryption method\n",
  'CIPHERSUITE_RC4_SUCCESS'    => "Outdated <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/RC4\">RC4</a> encryption method not supported\n",
  'CIPHERSUITE_RC4_ERROR'      => "Outdated <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/RC4\">RC4</a> encryption method supported\n",
  'CIPHERSUITE_RC4_ERROR_DESC' => "<p>Your web server/website is configured to support the outdated <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/RC4\">RC4</a> encryption method (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cipher_suite\">cipher suite</a>), which is regarded as insecure. This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n</p>",
  'CIPHERSUITE_RC4_TIPS'       => "<p>Deactivate support for the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/RC4\">RC4</a> encryption method.\n</p>",
  'CIPHERSUITE_RC4_LINK'       => "https://siwecos.de/wiki/Insecure-Encryption-Function_RC4/EN",
  //
  // Category: Error
  //
  // SCANNER_TIMEOUT
  'SCANNER_TIMEOUT'            => "The scanner \"%scanner%\" was stopped after %timeoutvalue% seconds because it did not return a result.\n",
  //
  // TIMEOUT
  'TIMEOUT'            => "Time out\n",
  'TIMEOUT_ERROR'      => "The scan did not return a result and was therefore cancelled.\n",
  'TIMEOUT_ERROR_DESC' => "<p>A timeout means that the scan of your domain took longer than usual.\n</p><p>Some possible reasons are:\n</p><p>Your server is currently not available, or it is overloaded.\n</p><p>Our scanner server is currently overloaded.\n</p>",
  //
  // Category: Error message
  //
  // COULDNT_CONNECT
  'COULDNT_CONNECT'            => "%domain% does not reply.\n",
  //
  // DONT_LEAK_USER_CREDS
  'DONT_LEAK_USER_CREDS'            => "You should not transfer your user credentials (name and password).\n",
  //
  // HEADER_NOT_SET
  'HEADER_NOT_SET'            => "The header is not set.\n",
  //
  // HEADER_SET_MULTIPLE_TIMES
  'HEADER_SET_MULTIPLE_TIMES'            => "The header was set several times.\n",
  //
  // JSON_DECODE_ERROR
  'JSON_DECODE_ERROR'            => "There is a Jason translation error.\n",
  //
  // LOCALHOST_SCAN_NOT_ALLOWED
  'LOCALHOST_SCAN_NOT_ALLOWED'            => "The local scan is not allowed\n",
  //
  // MAX_AGE_ERROR
  'MAX_AGE_ERROR'            => "There was an error while checking the 'max-age' directive.\n",
  //
  // NOT_REACHABLE
  'NOT_REACHABLE'            => "Not reachable.\n",
  //
  // NO_HTTP_RESPONSE
  'NO_HTTP_RESPONSE'            => "The specified URL did not respond.\n",
  //
  // NO_RESPONSE
  'NO_RESPONSE'            => "The specified URL did not respond.\n",
  //
  // NO_SOURCE_CODE
  'NO_SOURCE_CODE'            => "No source found.\n",
  //
  // NO_VALID_URL
  'NO_VALID_URL'            => "The Internet address (URL) is not valid.\n",
  //
  // PORT_DISALLOWED
  'PORT_DISALLOWED'            => "This port is not allowed.\n",
  //
  // REDIRECT_ERROR
  'REDIRECT_ERROR'            => "A redirect error has occurred.\n",
  //
  // SCORE_info
  'SCORE_info'            => "Info\n",
  //
  // Category: Errormessage
  //
  // GENERAL_ERROR
  'GENERAL_ERROR'            => "%ERRORTEXT%\n",
  //
  // HEADER_ENCODING_ERROR
  'HEADER_ENCODING_ERROR'            => "The header <b>%HEADER_NAME%</b> contains characters which cannot be processed.\n",
  //
  // Category: General
  //
  // HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED'            => "Check response time of the HTTPS header\n",
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => "Server speaks <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a>.\n",
  'HTTPS_NOT_SUPPORTED_ERROR'      => "Server does not seem to speak <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a>.\n",
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => "<p>The server does not seem to support <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> (Transport Layer Security). This means that you are not using encryption to protect your own and your customers' data.\n</p>",
  'HTTPS_NOT_SUPPORTED_TIPS'       => "<p>Activate <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> (Transport Layer Security)\n</p>",
  'HTTPS_NOT_SUPPORTED_LINK'       => "https://siwecos.de/wiki/No-TLS-Support/EN",
  //
  // HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE'            => "Check response time of the <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Headers</a>\n",
  'HTTPS_NO_RESPONSE_SUCCESS'    => "Server responds.\n",
  'HTTPS_NO_RESPONSE_ERROR'      => "Server does not respond.\n",
  'HTTPS_NO_RESPONSE_ERROR_DESC' => "<p>The server does not seem to respond. Have you entered the <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> correctly?\n</p>",
  'HTTPS_NO_RESPONSE_TIPS'       => "<p>Please check your input for typing errors.\n</p>",
  'HTTPS_NO_RESPONSE_LINK'       => "https://siwecos.de/wiki/Response-Time-Exceeded/EN",
  //
  // SCORE_bonus
  'SCORE_bonus'            => "Bonus\n",
  //
  // SCORE_critical
  'SCORE_critical'            => "Critical\n",
  //
  // SCORE_hidden
  'SCORE_hidden'            => "Hidden\n",
  //
  // SCORE_success
  'SCORE_success'            => "Successful\n",
  //
  // SCORE_warning
  'SCORE_warning'            => "Warning\n",
  //
  // Category: HSHS_DOMXSS
  //
  // CSP_CORRECT
  'CSP_CORRECT'            => "The header is set correctly and corresponds to the recommendations.\n",
  //
  // CSP_LEGACY_HEADER_SET
  'CSP_LEGACY_HEADER_SET'            => "The outdated header 'X-Content-Security-Policy' is used. The new standardized header is 'Content-Security-Policy'.\n",
  //
  // CSP_NO_UNSAFE_INCLUDED
  'CSP_NO_UNSAFE_INCLUDED'            => "The <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_Security_Policy\">Content Security Policy (CSP)</a> does not contain any unsafe directives, but it may not be configured securely.\n",
  //
  // CSP_UNSAFE_INCLUDED
  'CSP_UNSAFE_INCLUDED'            => "The header is set insecurely because it contains 'unsafe-inline' or 'unsafe-eval' directives.\n",
  //
  // CT_CORRECT
  'CT_CORRECT'            => "The header \"%HEADER%\" is set correctly and corresponds to the recommendations.\n",
  //
  // CT_HEADER_WITHOUT_CHARSET
  'CT_HEADER_WITHOUT_CHARSET'            => "The header is used without a character set and thus not safe.\n",
  //
  // CT_HEADER_WITH_CHARSET
  'CT_HEADER_WITH_CHARSET'            => "The header is set correctly and contains a character set specification.\n",
  //
  // CT_META_TAG_SET
  'CT_META_TAG_SET'            => "The header is set correctly, but it does not contain a character set specification or does not correspond to the recommendations. \"%META%\" was found.\n",
  //
  // CT_META_TAG_SET_CORRECT
  'CT_META_TAG_SET_CORRECT'            => "The \"%META%\" specification in the HTML header is set correctly.\n",
  //
  // CT_WRONG_CHARSET
  'CT_WRONG_CHARSET'            => "A false or invalid character set was used. The configuration is not safe.\n",
  //
  // HPKP_LESS_15
  'HPKP_LESS_15'            => "The public keys are pinned for less than 15 days.\n",
  //
  // HPKP_MORE_15
  'HPKP_MORE_15'            => "The public keys are pinned for more than 15 days.\n",
  //
  // HPKP_REPORT_URI
  'HPKP_REPORT_URI'            => "A 'report-uri' is set.\n",
  //
  // HSTS_LESS_6
  'HSTS_LESS_6'            => "The value of 'max-age' is less than 6 months.\n",
  //
  // HSTS_MORE_6
  'HSTS_MORE_6'            => "The value of 'max-age' is greater than 6 months.\n",
  //
  // HSTS_PRELOAD
  'HSTS_PRELOAD'            => "The 'preload' directive is set.\n",
  //
  // HTTPONLY_FLAG_SET
  'HTTPONLY_FLAG_SET'            => "The HttpOnly flag is set.\n",
  //
  // INCLUDE_SUBDOMAINS
  'INCLUDE_SUBDOMAINS'            => "'includeSubDomains' is set.\n",
  //
  // NO_HTTPONLY_FLAG_SET
  'NO_HTTPONLY_FLAG_SET'            => "The HttpOnly flag is not set.\n",
  //
  // NO_SECURE_FLAG_SET
  'NO_SECURE_FLAG_SET'            => "The secure flag is not set.\n",
  //
  // NO_SINKS_FOUND
  'NO_SINKS_FOUND'            => "No \"sinks\" were found.\n",
  //
  // NO_SOURCES_FOUND
  'NO_SOURCES_FOUND'            => "No \"sources\" were found.\n",
  //
  // SECURE_FLAG_SET
  'SECURE_FLAG_SET'            => "The secure flag is set.\n",
  //
  // SET_COOKIE
  'SET_COOKIE'            => "Check of Set-Cookie\n",
  'SET_COOKIE_SUCCESS'    => "Cookies are secured.\n",
  'SET_COOKIE_ERROR'      => "Cookies are not secured.\n",
  'SET_COOKIE_ERROR_DESC' => "<p>Cookies should be secured by setting the HttpOnly and Secure flags to ensure they cannot be read or altered by others.\n</p>",
  'SET_COOKIE_TIPS'       => "",
  'SET_COOKIE_LINK'       => "https://siwecos.de/wiki/Set-Cookie/EN",
  //
  // SINKS_FOUND
  'SINKS_FOUND'            => "\"Sinks\" were found.\n",
  //
  // SOURCES_FOUND
  'SOURCES_FOUND'            => "\"Sources\" were found.\n",
  //
  // XCTO_CORRECT
  'XCTO_CORRECT'            => "The header is set correctly and corresponds to the recommendations.\n",
  //
  // XCTO_NOT_CORRECT
  'XCTO_NOT_CORRECT'            => "The header is not set correctly.\n",
  //
  // XFO_CORRECT
  'XFO_CORRECT'            => "The header is set correctly and corresponds to the recommendations.\n",
  //
  // XFO_WILDCARDS
  'XFO_WILDCARDS'            => "The header contains wildcard information (*) and is therefore not configured securely.\n",
  //
  // XXSS_BLOCK
  'XXSS_BLOCK'            => "The 'mode=block' directive is active.\n",
  //
  // XXSS_CORRECT
  'XXSS_CORRECT'            => "The header is set correctly and corresponds to the recommendations.\n",
  //
  // Category: HTTP-Security-Header-Scanner
  //
  // CONTENT_SECURITY_POLICY
  'CONTENT_SECURITY_POLICY'            => "Check of the Content Security Policy (CSP)\n",
  'CONTENT_SECURITY_POLICY_SUCCESS'    => "A secure configuration of the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_Security_Policy\">Content Security Policy (CSP)</a> was found.\n",
  'CONTENT_SECURITY_POLICY_ERROR'      => "Content Security Policy insecure\n",
  'CONTENT_SECURITY_POLICY_ERROR_DESC' => "<p>The <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_Security_Policy\">Content Security Policy (CSP)</a> is a security concept that is designed to reduce the risk of injection and execution of malicious commands in a web application (content injection attacks). By means of a whitelist (list of allowed sources), it determines from which sources Javascript code, images, fonts, and other content may be integrated into your site.\n</p>",
  'CONTENT_SECURITY_POLICY_TIPS'       => "<p>Use the CSP with default-src 'none' or 'self' and without unsafe-eval or unsafe-inline directives. For more information about <b>Content Security Policy</b>, please refer to <b><a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://wiki.selfhtml.org/wiki/Sicherheit/Content_Security_Policy\">SELFHTML&gt;&gt;</a></b>\n</p><p><br />\n--snip<br />\n</p><p><b>Example for the header on the start page:</b>\n</p>\n<pre>\n&lt;meta http-equiv=\"Content-Security-Policy\" content=\"default-src 'self'; script-src 'self'\"&gt;\n&lt;meta http-equiv=\"X-Content-Security-Policy\" content=\"default-src 'self'; script-src 'self'\"&gt;\n&lt;meta http-equiv=\"X-WebKit-CSP\" content=\"default-src 'self'; script-src 'self'\"&gt;</pre>\n<p><b>Configuration of the web server</b>\n</p><p>If you can configure your own web server, which is usually not possible in low-budget hosting packages, there is this option via <b>changes to .htaccess</b>:\n</p>\n<pre># Download / Load content only from explicitly allowed sites\n# Example: Allow everything from own domain, nothing from external sources:\n\nHeader set Content-Security-Policy \"default-src 'none'; frame-src 'self'; font-src 'self';img-src 'self' siwecos.de; object-src 'self'; script-src 'self'; style-src 'self';\"\n\n</pre>\n<p>--snap\n</p><p>Here is an example of an .htaccess file which will set the <b>HTTP-Security-Header-Scanner</b> to green.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess\" title=\"Htaccess\">.htaccess example (German only)</a>)\n</p>",
  'CONTENT_SECURITY_POLICY_LINK'       => "https://siwecos.de/wiki/Content-Security-Policy-Vulnerability/EN",
  //
  // CONTENT_TYPE
  'CONTENT_TYPE'            => "Check of the HTTP content type\n",
  'CONTENT_TYPE_SUCCESS'    => "The content type is configured correctly.\n",
  'CONTENT_TYPE_ERROR'      => "The HTTP content type is configured incorrectly\n",
  'CONTENT_TYPE_ERROR_DESC' => "<p>The content type is a declaration that is usually placed in the header of a web page, the so-called HTTP header. This declaration defines the character set and the type of data that the page contains. If the definition is missing, the web browser will try to guess the content type; this can lead to security flaws such as Code-Page-Sniffing. This information is also important for rendering the web page correctly in every browser and on every computer. If a server sends a document to a <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/User_agent\">User Agent</a> (for example to the browser), it is helpful to supply some information about the file format in the content type field of the HTTP header. This information declares the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Media_type\">MIME type</a> and sends the character encoding of the document, such as text/html, text/plain, etc. to the browser.\n</p>",
  'CONTENT_TYPE_TIPS'       => "<p>Add the appropriate HTTP header or, alternatively, add a &lt;meta&gt; tag. Please note that, unlike a HTTP header, the &lt;meta&gt; tag can be attacked more easily.\n</p><p><b>text/html; charset=utf-8</b>;\n</p><p><b>--snip</b>\n</p>\n<pre>&lt;meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"&gt;</pre>\n<p><b>—snap</b>\n</p><p><br />\nFurthermore, the server must be configured to send the correct charset information. In order to make these changes on the server, particular access rights are required. For further information about the different server configuration options, please refer to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.w3.org/International/articles/http-charset/index.de\">W3.org</a>.\n</p><p>Moreover, it is also possible to pass the correct charset information to the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"http://httpd.apache.org/docs/2.0/howto/htaccess.html\"><b>.htaccess</b></a> file, which will overwrite the declaration in the HTTP header. <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.w3.org/International/questions/qa-htaccess-charset\">charset in .htaccess</a>\n</p><p><b>Enter in the .htaccess file:</b>\n</p>\n<pre>AddType 'text/html; charset=UTF-8' html</pre>\n<p>Here is an example of an .htaccess file which will set the <b>HTTP-Security-Header-Scanner</b> to green.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess\" title=\"Htaccess\">.htaccess example (German only)</a>)\n</p>",
  'CONTENT_TYPE_LINK'       => "https://siwecos.de/wiki/Content-Type-Not-Correct/EN",
  //
  // PUBLIC_KEY_PINS
  'PUBLIC_KEY_PINS'            => "Check of Public Key Pinning (HPKP) - currently disabled\n",
  'PUBLIC_KEY_PINS_SUCCESS'    => "<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/HTTP_Public_Key_Pinning\">Public Key Pinning</a> is active (HPKP is currently not under review).\n",
  'PUBLIC_KEY_PINS_ERROR'      => "<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/HTTP_Public_Key_Pinning\">Public Key Pinning</a> is not available (HPKP is currently not under review).\n",
  'PUBLIC_KEY_PINS_ERROR_DESC' => "<p>Powerful attackers, such as intelligence agencies, can create a signature with the help of a certification agency that is accepted by users. To prevent this, a website can be configured so that the <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">certificate</a> must be saved permanently (pinning) when it is called up for the first time. If <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/HTTP_Public_Key_Pinning\">Key Pinning</a> is used, only the saved certificate will be accepted for the period of time specified by the website.\n</p>",
  'PUBLIC_KEY_PINS_TIPS'       => "<p>The setting of <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/HTTP_Public_Key_Pinning\">Public Key Pinning</a> (HPKP) is not an absolute must, and is currently not taken into account by the SIWECOS Scanner.\n</p><p>The browsers Mozilla Firefox and Google Chrome comply with <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/HTTP_Public_Key_Pinning\">Public Key Pinning</a> and therefore ignore HPKP-headers. If only a single pin is set, an error message will appear. In order for pin validation to be successful, it is therefore always necessary to provide at least two public keys or a back-up pin. Interested parties should get in touch with an IT security expert or web developer.\n</p><p>Further information can be found at <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.zdnet.com/article/google-chrome-is-backing-away-from-public-key-pinning-and-heres-why/\">Article from ZDNET</a>\n</p><p><br />\n</p><p><br />\n</p>",
  'PUBLIC_KEY_PINS_LINK'       => "https://siwecos.de/wiki/Public-Key-Pins-Disabled/EN",
  //
  // STRICT_TRANSPORT_SECURITY
  'STRICT_TRANSPORT_SECURITY'            => "Check of HSTS protection\n",
  'STRICT_TRANSPORT_SECURITY_SUCCESS'    => "Your website can only be reached via the secure HTTPS protocol. Communication between your website and its visitors can not be intercepted or manipulated.\n",
  'STRICT_TRANSPORT_SECURITY_ERROR'      => "HSTS protection error\n",
  'STRICT_TRANSPORT_SECURITY_ERROR_DESC' => "<p><a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/HTTP_Strict_Transport_Security\">HTTP Strict Transport Security (HSTS)</a> ensures that the website can only be accessed via a secure HTTPS connection for a specified time period. The website operator can define the length of the time period, and whether this rule should also apply to subdomains.\n</p>",
  'STRICT_TRANSPORT_SECURITY_TIPS'       => "<p>max-age=63072000; includeSubdomains;\nHTTP Strict Transport Security (HSTS) is a web security policy mechanism that is easy to integrate.\n</p>\n<b>--snip</b><pre>\n# Activate HTTP Strict Transport Security (HSTS)\n# Required: \"max-age\"\n# Optional: \"includeSubDomains\"</pre>\n<pre>  <b>Header set Strict-Transport-Security \"max-age=31556926; includeSubDomains\"</b>\n</pre>\n<p><b>--snap</b>\n</p><p>Here is an example of an .htaccess file which will set the <b>HTTP-Security-Header-Scanner</b> to green.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess\" title=\"Htaccess\">.htaccess example (German only</a>)\n</p>",
  'STRICT_TRANSPORT_SECURITY_LINK'       => "https://siwecos.de/wiki/No-Encryption-Found/EN",
  //
  // X_CONTENT_TYPE_OPTIONS
  'X_CONTENT_TYPE_OPTIONS'            => "Check of the X-Content-Type header\n",
  'X_CONTENT_TYPE_OPTIONS_SUCCESS'    => "The HTTP header is set correctly.\n",
  'X_CONTENT_TYPE_OPTIONS_ERROR'      => "X-Content-Type header is missing.\n",
  'X_CONTENT_TYPE_OPTIONS_ERROR_DESC' => "<p>The X-Content-Type-Options settings in the header prevent that the browser interprets data as anything other than declared by the content type in the HTTP header. The header settings are not set here.\n</p>",
  'X_CONTENT_TYPE_OPTIONS_TIPS'       => "<p>nosniff; <br /><br />\n<b>Code example of an .htaccess file on an Apache webserver.</b><br />\n</p>\n<b>--snip</b><pre>\n&lt;IfModule mod_headers.c&gt;\n   # prevent mime based attacks like drive-by download attacks, IE and Chrome\n   '''Header set X-Content-Type-Options \"nosniff\"'''\n&lt;pre&gt;&lt;/IfModule&gt;</pre>\n<p><b>—snap</b>\n</p><p>Here is an example of an .htaccess file which will set the <b>HTTP-Security-Header-Scanner</b> to green.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess\" title=\"Htaccess\">.htaccess example (German only</a>)\n</p>",
  'X_CONTENT_TYPE_OPTIONS_LINK'       => "https://siwecos.de/wiki/X-Content-Type-Options-Vulnerability/EN",
  //
  // X_FRAME_OPTIONS
  'X_FRAME_OPTIONS'            => "Checking the HTTP header X-frame options\n",
  'X_FRAME_OPTIONS_SUCCESS'    => "The header is set correctly and improves the protection of your website against clickjacking attacks.\n",
  'X_FRAME_OPTIONS_ERROR'      => "HTTP header X-Frame-Options not set.\n",
  'X_FRAME_OPTIONS_ERROR_DESC' => "<p>X-Frame-Options helps to prevent attacks carried out by rendering content within a frame. This largely mitigates the risk of <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Clickjacking\">clickjacking attacks</a>. Downgrading attacks, as known in the Internet Explorer, are also minimized.\n</p>",
  'X_FRAME_OPTIONS_TIPS'       => "<p>Set in the HTTP header according to your requirements. The <b>X-Frame-Options</b> field in the HTTP header can be used to determine whether a browser is allowed to render or embed the target page in a &lt;frame&gt;, &lt;iframe&gt; or &lt;object&gt;. Websites can use this header to deflect clickjacking attacks by preventing their content from being embedded in third party pages.\n</p><p>With the HTTP-Header command X-Frame-Options, modern web browsers can be instructed to prevent loading a page in a frame on another website. To do this, the following setting must be entered in the .htaccess file:\n</p><p>Header always append X-Frame-Options DENY\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options DENY\n</pre>\n<p><b>—snap</b>\n</p><p>Alternatively, you can permit the page to be embedded only in other pages within the same domain:\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options SAMEORIGIN\n</pre>\n<p><b>—snap</b>\n</p><p>If a website must be embedded in an external page, a domain can be specified:\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options ALLOW-FROM botfrei.de\n</pre>\n<p><b>—snap</b>\n</p><p><br />\nHere is an example of an .htaccess file which will set the <b>HTTP-Security-Header-Scanner</b> to green.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess\" title=\"Htaccess\">.htaccess example (German only</a>)\n</p>",
  'X_FRAME_OPTIONS_LINK'       => "https://siwecos.de/wiki/X-Frame-Options-Vulnerability/EN",
  //
  // X_XSS_PROTECTION
  'X_XSS_PROTECTION'            => "Check of the X-Content-Type header\n",
  'X_XSS_PROTECTION_SUCCESS'    => "<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cross-site_scripting\">Cross-site scripting</a> (XSS) protection of the web browser is active on your website.\n",
  'X_XSS_PROTECTION_ERROR'      => "<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cross-site_scripting\">Cross-site scripting</a> protection is not active or configured incorrectly.\n",
  'X_XSS_PROTECTION_ERROR_DESC' => "<p>The HTTP header X-XSS-Protection defines how built-in XSS filters in the browser are configured. A default installation can indicate an incorrect configuration.\n</p>",
  'X_XSS_PROTECTION_TIPS'       => "<p>1; mode=block\n</p><p><b>Code example of an .htaccess file on an Apache webserver.</b>\n</p>\n<b>--snip</b><br /><pre>\n   # Turn on XSS prevention tools, activated by default in IE and Chrome\n   '''Header set X-XSS-Protection \"1; mode=block\"'''\n</pre>\n<p><b>—snap</b>\n</p><p>Here is an example of an .htaccess file which will set the <b>HTTP-Security-Header-Scanner</b> to green.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess\" title=\"Htaccess\">.htaccess example (German only)</a>\n</p>",
  'X_XSS_PROTECTION_LINK'       => "https://siwecos.de/wiki/XSS-Vulnerability/EN",
  //
  // Category: INI_S
  //
  // MALWARE_FOUND
  'MALWARE_FOUND'            => "Your domain '%site%' was found in the following malware lists: %where%\n",
  //
  // PHISHING_FOUND
  'PHISHING_FOUND'            => "Your domain '%site%' was found in the following phishing lists: %where%\n",
  //
  // SPAM_FOUND
  'SPAM_FOUND'            => "Your domain '%site%' was found in the following spam lists: %where%\n",
  //
  // Category: Infoleak
  //
  // CMS_ONLY
  'CMS_ONLY'            => "The content management system (%cms%) you are using can be identified.\n",
  //
  // CMS_VERSION
  'CMS_VERSION'            => "The used CMS %cms% in version %version% was detected. Revealing the version information makes it easier for an attacker to prepare an attack. However, this is not a vulnerability in itself and requires further inspection.\n",
  //
  // CMS_VERSION_VULN
  'CMS_VERSION_VULN'            => "The used CMS %cms% in version %version% was detected. There is a known security flaw for this version.\n",
  //
  // EMAIL_FOUND
  'EMAIL_FOUND'            => "The email address %email_adress% was found. Do you really want to publish this email address? An attacker could use it, for example for phishing attacks.\n",
  //
  // JS_LIB_ONLY
  'JS_LIB_ONLY'            => "The JavaScript library %js_lib_name% in DOM node %node% with content %node_content% was detected. However, this is not a vulnerability in itself and requires further inspection.\n",
  //
  // JS_LIB_VERSION
  'JS_LIB_VERSION'            => "The JavaScript library %js_lib_name% in version %js_lib_version% in DOM node %node% with content %node_content% was detected. Revealing the version information makes it easier for an attacker to prepare an attack. However, this is not a vulnerability in itself and requires further inspection.\n",
  //
  // JS_LIB_VULN_VERSION
  'JS_LIB_VULN_VERSION'            => "The JavaScript library %js_lib_name% in version %js_lib_version% in DOM node %node% with content %node_content% was detected. There is a known security flaw for this version.\n",
  //
  // NUMBER_FOUND
  'NUMBER_FOUND'            => "The phone number %number% was found. Do you really want to publish this phone number? An attacker could use it, for example for social engineering attacks (interpersonal manipulation).\n",
  //
  // PLUGIN_ONLY
  'PLUGIN_ONLY'            => "The <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">CMS plug-in</a> %plugin% in DOM node %node% with content %node_content% was detected. However, this is not a vulnerability in itself and requires further inspection.\n",
  //
  // PLUGIN_VERSION
  'PLUGIN_VERSION'            => "The <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">CMS plug-in</a> %plugin% in version %plugin_version% in DOM node %node% with content %node_content% was detected. Revealing the version information makes it easier for an attacker to prepare an attack. However, this is not a vulnerability in itself and requires further inspection.\n",
  //
  // PLUGIN_VERSION_VULN
  'PLUGIN_VERSION_VULN'            => "The <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">CMS plug-in</a> %plugin% in version %plugin_version% in DOM node %node% with content %node_content% was detected. There is a known security flaw for this version.\n",
  //
  // Category: Information-Leakage-Scanner
  //
  // CMS
  'CMS'            => "Check of the CMS version\n",
  'CMS_SUCCESS'    => "Your current CMS version cannot be identified. Thus it cannot be determined whether you are using a vulnerable version.\n",
  'CMS_ERROR'      => "﻿Content Management System (CMS) identifiable\n",
  'CMS_ERROR_DESC' => "<p>The current <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">content management system (CMS)</a> can be identified. This information could be used by an attacker to search specifically for security flaws for this particular CMS.\n</p>",
  'CMS_TIPS'       => "<p>Always make sure that installed web servers and the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">content management system (CMS)</a> are up to date. Some CMS allow you to hide the version information. Use this feature if it is available. The WordPress Plug-in \"<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"http://wp-premiumthemes.de/hide-my-wp-tutorial-deutsch/\">Hide My WP (German only)</a>\" may be interesting for you.\n</p><p><b>Further example for WordPress:</b>\nIn order to prevent attackers or hackers from reading the WordPress version directly, you can add the following line of code at the very end of the file <b>functions.php</b>:\n</p><p><b>--snip</b>\n</p><p>remove_action('wp_head','wp_generator');\n</p><p><b>--snap</b>\n</p>",
  'CMS_LINK'       => "https://siwecos.de/wiki/Content-Management-System-Found/EN",
  //
  // CMS_PLUGINS
  'CMS_PLUGINS'            => "Check for CMS plug-ins\n",
  'CMS_PLUGINS_SUCCESS'    => "No <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">CMS plug-ins</a> could be detected. Attacks using security flaws in plug-ins are thus less likely.\n",
  'CMS_PLUGINS_ERROR'      => "<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">CMS plug-in</a> detected\n",
  'CMS_PLUGINS_ERROR_DESC' => "<p>A plug-in that is used by your <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">content management system (CMS)</a> was detected. An attacker could use this information to search for specific security flaws for your website.\n</p>",
  'CMS_PLUGINS_TIPS'       => "<p>The use of plug-ins should be limited to those plug-ins that are absolutely necessary. This can reduce the attack surface significantly. In addition, installed plugins should always be kept up to date.\n</p>",
  'CMS_PLUGINS_LINK'       => "https://siwecos.de/wiki/Plugin-Found/EN",
  //
  // EMAIL_ADDRESS
  'EMAIL_ADDRESS'            => "Check for existing email addresses\n",
  'EMAIL_ADDRESS_SUCCESS'    => "No email addresses could be found. Spam and phishing attacks on your email addresses are therefore less likely.\n",
  'EMAIL_ADDRESS_ERROR'      => "Readable email address\n",
  'EMAIL_ADDRESS_ERROR_DESC' => "<p>Your website contains at least one machine-readable email address. This allows third parties to collect the stored email addresses automatically by the use of web crawlers (also called spiders, searchbots or robots). The collected email addresses can then be stored in an internal database together with other information about your website.\n</p>",
  'EMAIL_ADDRESS_TIPS'       => "<p>Enter your contact addresses, for example in the imprint, as follows: mail at siwecos.de / mail @ siwecos.de, or display the information in a graphic file.\n</p>",
  'EMAIL_ADDRESS_LINK'       => "https://siwecos.de/wiki/Email-Address-Found/EN",
  //
  // JS_LIB
  'JS_LIB'            => "Check for JavaScript libraries\n",
  'JS_LIB_SUCCESS'    => "By the current state of knowledge, the JavaScript libraries are not vulnerable to known security flaws.\n",
  'JS_LIB_ERROR'      => "Unsafe JavaScript library found.\n",
  'JS_LIB_ERROR_DESC' => "<p>A JavaScript library you are using was detected. An attacker could use this information to search for vulnerabilites on your website.\n</p>",
  'JS_LIB_TIPS'       => "<p>Update your JavaScript libraries or framework.\n</p>",
  'JS_LIB_LINK'       => "https://siwecos.de/wiki/JavaScript-Vulnerability/EN",
  //
  // PHONE_NUMBER
  'PHONE_NUMBER'            => "Check for readable phone numbers\n",
  'PHONE_NUMBER_SUCCESS'    => "No phone numbers were found.\n",
  'PHONE_NUMBER_ERROR'      => "Phone number found.\n",
  'PHONE_NUMBER_ERROR_DESC' => "<p>A phone number was found. An attacker could use this information to manipulate employees and to gain information that should remain secret.\n</p>",
  'PHONE_NUMBER_TIPS'       => "<p>The published phone numbers should be limited to those which are actually intended for communication with customers. Also, an employee who uses the phone should be aware of the dangers of social engineering attacks and should know the methods of social engineers.\n</p>",
  'PHONE_NUMBER_LINK'       => "https://siwecos.de/wiki/Phone-Number-Found/EN",
  //
  // Category: Initiative-S Scanner
  //
  // MALWARE
  'MALWARE'            => "Check for potential malware\n",
  'MALWARE_SUCCESS'    => "Your domain was not found in any of the known malware lists.\n",
  'MALWARE_ERROR'      => "Your domain was found in malware lists.\n",
  'MALWARE_ERROR_DESC' => "<p>Malware is software that causes damage to the user and to the computer. The term malware is used for all types of malicious programs, such as viruses, trojans, spyware, dialer, dropper, rootkits and keylogger.\n</p>",
  'MALWARE_TIPS'       => "<p><b><span style=\"color:#c31622\"> Take down the website!<span></b>\n</p><p>If your website is accessed by a user, there is a risk that the user's computer will be infected with malicious software. Taking down the website will also prevent Google from removing your website from its index, which would delete a positive ranking. You also avoid being blocked by your hosting provider.\n</p><p><b>- Find out how and when it was possible for third parties to access your domain. </b><br />\n</p><p>Check your logfiles for unauthorized access from unknown <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/IP-Adresse\" title=\"IP-Adresse\">Quell-IP-Adressen</a>. As a starting point for your investigation, the time stamp of the manipulated or uploaded file can give you a hint when the attack happened and by which gateway the attackers gained access.\n</p><p><b>- Change your login data!</b><br />\n<b>- Web frontend (hosting contract, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">Content-Management-System</a>)</b><br />\n<b>- <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/FTP\" title=\"FTP\">FTP</a> or <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSH\" title=\"SSH\">SSH</a> access</b><br />\n<b>- <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Datenbank\" title=\"Datenbank\">Datenbank</a> <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Starke_Passw%C3%B6rter\" title=\"Starke Passwörter\">Passwörter</a></b><br />\n</p><p>Restore a malware-free backup!\nTo do this, delete all the files on your webspace. In this way, you will make sure that you do not overlook malicious files from the compromised system which were used as a backdoor by the attackers.\nBefore restoring from the backup, make sure that the intended backup is not yet infected by the malicious code that we detected, and if necessary, use an even older backup.\nIf the backup is malware-free, restore it and then install any updates for your system. Only after this is done, put the website back online.\n</p><p><b> - If you do not have a backup of your website, consider a completely new installation. Manual cleanups usually take up a lot of time and should only be carried out by qualified experts.</b><br />\n</p><p>Check your local computer for malicious software! The website <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.botfrei.de\">botfrei.de</a> offers helpful information and software.\nWith the EU-Cleaner, you can remove various malicious programs from your computer. (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external free\" href=\"https://www.botfrei.de/de/eucleaner/index.html\">https://www.botfrei.de/de/eucleaner/index.html</a>)</span>\n</span>\n</p>",
  'MALWARE_LINK'       => "https://siwecos.de/wiki/Malware-Content/EN",
  //
  // PHISHING
  'PHISHING'            => "Check for potential phishing content\n",
  'PHISHING_SUCCESS'    => "Your domain was not found in any of the known phishing lists.\n",
  'PHISHING_ERROR'      => "Your domain was found in phishing lists.\n",
  'PHISHING_ERROR_DESC' => "<p><a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external autonumber\" href=\"https://en.wikipedia.org/wiki/Social_engineering_(security)#Phishing\">[1]</a> is a method by which the visitor of a website is tricked into revealing sensitive personal data, such as passwords, credit card numbers, and personal information, to an attacker. Criminals usually start by sending <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Email_spam\">email spam</a>. These emails contain links to a phishing site that is designed to look like a legitimate website.\n</p>",
  'PHISHING_TIPS'       => "<p><b><span style=\"color:#c31622\"> Take down the website!<span></b>\n</p><p>There is a risk that your website contains phishing content and that criminals are using it to collect personal data. Taking down the website will also prevent Google from removing your website from its index, which would delete a positive ranking. You also avoid being blocked by your hosting provider.\n</p><p><b>- Find out how and when it was possible for third parties to access your domain. </b><br />\n</p><p>Check your logfiles for unauthorized access from unknown IP addresses. As a starting point for your investigation, the time stamp of the manipulated or uploaded file can give you a hint when the attack happened and by which gateway the attackers gained access.\n</p><p><b>- Change your login data!</b><br />\n<b>- Web frontend (hosting contract, <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">content management system (CMS)</a>)</b><br />\n<b>- FTP or SSH access</b><br />\n<b>- Database - use strong passwords</b><br />\n</p><p>Restore a malware-free backup!\nTo do this, delete all the files on your webspace. In this way, you will make sure that you do not overlook malicious files from the compromised system which were used as a backdoor by the attackers.\nBefore restoring from the backup, make sure that the intended backup is not yet infected by the malicious code that we detected, and if necessary, use an even older backup.\nIf the backup is malware-free, restore it and then install any updates for your system. Only after this is done, put the website back online.\n</p><p><b> - If you do not have a backup of your website, consider a completely new installation. Manual cleanups usually take up a lot of time and should only be carried out by qualified experts.</b><br />\n</p><p>Check your local computer for malicious software! The website <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.botfrei.de\">botfrei.de</a> offers helpful information and software.\nWith the EU-Cleaner, you can remove various malicious programs from your computer. (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external free\" href=\"https://www.botfrei.de/de/eucleaner/index.html\">https://www.botfrei.de/de/eucleaner/index.html</a>)</span>\n</span>\n</p>",
  'PHISHING_LINK'       => "https://siwecos.de/wiki/Phishing-Content/EN",
  //
  // SPAM
  'SPAM'            => "Check for potential spam content\n",
  'SPAM_SUCCESS'    => "Your domain was not found in any of the known spam lists.\n",
  'SPAM_ERROR'      => "Your domain was found in spam lists.\n",
  'SPAM_ERROR_DESC' => "<p>Spam is unwanted email advertising in your inbox with sometimes dubious content (for example advertisements for viagra, medications, insurance, or credit offers). These advertisements are sent in large quantities, but they can also be targeted specifically. Attackers usually conceal their true identity and try to trick you.\n</p>",
  'SPAM_TIPS'       => "<p><b><span style=\"color:#c31622\"> Take down the website!<span></b>\n</p><p>Take down your website to prevent users from accessing it, and to prevent Google from removing the website from its index, which would delete a positive ranking. You also avoid being blocked by your hosting provider.\n</p><p>To check if the website shows any of the typical spam characteristics, call up the website in the browser, then right-click to \"view page source\". In this view, you can use <b>Ctrl+f</b> (search) to check your source code for typical signs of online fraud through advertisements for medications or dubious credit offers.\n</p><p><b>Some terms to search for</b>:<br />\n- „payday“<br />\n- „Pharma“<br />\n- „Viagra“<br />\n- „Cialis“<br /><br />\n<b>- Find out how and when it was possible for third parties to access your domain. </b><br />\n</p><p>Check your logfiles for unauthorized access from unknown IP addresses. As a starting point for your investigation, the time stamp of the manipulated or uploaded file can give you a hint when the attack happened and by which gateway the attackers gained access.\n</p><p><b>- Change your login data!</b><br />\n<b>- Web frontend (hosting contract, <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Content_management_system\">content management system (CMS)</a>)</b><br />\n<b>- FTP or SSH access</b><br />\n<b>- Database - use strong passwords</b><br />\n</p><p>Restore a malware-free backup!\nTo do this, delete all the files on your webspace. In this way, you will make sure that you do not overlook malicious files from the compromised system which were used as a backdoor by the attackers.\nBefore restoring from the backup, make sure that the intended backup is not yet infected by the malicious code that we detected, and if necessary, use an even older backup.\nIf the backup is malware-free, restore it and then install any updates for your system. Only after this is done, put the website back online.\n</p><p><b> - If you do not have a backup of your website, consider a completely new installation. Manual cleanups usually take up a lot of time and should only be carried out by qualified experts.</b><br />\n</p><p>Check your local computer for malicious software! The website <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.botfrei.de\">botfrei.de</a> offers helpful information and software.\nWith the EU-Cleaner, you can remove various malicious programs from your computer. (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external free\" href=\"https://www.botfrei.de/de/eucleaner/index.html\">https://www.botfrei.de/de/eucleaner/index.html</a>)</span>\n</span>\n</p>",
  'SPAM_LINK'       => "https://siwecos.de/wiki/Spam-Content/EN",
  //
  // Category: NO_CONTENT
  //
  // NO_CONTENT
  'NO_CONTENT'            => "The site was empty and there was nothing to scan for.\n",
  //
  // Category: NO_SCRIPT_TAGS
  //
  // NO_SCRIPT_TAGS
  'NO_SCRIPT_TAGS'            => "The scanner found no script tags to rate.\n",
  //
  // Category: Protocol Versions
  //
  // PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2'            => "Check for outdated SSL2 protocol\n",
  'PROTOCOLVERSION_SSL2_SUCCESS'    => "Outdated protocol version SSL2 not supported.\n",
  'PROTOCOLVERSION_SSL2_ERROR'      => "Outdated protocol version SSL2 supported.\n",
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => "<p>The server supports the outdated protocol version SSL2, which is considered to be highly insecure. By using this version, you massively compromise the security of the server and possibly your entire company network.\n</p>",
  'PROTOCOLVERSION_SSL2_TIPS'       => "<p><a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS encoding</a> is considered to be the standard today. Therefore you should not use SSL2.\n</p>",
  'PROTOCOLVERSION_SSL2_LINK'       => "https://siwecos.de/wiki/Outdated-Protocol-Version-SSL2/EN",
  //
  // PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3'            => "Check for outdated SSL3 protocol\n",
  'PROTOCOLVERSION_SSL3_SUCCESS'    => "Outdated protocol version SSL3 not supported.\n",
  'PROTOCOLVERSION_SSL3_ERROR'      => "Outdated protocol version SSL3 supported.\n",
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => "<p>The server supports the outdated protocol version SSL3, which is considered to be highly insecure. By using this version, you massively compromise the security of the server and possibly your entire company network.\n</p>",
  'PROTOCOLVERSION_SSL3_TIPS'       => "<p><a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> encoding is considered to be the standard today. Therefore you should not use SSL3.\n</p>",
  'PROTOCOLVERSION_SSL3_LINK'       => "https://siwecos.de/wiki/Outdated-Protocol-Version-SSL3/EN",
  //
  // PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13'            => "Check for use of the <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS 1.3 protocol</a>\n",
  'PROTOCOLVERSION_TLS13_SUCCESS'    => "<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS 1.3 protocol</a> not supported.\n",
  'PROTOCOLVERSION_TLS13_ERROR'      => "Modern <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS 1.3 protocol</a> supported.\n",
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => "<p>The server supports the latest <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS 1.3 protocol version</a>. This version is still going through the standardisation process. If you do not understand what this means, you can deactivate the version, because most browsers do not yet support this version, and TLS 1.3 is still in development.\n</p>",
  'PROTOCOLVERSION_TLS13_TIPS'       => "<p>There is no need for action.\n</p>",
  'PROTOCOLVERSION_TLS13_LINK'       => "https://siwecos.de/wiki/Protocol-Version-TLS13-Found/EN",
  //
  // Category: Referrer Policy Scanner
  //
  // REFERRER_POLICY
  'REFERRER_POLICY'            => "Checking the Referrer Policy\n",
  'REFERRER_POLICY_SUCCESS'    => "Referrer Policy is secure\n",
  'REFERRER_POLICY_ERROR'      => "Referrer Policy is insecure\n",
  'REFERRER_POLICY_ERROR_DESC' => "<p>A well-defined Referrer Policy <b>protects the privacy</b> of your website visitors, but has no <i>direct</i> influence on the security of your website.\n</p>",
  'REFERRER_POLICY_TIPS'       => "<p>We recommend that the Referrer Policy Header be set to be as restrictive as possible, i.e. to be set to ”no-referrer,\" for example.\n</p>\n<h1><span class=\"mw-headline\" id=\".3D_Examples_.3D\">= Examples =</span></h1>\n<p><b>Referrer Policy Definition by Server Header:</b>\n</p>\n<pre> # Referrer Policy\nHeader set referrer-Policy \"no-referrer\" </pre>\n<p><b>Referrer Policy Definition by HTML code:</b>\n</p>\n<pre> &lt;meta name=\"referrer\" content=\"no-referrer\" \"/&gt; </pre>\n<p><b>Statement:</b> The value `<b>no-referrer</b>` instructs the browser to send <b>Never</b> <i>Referer Header</i>, which is provided by your site. This includes links to pages on your own website.\n</p><p><br />\n</p>\n<table class=\"wikitable\" style=\"margin:auto;”\">\n<tr>\n<td> style=\"border: 4px solid #C31622; color:#000000; background-color:#f6f6f6;\"\n</td>\n<td> Other useful instructions can be `<b>same-origin</b>`, `<b>strict-origin</b>` or `<b>origin-when-cross-origin`</b>.\n</td></tr></table>\n<p><br />\n</p>\n<pre>The value `<b>same origin</b>` instructs the browser to send only <i>Referer Header</i> provided by your website. If the target is another <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">domain</a>, no referrer information will be sent.\n</pre>\n<p>The value `<b>strict-origin</b>` instructs the browser, to always indicate the origin domain as <i>Referer Header</i>.\n</p><p>The value <b>origin-when-cross-origin</b>` instructs the browser to send the full referrer URL only if you stay on the same <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a>. Once the domain is left via <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a> or another <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a>  is addressed, only the source domain is sent.\n</p><p>Detailed information and examples can be found at <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://scotthelme.co.uk/a-new-security-header-referrer-policy/Scott\">Helme</a>.\n</p>",
  'REFERRER_POLICY_LINK'       => "https://siwecos.de/wiki/Referrer Policy/EN",
  //
  // Category: Report Text
  //
  // REPORT_FOR
  'REPORT_FOR'            => "Report for :domain\n",
  //
  // Category: Scanner
  //
  // SCANNER_NAME_DOMXSS
  'SCANNER_NAME_DOMXSS'            => "DOMXSS Scanner\n",
  //
  // SCANNER_NAME_HEADER
  'SCANNER_NAME_HEADER'            => "Header Scanner\n",
  //
  // SCANNER_NAME_INFOLEAK
  'SCANNER_NAME_INFOLEAK'            => "Info Leak Scanner\n",
  //
  // SCANNER_NAME_INI_S
  'SCANNER_NAME_INI_S'            => "Initiative-S Scanner\n",
  //
  // SCANNER_NAME_WS_TLS
  'SCANNER_NAME_WS_TLS'            => "TLS Scanner\n",
  //
  // Category: WS_TLS
  //
  // ANON_SUITES
  'ANON_SUITES'            => "Your web server/website is configured to make connections using an anonymous encryption method (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cipher_suite\">cipher suite</a>) without authentication. This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n",
  //
  // DES_SUITES
  'DES_SUITES'            => "Your web server/website is configured to support the outdated DES encryption method (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cipher_suite\">cipher suite</a>), which is regarded as insecure. This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n",
  //
  // EXPIRED
  'EXPIRED'            => "Your <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">certificate</a> expired on %DATE%. Visitors will be warned that your website may be insecure or not trustworthy.\n",
  //
  // EXPORT_SUITES
  'EXPORT_SUITES'            => "Your web server/website is configured to support intentionally insecure encryption methods (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cipher_suite\">cipher suite</a>). This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n",
  //
  // HASH_ALGO
  'HASH_ALGO'            => "Your server certificate uses the weak hash algorithm %HASH%. This allows the <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">certificate</a> to be forged very easily. However, a weak hash algorithm will not cause a warning message to be displayed when your website is accessed.\n",
  //
  // HTTPS_RESPONSE
  'HTTPS_RESPONSE'            => "The server “%HOST%“ does not respond to encrypted HTTP (HTTPS) requests.\n",
  //
  // HTTPS_SUPPORTED
  'HTTPS_SUPPORTED'            => "The server “%HOST%“ does not seem to support <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Transport_Layer_Security\">TLS</a> (Transport Layer Security). This means that you are not using encryption to protect your own and your customers' data.\n",
  //
  // NOT_YET_VALID
  'NOT_YET_VALID'            => "Your <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Certificate/EN\" title=\"Certificate/EN\">certificate</a> is not valid before %DATE%. Until then, visitors to your website will be warned that your website may be insecure or not trustworthy.\n",
  //
  // NULL_SUITES
  'NULL_SUITES'            => "Your web server/website is configured to allow unencrypted voice transmission via a secure channel. This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n",
  //
  // RC4_SUITES
  'RC4_SUITES'            => "Your web server/website is configured to support the outdated <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/RC4\">RC4</a> encryption method (<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cipher_suite\">cipher suite</a>), which is regarded as insecure. This makes you vulnerable to <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Man-in-the-middle_attack\">man-in-the-middle-attacks</a>.\n",
  //
  // Category: XSS scanner
  //
  // HAS_SINKS
  'HAS_SINKS'            => "Checking the JavaScript code for DOMXSS sinks\n",
  'HAS_SINKS_SUCCESS'    => "No unsafe code components for DOMXSS sinks were recognized in an automatic check.\n",
  'HAS_SINKS_ERROR'      => "Unsafe JavaScript code used (sinks)\n",
  'HAS_SINKS_ERROR_DESC' => "<p>At least one code segment was found by scanning your website that may, under certain circumstances, indicate a DOM-based <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Cross-Site_Scripting\" title=\"Cross-Site Scripting\">Cross-Site Scripting Anfälligkeit</a>. This segment can be a security flaw on your website.\n</p>",
  'HAS_SINKS_TIPS'       => "<p>The check result can only be taken as an indication of security flaws. Further tests are necessary to confirm that there are vulnerabilities on the website.\n</p>",
  //
  // HAS_SOURCES
  'HAS_SOURCES'            => "Check of JavaScript code for DOMXSS sources\n",
  'HAS_SOURCES_SUCCESS'    => "No unsafe code components for DOMXSS sources were recognized in an automatic check.\n",
  'HAS_SOURCES_ERROR'      => "Unsafe JavaScript code used (sources)\n",
  'HAS_SOURCES_ERROR_DESC' => "<p>During the check, at least one vulnerability was found on the web page that could be controlled by an external, potentially untrustworthy source.\n</p>",
  'HAS_SOURCES_TIPS'       => "<p>The check result can only be taken as an indication of security flaws. Further tests are necessary to confirm that there are vulnerabilities on the website.\n</p>",
  //
  // SINKS
  'SINKS'            => "Checking the JavaScript code for DOMXSS sinks\n",
  'SINKS_SUCCESS'    => "No unsafe code components for DOMXSS sinks were recognized in an automatic check.\n",
  'SINKS_ERROR'      => "Unsafe JavaScript code used (sinks).\n",
  'SINKS_ERROR_DESC' => "<p>At least one code segment was found by scanning your website that may, under certain circumstances, indicate a DOM-based <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://en.wikipedia.org/wiki/Cross-site_scripting\">cross-site scripting vulnerability</a>. This segment can be a security flaw on your website.\n</p>",
  'SINKS_TIPS'       => "<p>The check result can only be taken as an indication of security flaws. Further tests are necessary to confirm that there are vulnerabilities on the website.\n</p>",
  'SINKS_LINK'       => "https://siwecos.de/wiki/DOMXSS vulnerability/EN",
  //
  // SOURCES
  'SOURCES'            => "Check of JavaScript code for DOMXSS sources\n",
  'SOURCES_SUCCESS'    => "No unsafe code components for DOMXSS sources were recognized in an automatic check.\n",
  'SOURCES_ERROR'      => "Unsafe JavaScript code used (sources)\n",
  'SOURCES_ERROR_DESC' => "<p>During the check, at least one vulnerability was found on the web page that could be controlled by an external, potentially untrustworthy source.\n</p>",
  'SOURCES_TIPS'       => "<p>The check result can only be taken as an indication of security flaws. Further tests are necessary to confirm that there are vulnerabilities on the website.\n</p>",
  'SOURCES_LINK'       => "https://siwecos.de/wiki/Malicious-Code-By-External-Sources/EN",

];
