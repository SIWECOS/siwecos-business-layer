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
  'SCANNER_NAME' => 'Info Leak Scanner',

  // Test: CMS
  'CMS_HEADLINE'      => 'Check of the CMS version',
  'CMS_POSITIVE'      => 'Your current CMS version cannot be identified. Thus it cannot be determined whether you are using a vulnerable version.',
  'CMS_NEGATIVE'      => 'Content Management System (CMS) identifiable',
  'CMS_DESCRIPTION'   => '<p>The current <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Content_management_system">content management system (CMS)</a> can be identified. This information could be used by an attacker to search specifically for security flaws for this particular CMS. </p>',
  'CMS_SOLUTION_TIPS' => '<p>Always make sure that installed web servers and the <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Content_management_system">content management system (CMS)</a> are up to date. Some CMS allow you to hide the version information. Use this feature if it is available. The WordPress Plug-in "<a target="siwecos_extern" rel="nofollow" class="external text" href="http://wp-premiumthemes.de/hide-my-wp-tutorial-deutsch/">Hide My WP (German only)</a>" may be interesting for you. </p><p><b>Further example for WordPress:</b> In order to prevent attackers or hackers from reading the WordPress version directly, you can add the following line of code at the very end of the file <b>functions.php</b>: </p><p><b>--snip</b> </p><p>remove_action(\'wp_head\',\'wp_generator\'); </p><p><b>--snap</b> </p>',
  'CMS_LINK'          => 'https://siwecos.de/wiki/Content-Management-System-Found/EN',

  // Test: CMS_PLUGINS
  'CMS_PLUGINS_HEADLINE'      => 'Check for CMS plug-ins',
  'CMS_PLUGINS_POSITIVE'      => 'No <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Content_management_system">CMS plug-ins</a> could be detected. Attacks using security flaws in plug-ins are thus less likely.',
  'CMS_PLUGINS_NEGATIVE'      => '<a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin-Found/EN" title="Plugin-Found/EN">CMS plug-in</a> detected',
  'CMS_PLUGINS_DESCRIPTION'   => '<p>A plug-in that is used by your <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Content_management_system">content management system (CMS)</a> was detected. An attacker could use this information to search for specific security flaws for your website. </p>',
  'CMS_PLUGINS_SOLUTION_TIPS' => '<p>The use of <a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin-Found/EN" title="Plugin-Found/EN">plug-ins</a> should be limited to those plug-ins that are absolutely necessary. This can reduce the attack surface significantly. In addition, installed plugins should always be kept up to date. </p>',
  'CMS_PLUGINS_LINK'          => 'https://siwecos.de/wiki/Plugin-Found/EN',

  // Test: EMAIL_ADDRESS
  'EMAIL_ADDRESS_HEADLINE'      => 'Check for existing email addresses',
  'EMAIL_ADDRESS_POSITIVE'      => 'No email addresses could be found. Spam and phishing attacks on your email addresses are therefore less likely.',
  'EMAIL_ADDRESS_NEGATIVE'      => 'Readable email address',
  'EMAIL_ADDRESS_DESCRIPTION'   => '<p>Your website contains at least one machine-readable email address. This allows third parties to collect the stored email addresses automatically by the use of web crawlers (also called spiders, searchbots or robots). The collected email addresses can then be stored in an internal database together with other information about your website. </p>',
  'EMAIL_ADDRESS_SOLUTION_TIPS' => '<p>If email addresses were found, ask yourself if you really want to publish them. </p><p>Enter your contact addresses, for example in the imprint, as follows: mail at siwecos.de / mail @ siwecos.de. However, keep in mind that crawlers are largely able to detect and evaluate such "tricks". E-mail addresses become illegible for crawlers if you store them as graphics. This has the disadvantage that visually impaired visitors to your website cannot have your e-mail address read to them.  </p><p>Alternatively, you can use a small JavaScript which embeds your e-mail address as an encrypted, but clickable <b>mailto:</b>. Such a script can be created e.g. at <a target="siwecos_extern" rel="nofollow" class="external text" href="http://www.jottings.com/obfuscator.htm">ANTI-SPAM EMAIL LINK OBFUSCATOR</a>.  </p>',
  'EMAIL_ADDRESS_LINK'          => 'https://siwecos.de/wiki/Email-Address-Found/EN',

  // Test: JS_LIB
  'JS_LIB_HEADLINE'      => 'Check for JavaScript libraries',
  'JS_LIB_POSITIVE'      => 'By the current state of knowledge, the JavaScript libraries are not vulnerable to known security flaws.',
  'JS_LIB_NEGATIVE'      => 'Unsafe JavaScript library found.',
  'JS_LIB_DESCRIPTION'   => '<p>A JavaScript library you are using was detected. An attacker could use this information to search for vulnerabilites on your website. </p>',
  'JS_LIB_SOLUTION_TIPS' => '<p>If unsafe JavaScript libraries have been reported, update your JavaScript libraries or framework. </p><p><b>Note:</b> The vulnerability of version 1.12.4 is known to the developers and should be fixed with the next update. A manual change to version 3 is not recommended by Wordpress for compatibility reasons. As soon as the new update is available, you should install it as soon as possible. </p>',
  'JS_LIB_LINK'          => 'https://siwecos.de/wiki/JavaScript-Vulnerability/EN',

  // Test: PHONE_NUMBER
  'PHONE_NUMBER_HEADLINE'      => 'Check for readable phone numbers',
  'PHONE_NUMBER_POSITIVE'      => 'No phone numbers were found.',
  'PHONE_NUMBER_NEGATIVE'      => 'Phone number found.',
  'PHONE_NUMBER_DESCRIPTION'   => '<p>A phone number was found. An attacker could use this information to manipulate employees and to gain information that should remain secret. </p>',
  'PHONE_NUMBER_SOLUTION_TIPS' => '<p>The published phone numbers should be limited to those which are actually intended for communication with customers. Also, an employee who uses the phone should be aware of the dangers of social engineering attacks and should know the methods of social engineers. </p>',
  'PHONE_NUMBER_LINK'          => 'https://siwecos.de/wiki/Phone-Number-Found/EN',

  // Result texts follow
  'CMS_ONLY'                   => 'The content management system (:cms) you are using can be identified.',
  'CMS_VERSION'                => 'The used CMS :cms in version :version was detected. Revealing the version information makes it easier for an attacker to prepare an attack. However, this is not a vulnerability in itself and requires further inspection.',
  'CMS_VERSION_VULN'           => 'The used CMS :cms in version :version was detected. There is a known security flaw for this version.',
  'COULDNT_CONNECT'            => '<dl><dd>domain does not reply.</dd></dl>',
  'COULDNT_RESOLVE_HOST'       => '<dl><dd>domain is unknown.</dd></dl>',
  'DONT_LEAK_USER_CREDS'       => 'You should not transfer your user credentials (name and password).',
  'EMAIL_FOUND'                => 'The email address :email_adress was found. Do you really want to publish this email address? An attacker could use it, for example for phishing attacks.',
  'JSON_DECODE_ERROR'          => 'There is a Jason translation error.',
  'JS_LIB_ONLY'                => 'The JavaScript library :js_lib_name in DOM node :node with content :node_content was detected. However, this is not a vulnerability in itself and requires further inspection.',
  'JS_LIB_VERSION'             => 'The JavaScript library :js_lib_name in version :js_lib_version in DOM node :node with content :node_content was detected. Revealing the version information makes it easier for an attacker to prepare an attack. However, this is not a vulnerability in itself and requires further inspection.',
  'JS_LIB_VULN_VERSION'        => 'The JavaScript library :js_lib_name in version :js_lib_version in DOM node :node with content :node_content was detected. There is a known security flaw for this version.',
  'LOCALHOST_SCAN_NOT_ALLOWED' => 'The local scan is not allowed',
  'NO_RESPONSE'                => 'The specified URL did not respond.',
  'NO_SOURCE_CODE'             => 'No source found.',
  'NUMBER_FOUND'               => 'The phone number :number was found. Do you really want to publish this phone number? An attacker could use it, for example for social engineering attacks (interpersonal manipulation).',
  'PLUGIN_ONLY'                => 'The <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Content_management_system">CMS plug-in</a> :plugin in DOM node :node with content :node_content was detected. However, this is not a vulnerability in itself and requires further inspection.',
  'PLUGIN_VERSION'             => 'The <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Content_management_system">CMS plug-in</a> :plugin in version :plugin_version in DOM node :node with content :node_content was detected. Revealing the version information makes it easier for an attacker to prepare an attack. However, this is not a vulnerability in itself and requires further inspection.',
  'PLUGIN_VERSION_VULN'        => 'The <a target="siwecos_extern" rel="nofollow" class="external text" href="https://en.wikipedia.org/wiki/Content_management_system">CMS plug-in</a> :plugin in version :plugin_version in DOM node :node with content :node_content was detected. There is a known security flaw for this version.',
  'PORT_DISALLOWED'            => 'This port is not allowed.',
  'REDIRECT_ERROR'             => 'A redirect error has occurred.',

];
