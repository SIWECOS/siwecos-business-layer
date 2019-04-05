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
  'SCANNER_NAME' => 'DOMXSS Scanner',

  // Test: SINKS
  'SINKS_HEADLINE'      => 'Checking the JavaScript code for DOMXSS sinks',
  'SINKS_POSITIVE'      => 'No unsafe code components for DOMXSS sinks were recognized in an automatic check.',
  'SINKS_NEGATIVE'      => 'Unsafe JavaScript code used (sinks).',
  'SINKS_DESCRIPTION'   => '<p>At least one code segment was found by scanning your website that may, under certain circumstances, indicate a DOM-based <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Cross-site_scripting">cross-site scripting vulnerability</a>. This segment can be a security flaw on your website. </p>',
  'SINKS_SOLUTION_TIPS' => '<p>If unsafe JavaScript code was reported, the web application may be vulnerable to so-called DOMXSS attacks. The check result can only be taken as an indication of security flaws. Further tests are necessary to confirm that there are vulnerabilities on the website. </p>',
  'SINKS_LINK'          => 'https://siwecos.de/wiki/DOMXSS vulnerability/EN',

  // Test: SOURCES
  'SOURCES_HEADLINE'      => 'Check of JavaScript code for DOMXSS sources',
  'SOURCES_POSITIVE'      => 'No unsafe code components for DOMXSS sources were recognized in an automatic check.',
  'SOURCES_NEGATIVE'      => 'Unsafe JavaScript code used (sources)',
  'SOURCES_DESCRIPTION'   => '<p>During the check, at least one vulnerability was found on the web page that could be controlled by an external, potentially untrustworthy source. </p>',
  'SOURCES_SOLUTION_TIPS' => '<p>If unsafe JavaScript code was reported, the web application may be vulnerable to so-called DOMXSS attacks. The check result can only be taken as an indication of security flaws. Further tests are necessary to confirm that there are vulnerabilities on the website. </p>',
  'SOURCES_LINK'          => 'https://siwecos.de/wiki/Malicious-Code-By-External-Sources/EN',

  // Result texts follow
  'NO_CONTENT'       => 'The site was empty and there was nothing to scan for.',
  'NO_SCRIPT_TAGS'   => 'The scanner found no script tags to rate.',
  'NO_SINKS_FOUND'   => 'No "sinks" were found.',
  'NO_SOURCES_FOUND' => 'No "sources" were found.',
  'SECURE_FLAG_SET'  => 'The secure flag is set.',
  'SINKS_FOUND'      => '"Sinks" were found.',
  'SOURCES_FOUND'    => '"Sources" were found.',

];
