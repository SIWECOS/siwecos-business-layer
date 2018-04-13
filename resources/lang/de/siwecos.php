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
  // Category: * NO CATEGORY *
  //
  // PHISING_FOUND
  'PHISING_FOUND'            => '<p>Ihre Domain ‘%site%’ wurde in folgenden Phising-Listen gefunden:&#160;%where%\n</p>',
  //
  // Category: Angriffe
  //
  // BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE'            => '<p>Überprüfung auf Bleichenbacher Schwachstelle\n</p>',
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Bleichenbacher (ROBOT)\n</p>',
  'BLEICHENBACHER_VULNERABLE_ERROR'      => '<p>Verwundbar durch Bleichenbacher (ROBOT)\n</p>',
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Bleichenbacher Angriff(ROBOT). Hierbei kann die Kommunikation entschlüsselt und bei der Übertragung die Nutzereingaben wie Passwörter im Klartext gelesen werden.\n</p>',
  'BLEICHENBACHER_VULNERABLE_TIPS'       => '<p>Überprüfen Sie Ihr Zertifikat bzw. spielen sie umgehend ein Update für ihre TLS-Verschlüsselung auf ihren Server ein.\n</p>',
  'BLEICHENBACHER_VULNERABLE_LINK'       => '<p>Bleichenbacher-Schwachstelle\n</p>',
  //
  // CRIME_VULNERABLE
  'CRIME_VULNERABLE'            => '<p>Überprüfung auf die CRIME Schwachstelle\n</p>',
  'CRIME_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch CRIME\n</p>',
  'CRIME_VULNERABLE_ERROR'      => '<p>Verwundbar durch CRIME\n</p>',
  'CRIME_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch CRIME. Ein Angriff welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>',
  'CRIME_VULNERABLE_TIPS'       => '<p>CRIME kann besiegt werden, indem die Verwendung von Komprimierung verhindert wird. Entweder auf der Client-Seite, indem der Browser die Komprimierung von SPDY-Anfragen deaktiviert, oder indem die Website die Verwendung von Datenkompression bei solchen Transaktionen unter Verwendung der Protokollaushandlungsmerkmale des TLS-Protokolls verhindert.\n</p>',
  'CRIME_VULNERABLE_LINK'       => '<p>Crime-Schwachstelle\n</p>',
  //
  // HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE'            => '<p>Überprüfung auf die Heartbleed Schwachstelle.\n</p>',
  'HEARTBLEED_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Heartbleed\n</p>',
  'HEARTBLEED_VULNERABLE_ERROR'      => '<p>Verwundbar durch Heartbleed\n</p>',
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch Heartbleed. Dadurch kann ein Angreifer sensible Daten aus dem Arbeitsspeicher des Servers auslesen, wie z.B. geheime Schlüssel und Kundendaten.\n</p>',
  'HEARTBLEED_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Verschlüsselung auf ihren Server ein.\n</p>',
  'HEARTBLEED_VULNERABLE_LINK'       => '<p>Heartbleed-Schwachstelle\n</p>',
  //
  // INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE'            => '<p>Überprüfung auf die Ephemeral Invalid Curve Schwachstelle.\n</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Ephemeral Invalid Curve Angriffe\n</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => '<p>Verwundbar durch Ephemeral Invalid Curve Angriffe\n</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Ephemeral Invalid Curve Angriff. Dadurch kann ein Angreifer die Verbindungen angreifen.\n</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.\n</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_LINK'       => '<p>Invalid-Curve-Ephemeral-Schwachstelle\n</p>',
  //
  // INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE'            => '<p>Überprüfung auf die Invalid Curve Schwachstelle\n</p>',
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Invalid Curve Angriffe\n</p>',
  'INVALID_CURVE_VULNERABLE_ERROR'      => '<p>Verwundbar durch Invalid Curve Angriffe\n</p>',
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Invalid Curve Angriff. Dadurch kann ein Angreifer den geheimen Schlüssel ihres Zertifikats stehlen.\n</p>',
  'INVALID_CURVE_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.\n</p>',
  'INVALID_CURVE_VULNERABLE_LINK'       => '<p>Invalid-Curve-Schwachstelle\n</p>',
  //
  // PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE'            => '<p>Überprüfung auf die Padding-Oracle Schwachstelle\n</p>',
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Padding Oracle Angriffe\n</p>',
  'PADDING_ORACLE_VULNERABLE_ERROR'      => '<p>Verwundbar durch Padding Oracle Angriffe\n</p>',
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Padding-Oracle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>',
  'PADDING_ORACLE_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.\n</p>',
  'PADDING_ORACLE_VULNERABLE_LINK'       => '<p>PADDING-ORACLE-Schwachstelle\n</p>',
  //
  // POODLE_VULNERABLE
  'POODLE_VULNERABLE'            => '<p>Überprüfung auf die POODLE Schwachstelle\n</p>',
  'POODLE_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Poodle\n</p>',
  'POODLE_VULNERABLE_ERROR'      => '<p>Verwundbar durch Poodle\n</p>',
  'POODLE_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Poodle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>',
  'POODLE_VULNERABLE_TIPS'       => '<p>Deaktivieren Sie umgehend das veraltete Verschlüsselungsprotokoll SSL3 auf ihrem Server!\n</p>',
  'POODLE_VULNERABLE_LINK'       => '<p>TLS-POODLE-Schwachstelle\n</p>',
  //
  // SWEET32_VULNERABLE
  'SWEET32_VULNERABLE'            => '<p>Überprüfung auf SWEET32 Schwachstelle\n</p>',
  'SWEET32_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch SWEET32\n</p>',
  'SWEET32_VULNERABLE_ERROR'      => '<p>Verwundbar durch SWEET32\n</p>',
  'SWEET32_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch SWEET32, welcher es einem Angreifer erlaubt teile der Kommunikation zu entschlüsseln falls über eine Verbindung große Mengen Daten transferiert werden.\n</p>',
  'SWEET32_VULNERABLE_TIPS'       => '<p>Deaktivieren Sie <a target="_self" rel="nofollow" class="external text" href="https://www.itwissen.info/Blockchiffre-block-cipher.html">Blockchiffren</a> mit einer Länge von 64 Bit. Vergewissern Sie sich, das Protokolle wie SSLv2 und SSLv3 deaktiviert sind.\n</p>',
  'SWEET32_VULNERABLE_LINK'       => '<p>Sweet32-Schwachstelle\n</p>',
  //
  // TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE'            => '<p>Überprüfung auf die TLS-POODLE Schwachstelle\n</p>',
  'TLS_POODLE_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch TLS-Poodle\n</p>',
  'TLS_POODLE_VULNERABLE_ERROR'      => '<p>Verwundbar durch TLS-Poodle\n</p>',
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch eine Variante des Poodle Angriffs auf TLS, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>',
  'TLS_POODLE_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein. In der Apache-Konfiguration etwa kann man etwa die Zeile "SSLProtocol All -SSLv2 -SSLv3 " angeben.\n</p>',
  'TLS_POODLE_VULNERABLE_LINK'       => '<p>Tls-Poodle-Schwachstelle\n</p>',
  //
  // Category: Fehler
  //
  // SCANNER_TIMEOUT
  'SCANNER_TIMEOUT'            => '<p>Der Scanner "%scanner%" wurde nach&#160;%timeoutvalue% Sekunden beendet, weil er kein Ergebnis geliefert hat.\n</p>',
  //
  // TIMEOUT
  'TIMEOUT'            => '<p>Zeitüberschreitung\n</p>',
  'TIMEOUT_ERROR'      => '<p>Der Scan hat kein Ergebnis geliefert und wurde deswegen abgebrochen.\n</p>',
  'TIMEOUT_ERROR_DESC' => '<p>Eine Zeitüberschreitung bedeutet, dass der Scan ihrer Domain länger dauerte als ein Scan üblicherweise dauert.\n</p><p>Ursachen hierfür können unter anderem sein:\n</p><p>Ihr Server ist momentan nicht erreichbar oder überlastet\n</p><p>Unser Scanner Server ist momentan überlastet\n</p>',
  //
  // Category: Fehlermeldung
  //
  // DONT_LEAK_USER_CREDS
  'DONT_LEAK_USER_CREDS'            => '<p>Sie sollten ihre Zugangsdaten (Name und Passwort) nicht übermitteln.\n</p>',
  //
  // HEADER_NOT_SET
  'HEADER_NOT_SET'            => '<p>Der Header ist nicht gesetzt.\n</p>',
  //
  // HEADER_SET_MULTIPLE_TIMES
  'HEADER_SET_MULTIPLE_TIMES'            => '<p>Der Header wurde mehrmals gesetzt.\n</p>',
  //
  // JSON_DECODE_ERROR
  'JSON_DECODE_ERROR'            => '<p>Es gibt hier einen Jason Übersetzungsfehler.\n</p>',
  //
  // LOCALHOST_SCAN_NOT_ALLOWED
  'LOCALHOST_SCAN_NOT_ALLOWED'            => '<p>Die lokale Überprüfung ist nicht erlaubt.\n</p>',
  //
  // MAX_AGE_ERROR
  'MAX_AGE_ERROR'            => '<p>Es trat ein Fehler beim Überprüfen der `max-age`-Angabe auf.\n</p>',
  //
  // NOT_REACHABLE
  'NOT_REACHABLE'            => '<p>Nicht erreichbar.\n</p>',
  //
  // NO_HTTP_RESPONSE
  'NO_HTTP_RESPONSE'            => '<p>Die angegebene URL lieferte keine Antwort.\n</p>',
  //
  // NO_SOURCE_CODE
  'NO_SOURCE_CODE'            => '<p>Keine Quelle gefunden.\n</p>',
  //
  // NO_VALID_URL
  'NO_VALID_URL'            => '<p>Die Internetadresse (URL) ist nicht gültig.\n</p>',
  //
  // PORT_DISALLOWED
  'PORT_DISALLOWED'            => '<p>Dieser Port ist nicht erlaubt.\n</p>',
  //
  // REDIRECT_ERROR
  'REDIRECT_ERROR'            => '<p>Es gibt einen Umleitungsfehler.\n</p>',
  //
  // SCORE_info
  'SCORE_info'            => '<p>Info\n</p>',
  //
  // Category: Generell
  //
  // HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED'            => '<p>Überprüfung der Reaktionszeit des HTTP Headers\n</p>',
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => '<p>Server spricht TLS\n</p>',
  'HTTPS_NOT_SUPPORTED_ERROR'      => '<p>Server scheint kein TLS zu sprechen\n</p>',
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => '<p>Der Server scheint kein TLS (Transportschichtsicherheit) zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten und die ihrer Kunden zu schützen.\n</p>',
  'HTTPS_NOT_SUPPORTED_TIPS'       => '<p>Aktivieren sie TLS (Transportschichtsicherheit)\n</p>',
  'HTTPS_NOT_SUPPORTED_LINK'       => '<p>Keine-TLS-Unterstuetzung\n</p>',
  //
  // HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE'            => '<p>Überprüfung der Reaktionszeit des HTTPS Headers\n</p>',
  'HTTPS_NO_RESPONSE_SUCCESS'    => '<p>Server antwortet\n</p>',
  'HTTPS_NO_RESPONSE_ERROR'      => '<p>Server antwortet nicht\n</p>',
  'HTTPS_NO_RESPONSE_ERROR_DESC' => '<p>Der Server scheint nicht zu antworten. Haben sie die Domain richtig eingegeben?\n</p>',
  'HTTPS_NO_RESPONSE_TIPS'       => '<p>Bitte überprüfen Sie Ihre Eingabe auf Eingabefehler.\n</p>',
  'HTTPS_NO_RESPONSE_LINK'       => '<p>Reaktionszeit-Ueberschritten\n</p>',
  //
  // SCORE_bonus
  'SCORE_bonus'            => '<p>Bonus\n</p>',
  //
  // SCORE_critical
  'SCORE_critical'            => '<p>Critical\n</p>',
  //
  // SCORE_hidden
  'SCORE_hidden'            => '<p>Versteckt\n</p>',
  //
  // SCORE_success
  'SCORE_success'            => '<p>Erfolgreich\n</p>',
  //
  // SCORE_warning
  'SCORE_warning'            => '<p>Warnung\n</p>',
  //
  // Category: HSHS_DOMXSS
  //
  // CSP_CORRECT
  'CSP_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n</p>',
  //
  // CSP_LEGACY_HEADER_SET
  'CSP_LEGACY_HEADER_SET'            => '<p>Der veraltete Header `X-Content-Security-Policy` ist gesetzt. Der neue standardisierte Header ist `Content-Security-Policy`.\n</p>',
  //
  // CSP_NO_UNSAFE_INCLUDED
  'CSP_NO_UNSAFE_INCLUDED'            => '<p>Der Header ist korrekt gesetzt und enthält keine `unsafe-`-Direktiven.\n</p>',
  //
  // CSP_UNSAFE_INCLUDED
  'CSP_UNSAFE_INCLUDED'            => '<p>Der Header ist unsicher gesetzt, da er `unsafe-inline`- oder `unsafe-eval`-Direktiven enthält.\n</p>',
  //
  // CT_CORRECT
  'CT_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n</p>',
  //
  // CT_HEADER_WITHOUT_CHARSET
  'CT_HEADER_WITHOUT_CHARSET'            => '<p>Der Header ist ohne Zeichensatzangabe gesetzt und dadurch nicht sicher.\n</p>',
  //
  // CT_HEADER_WITH_CHARSET
  'CT_HEADER_WITH_CHARSET'            => '<p>Der Header ist korrekt gesetzt und beinhaltet eine Zeichensatz-Angabe.\n</p>',
  //
  // CT_META_TAG_SET
  'CT_META_TAG_SET'            => '<p>Die Header-Angabe ist via `&lt;meta&gt;`-Tag gesetzt, enthält jedoch keine Zeichensatz-Angabe oder folgt nicht den Empfehlungen.\n</p>',
  //
  // CT_META_TAG_SET_CORRECT
  'CT_META_TAG_SET_CORRECT'            => '<p>Die Header-Angabe ist via `&lt;meta&gt;`-Tag gesetzt und entspricht den Empfehlungen.\n</p>',
  //
  // CT_WRONG_CHARSET
  'CT_WRONG_CHARSET'            => '<p>Ein falscher oder ungültiger Zeichensatz wurde eingetragen. Die Konfiguration ist nicht sicher.\n</p>',
  //
  // HPKP_LESS_15
  'HPKP_LESS_15'            => '<p>Die öffentlichen Schlüssel sind für weniger als 15 Tage gepinnt.\n</p>',
  //
  // HPKP_MORE_15
  'HPKP_MORE_15'            => '<p>Die öffentlichen Schlüssel sind für mehr als 15 Tage gepinnt.\n</p>',
  //
  // HPKP_REPORT_URI
  'HPKP_REPORT_URI'            => '<p>Eine `report-uri` ist gesetzt.\n</p>',
  //
  // HSTS_LESS_6
  'HSTS_LESS_6'            => '<p>Der Wert von `max-age` ist kleiner als 6 Monate.\n</p>',
  //
  // HSTS_MORE_6
  'HSTS_MORE_6'            => '<p>Der Wert von `max-age` ist größer als 6 Monate.\n</p>',
  //
  // HSTS_PRELOAD
  'HSTS_PRELOAD'            => '<p>Die `preload`-Direktive ist gesetzt.\n</p>',
  //
  // INCLUDE_SUBDOMAINS
  'INCLUDE_SUBDOMAINS'            => '<p>`includeSubDomains` ist gesetzt.\n</p>',
  //
  // NO_SINKS_FOUND
  'NO_SINKS_FOUND'            => '<p>Es wurden keine „Sinks“ gefunden.\n</p>',
  //
  // NO_SOURCES_FOUND
  'NO_SOURCES_FOUND'            => '<p>Es wurden keine „Sources“ gefunden.\n</p>',
  //
  // SINKS_FOUND
  'SINKS_FOUND'            => '<p>Es wurden „Sinks“ gefunden.\n</p>',
  //
  // SOURCES_FOUND
  'SOURCES_FOUND'            => '<p>Es wurden „Sources“ gefunden.\n</p>',
  //
  // XCTO_CORRECT
  'XCTO_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n</p>',
  //
  // XCTO_NOT_CORRECT
  'XCTO_NOT_CORRECT'            => '<p>Der Header ist nicht korrekt gesetzt.\n</p>',
  //
  // XFO_CORRECT
  'XFO_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n</p>',
  //
  // XFO_WILDCARDS
  'XFO_WILDCARDS'            => '<p>Der Header enthält Wildcard-Angaben (*) und ist daher nicht sicher konfiguriert.\n</p>',
  //
  // XXSS_BLOCK
  'XXSS_BLOCK'            => '<p>Die `mode=block`-Direktive ist aktiviert.\n</p>',
  //
  // XXSS_CORRECT
  'XXSS_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n</p>',
  //
  // Category: HTTP-Security-Header-Scanner
  //
  // CONTENT_SECURITY_POLICY
  'CONTENT_SECURITY_POLICY'            => '<p>Überprüfung der Content Security Policy (CSP)\n</p>',
  'CONTENT_SECURITY_POLICY_SUCCESS'    => '<p>Eine sichere Konfiguration der Content Security Policy (CSP) wurde gefunden.\n</p>',
  'CONTENT_SECURITY_POLICY_ERROR'      => '<p>Content Security Policy Inaktiv\n</p>',
  'CONTENT_SECURITY_POLICY_ERROR_DESC' => '<p>Die Content-Security-Policy ist ein Sicherheitskonzept, welches das Injizieren und Auszuführen von evtl. bösartigen Befehlen in eine Webanwendung (Content-Injection-Angriffe) mildern soll. Es stellt über eine Whitelist (Liste erlaubter Quellen) dar, von welchen <a href="https://siwecos.de/wiki/Quellen" title="Quellen">Quellen</a> Javascripte, Bilder, Schriftarten und andere Inhalte auf Ihrer Seite eingebunden werden dürfen.\n</p>',
  'CONTENT_SECURITY_POLICY_TIPS'       => '<p>Verwenden Sie den CSP mit default-src \'none\' und ohne unsicher-eval oder unsicher-inline-Richtlinien. Mehr zu <b>Content Security Policy</b> (zu deutsch etwa "Richtlinie für die Sicherheit der Inhalte") finden Sie bei <b><a target="_self" rel="nofollow" class="external text" href="https://wiki.selfhtml.org/wiki/Sicherheit/Content_Security_Policy">SELFHTML&gt;&gt;</a></b>\n</p><p><br />\n--snip<br />\n</p><p><b>Beispiele für den Header der Startseite:</b>\n</p>\n<pre>\n&lt;meta http-equiv="Content-Security-Policy" content="default-src \'self\'; script-src \'self\'"&gt;\n&lt;meta http-equiv="X-Content-Security-Policy" content="default-src \'self\'; script-src \'self\'"&gt;\n&lt;meta http-equiv="X-WebKit-CSP" content="default-src \'self\'; script-src \'self\'"&gt;</pre>\n<p><b>Konfiguration des Webservers</b>\n</p><p>Wenn man seinen eigenen Webserver konfigurieren kann, was bei günstigen Hostingangeboten in aller Regel nicht der Fall ist, dann gibt es diese Einstellungsmöglichkeit über die <b>Bearbeitung der .htaccess</b>:\n</p>\n<pre># Download / Lade Inhalte nur von Seiten die explizit erlaubt sind\n# Beispiel: Alles von der eigenen Domain erlauben, keine Externas:\n\nHeader set Content-Security-Policy "default-src \'none\'; script-src \'self\'; connect-src \'self\'; img-src \'self\'; style-src \'self\';"\n\n</pre>\n<p>--snap\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)\n</p>',
  'CONTENT_SECURITY_POLICY_LINK'       => '<p>Content-Security-Policy-Schwachstelle\n</p>',
  //
  // CONTENT_TYPE
  'CONTENT_TYPE'            => '<p>Überprüfung des HTTP Content-Types\n</p>',
  'CONTENT_TYPE_SUCCESS'    => '<p>Die Content Type Angabe ist korrekt konfiguriert.\n</p>',
  'CONTENT_TYPE_ERROR'      => '<p>Inkorekte HTTP Content-Type Konfiguration\n</p>',
  'CONTENT_TYPE_ERROR_DESC' => '<p>Der Content-Type ist eine Angabe, die für gewöhnlich im Kopfbereich der Webseite, dem sogenannten HTTP-Header, untergebracht wird. Durch diese Angaben wird der Zeichensatz und der Typ des Inhalts der Seite definiert. Sollte eine Definition fehlen, wird der Webbrowser versuchen den Content-Type zu erraten; dies kann zu Sicherheitslücken wie Code-Page-Sniffing führen. Diese Angaben sind zudem wichtig, damit die Webseite in jedem <a href="https://siwecos.de/wiki/Browser" title="Browser">Browser</a> und auf jedem Computer einwandfrei dargestellt wird. Wenn ein Server ein Dokument an einen <a target="_self" rel="nofollow" class="external text" href="https://de.wikipedia.org/wiki/User_Agent">User-Agent</a> sendet (zum Beispiel zum <a href="https://siwecos.de/wiki/Browser" title="Browser">Browser</a>) ist es nützlich, im Content-Type-Feld des HTTP-Header die Art des Dateiformates zu hinterlegen. Diese Informationen deklarieren den <a target="_self" rel="nofollow" class="external text" href="https://de.wikipedia.org/wiki/Internet_Media_Type">MIME-Typ</a> und senden entsprechend die Zeichenkodierung des Dokuments wie text/html, text/plain, etc. an den Browser.\n</p>',
  'CONTENT_TYPE_TIPS'       => '<p>Fügen sie den entsprechenden HTTP-Header oder alternativ ein &lt;meta&gt; Tag hinzu. Bitte beachten Sie, dass &lt;meta&gt; im Gegensatz zu einem HTTP-Header leichter angegriffen werden kann.\n</p><p><b>text/html; charset=utf-8</b>;\n</p><p><b>--snip</b>\n</p>\n<pre>&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8"&gt;</pre>\n<p><b>—snap</b>\n</p><p><br />\nWeiterhin muß der Server selber konfiguriert werden, damit die <b>richtige charset-Information</b> gesendet wird. Dazu benötigt werden entsprechende Berechtigungen benötigt um die Änderungen am Server durchführen zu können. Weiter Informationen zu den verschiedenen Serverkonfigurationen finden Sie auf den Seiten von <a target="_self" rel="nofollow" class="external text" href="https://www.w3.org/International/articles/http-charset/index.de">W3.org</a>.\n</p><p>Darüber hinaus gibt es auch die Möglichkeit die <b>richtige charset-Information</b> der <a target="_self" rel="nofollow" class="external text" href="http://httpd.apache.org/docs/2.0/howto/htaccess.html"><b>.htaccess</b></a> zu übergeben, welche die Angaben im HTTP-Header überschreiben. <a target="_self" rel="nofollow" class="external text" href="https://www.w3.org/International/questions/qa-htaccess-charset">charset in .htaccess</a>\n</p><p><b>In die .htaccess eintragen:</b>\n</p>\n<pre>AddType \'text/html; charset=UTF-8\' html</pre>\n<p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)\n</p>',
  'CONTENT_TYPE_LINK'       => '<p>Content-Type-Nicht-Korrekt\n</p>',
  //
  // PUBLIC_KEY_PINS
  'PUBLIC_KEY_PINS'            => '<p>Überprüfung des Public Key Pinning (HPKP)\n</p>',
  'PUBLIC_KEY_PINS_SUCCESS'    => '<p>Public-Key-Pinning ist aktiviert\n</p>',
  'PUBLIC_KEY_PINS_ERROR'      => '<p>Public-Key-Pinning nicht vorhanden.\n</p>',
  'PUBLIC_KEY_PINS_ERROR_DESC' => '<p>Mächtige Angreifer wie bspw. Geheimdienste können ggf. eine Signatur, mit der Hilfe einer von den Benutzern akzeptierten Zertifizierungsstelle, erstellen lassen. Um dies zu verhindern kann eine Webseite definieren, dass beim ersten Aufruf des Zertifikats das Zertifikat dauerhaft gespeichert (pinning). Mit der Hilfe von Key-Pinning wird für die von der Webseiten definierten Zeit lediglich das gespeicherte Zertifikat akzeptiert.\n</p>',
  'PUBLIC_KEY_PINS_TIPS'       => '<p>pin-sha256="&lt;HASH&gt;"; pin-sha256="&lt;HASH&gt;"; max-age=2592000; includeSubDomains;\n<b>HPKP aktivieren</b> - Dieses Feature kann einfach aktiviert werden indem ein Public-Key-Pins HTTP-Header beim Aufruf der Seite über <a href="https://siwecos.de/wiki/HTTPS" title="HTTPS">HTTPS</a> zurückgegeben wird. (<a target="_self" rel="nofollow" class="external text" href="https://developer.mozilla.org/de/docs/Web/Security/Public_Key_Pinning">Weitere Infos</a>).\n</p><p><b>--snip</b>\n</p>\n<pre>Public-Key-Pins: pin-sha256="base64=="; max-age=expireTime [; includeSubdomains][; report-uri="reportURI"]</pre>\n<p><b>--snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)\n</p>',
  'PUBLIC_KEY_PINS_LINK'       => '<p>Public-Key-Pins-Deaktiviert\n</p>',
  //
  // STRICT_TRANSPORT_SECURITY
  'STRICT_TRANSPORT_SECURITY'            => '<p>Überprüfung des HSTS Schutzes\n</p>',
  'STRICT_TRANSPORT_SECURITY_SUCCESS'    => '<p>Ihre Webseite ist ausschließlich über das sichere HTTPS-Protokoll erreichbar. Kommunikation zwischen Ihrer Webseite und den Besuchern kann nicht abgehört und manipuliert werden.\n</p>',
  'STRICT_TRANSPORT_SECURITY_ERROR'      => '<p>HSTS Schutz Fehler\n</p>',
  'STRICT_TRANSPORT_SECURITY_ERROR_DESC' => '<p>Strict-Transport-Security stellt sicher, dass die Webseite für eine bestimmte Zeit lediglich über HTTPS gesicherte Verbindung aufgerufen werden kann. Der Webseitenbetreiber kann diesbezüglich u.a. definieren, wie lange das Zeitinterval ist und ob diese Regelung auch für Subdomains gelten soll.\n</p>',
  'STRICT_TRANSPORT_SECURITY_TIPS'       => '<p>max-age=63072000; includeSubdomains;\nHTTP Strict Transport Security (HSTS) ist ein einfach zu integrierender Web-Security-Policy-Mechanismus.\n</p>\n<b>--snip</b><pre>\n# HTTP Strict Transport Security (HSTS) aktivieren\n# Pflichtangabe: „max-age“\n# Optional: „includeSubDomains“</pre>\n<pre>  <b>Header set Strict-Transport-Security „max-age=31556926, includeSubDomains“</b>\n</pre>\n<p><b>--snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)\n</p>',
  'STRICT_TRANSPORT_SECURITY_LINK'       => '<p>Keine-Verschluesselung-Gefunden\n</p>',
  //
  // X_CONTENT_TYPE_OPTIONS
  'X_CONTENT_TYPE_OPTIONS'            => '<p>Überprüfung des X-Content-Type Headers\n</p>',
  'X_CONTENT_TYPE_OPTIONS_SUCCESS'    => '<p>Der HTTP-Header ist korrekt gesetzt.\n</p>',
  'X_CONTENT_TYPE_OPTIONS_ERROR'      => '<p>X-Content-Type Header fehlt\n</p>',
  'X_CONTENT_TYPE_OPTIONS_ERROR_DESC' => '<p>Die X-Content-Type-Options Einstellungen im Header verhindern, dass der <a href="https://siwecos.de/wiki/Browser" title="Browser">Browser</a> Dateien als etwas anderes interpretiert, als vom Inhaltstyp im <a href="https://siwecos.de/wiki/HTTP" title="HTTP">HTTP-Header</a> deklariert wurde. Die Headereinstellungen sind hier nicht gesetzt.\n</p>',
  'X_CONTENT_TYPE_OPTIONS_TIPS'       => '<p>nosniff; <br /><br />\n<b>Beispielcode einer .htaccess auf einem Apache Webserver.</b><br />\n</p>\n<b>--snip</b><pre>\n&lt;IfModule mod_headers.c&gt;\n   # prevent mime based attacks like drive-by download attacks, IE and Chrome\n   \'\'\'Header set X-Content-Type-Options „nosniff“\'\'\'\n&lt;pre&gt;&lt;/IfModule&gt;</pre>\n<p><b>—snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)\n</p>',
  'X_CONTENT_TYPE_OPTIONS_LINK'       => '<p>X-Content-Type-Options-Schwachstelle\n</p>',
  //
  // X_FRAME_OPTIONS
  'X_FRAME_OPTIONS'            => '<p>Überprüfung der X-Frame Optionen\n</p>',
  'X_FRAME_OPTIONS_SUCCESS'    => '<p>Der Header ist korrekt gesetzt und verbessert den Schutz Ihrer Webseite gegen Clickjacking-Angriffe.\n</p>',
  'X_FRAME_OPTIONS_ERROR'      => '<p>HTTP-Header X-Frame Optionen nicht gesetzt.\n</p>',
  'X_FRAME_OPTIONS_ERROR_DESC' => '<p>X-Frame-Options hilft dabei Angriffe über Framing-Mechanismen zu unterbinden. Dies gewährleistet bspw., dass Clickjacking-Angriffe größtenteils gemildert werden können. Darüber hinaus werden Downgrading-Angriffe wie etwa im Internet Explorer minimiert.\n</p>',
  'X_FRAME_OPTIONS_TIPS'       => '<p>Im HTTP-Header entsprechend den Bedürfnissen setzen. Die <b>X-Frame-Options</b> im <a href="https://siwecos.de/wiki/HTTP" title="HTTP">HTTP</a> Header kann verwendet werden, um zu bestimmen, ob ein aufrufender <a href="https://siwecos.de/wiki/Browser" title="Browser">Browser</a> die Zielseite in einem &lt;frame&gt;, &lt;iframe&gt; oder bspw. &lt;object&gt; rendern bzw. einbetten darf. Webseiten können diesen Header verwenden, um u. a. Clickjacking-Angriffe abzuwehren, indem sie unterbinden, dass ihr Content in fremden Seiten eingebettet wird.\n</p><p>Mit dem HTTP-Header Befehl X-Frame-Options können moderne Webbrowser angewiesen werden, eine Seite nicht in einem Frame auf einer andere Website zu laden. Dafür muss der folgende Befehl in der htaccess-Datei gesetzt werden:\n</p><p>Header always append X-Frame-Options DENY\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options DENY\n</pre>\n<p><b>—snap</b>\n</p><p>Alternativ kann erlaubt werden, dass die Seite nur auf anderen Seiten der gleichen Domain eingebunden werden dürfen:\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options SAMEORIGIN\n</pre>\n<p><b>—snap</b>\n</p><p>Falls eine Website doch extern eingebunden werden muss, kann eine Domain angegeben werden:\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options ALLOW-FROM botfrei.de\n</pre>\n<p><b>—snap</b>\n</p><p><br />\nHier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)\n</p>',
  'X_FRAME_OPTIONS_LINK'       => '<p>X-Frame-Options-Schwachstelle\n</p>',
  //
  // X_XSS_PROTECTION
  'X_XSS_PROTECTION'            => '<p>Überprüfung ob der Cross-Site Scripting Filter aktiviert und korrekt konfiguriert ist.\n</p>',
  'X_XSS_PROTECTION_SUCCESS'    => '<p>Der Cross-Site-Scripting (XSS) -Schutz des Webbrowsers ist auf Ihrer Seite aktiviert.\n</p>',
  'X_XSS_PROTECTION_ERROR'      => '<p>Cross-Site-Scripting Schutz nicht aktiviert oder unzureichend konfiguriert.\n</p>',
  'X_XSS_PROTECTION_ERROR_DESC' => '<p>Der HTTP-Header X-XSS-Protection definiert wie in Browser eingebaute XSS-Filter konfiguriert werden. Eine Default-Installation kann eine unzureichende Konfiguration offenbaren.\n</p>',
  'X_XSS_PROTECTION_TIPS'       => '<p>1; mode=block\n</p><p><b>Beispielcode einer .htaccess auf einem Apache Webserver.</b>\n</p>\n<b>--snip</b><br /><pre>\n   # Turn on XSS prevention tools, activated by default in IE and Chrome\n   \'\'\'Header set X-XSS-Protection „1; mode=block“\'\'\'\n</pre>\n<p><b>—snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)\n</p>',
  'X_XSS_PROTECTION_LINK'       => '<p>XSS-Schwachstelle\n</p>',
  //
  // Category: INI_S
  //
  // MALWARE_FOUND
  'MALWARE_FOUND'            => '<p>Ihre Domain ‘%site%’ wurde in folgenden Malware-Listen gefunden:&#160;%where%\n</p>',
  //
  // PHISHING_FOUND
  'PHISHING_FOUND'            => '<p>Ihre Domain ‘%site%’ wurde in folgenden Phising-Listen gefunden:&#160;%where%\n</p>',
  //
  // SPAM_FOUND
  'SPAM_FOUND'            => '<p>Ihre Domain ‘%site%’ wurde in folgenden Spam-Listen gefunden:&#160;%where%\n</p>',
  //
  // Category: Infoleak
  //
  // CMS_ONLY
  'CMS_ONLY'            => '<p>Das verwendete CMS&#160;%cms% wurde erkannt.\n</p>',
  //
  // CMS_VERSION
  'CMS_VERSION'            => '<p>Das verwendete CMS&#160;%cms% und dessen Version&#160;%version% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.\n</p>',
  //
  // CMS_VERSION_VULN
  'CMS_VERSION_VULN'            => '<p>Das verwendete CMS&#160;%cms% der Version&#160;%version% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.\n</p>',
  //
  // EMAIL_FOUND
  'EMAIL_FOUND'            => '<p>Die Email-Adresse&#160;%email_adress% wurde gefunden. Wollen Sie diese Email-Adresse wirklich veröffentlichen? Ein Angreifer kann dies für bspw. Phising-Angriffe nutzen.\n</p>',
  //
  // JS_LIB_ONLY
  'JS_LIB_ONLY'            => '<p>Die verwendete JavaScript-Bibliothek&#160;%js_lib_name% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt.\n</p>',
  //
  // JS_LIB_VERSION
  'JS_LIB_VERSION'            => '<p>Die verwendete JavaScript-Bibliothek&#160;%js_lib_name% mit der Version&#160;%js_lib_version% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.\n</p>',
  //
  // JS_LIB_VULN_VERSION
  'JS_LIB_VULN_VERSION'            => '<p>Die verwendete JavaScript-Bibliothek&#160;%js_lib_name% mit der Version&#160;%js_lib_version% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.\n</p>',
  //
  // NUMBER_FOUND
  'NUMBER_FOUND'            => '<p>Die Telefonnummer&#160;%number% wurde gefunden. Wollen Sie diese Telefonnummer wirklich veröffentlichen? Ein Angreifer kann diese bspw. für Phishing-Angriffe nutzen.\n</p>',
  //
  // PLUGIN_ONLY
  'PLUGIN_ONLY'            => '<p>Das verwendete CMS-Plugin&#160;%plugin% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt.\n</p>',
  //
  // PLUGIN_VERSION
  'PLUGIN_VERSION'            => '<p>Das verwendete CMS-Plugin&#160;%plugin% mit der Version&#160;%plugin_version% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.\n</p>',
  //
  // PLUGIN_VERSION_VULN
  'PLUGIN_VERSION_VULN'            => '<p>Das verwendete CMS-Plugin&#160;%plugin% der Version&#160;%plugin_version% in DOM-node&#160;%node% mit dem Inhalt&#160;%node_content% erkannt. Für diese Version ist eine Schwachstelle bekannt.\n</p>',
  //
  // Category: Information-Leakage-Scanner
  //
  // CMS
  'CMS'            => '<p>Überprüfung auf Erkennbarkeit des verwendeten CMS.\n</p>',
  'CMS_SUCCESS'    => '<p>Falls Sie ein CMS verwenden, kann dieses nicht automatisiert erkannt werden.\n</p>',
  'CMS_ERROR'      => '<p>Content Management System (CMS) erkennbar\n</p>',
  'CMS_ERROR_DESC' => '<p>Das verwendete <a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Content-Management-Systeme">Content Management System</a> kann identifiziert werden. Diese Information könnte von einem Angreifer genutzt werden, um gezielt nach Schwachstellen für dieses spezielle CMS zu suchen.\n</p>',
  'CMS_TIPS'       => '<p>Halten Sie installierte Webserver und das Content Management System immer auf dem aktuellsten Stand. Manche CMS-Systeme erlauben es Versionsinformationen zu verstecken. Nutzen sie dieses Feature falls verfügbar.\n</p>',
  'CMS_LINK'       => '<p>Content-Management-System-Gefunden\n</p>',
  //
  // CMS_PLUGINS
  'CMS_PLUGINS'            => '<p>Überprüfung auf unsichere CMS-Plugins\n</p>',
  'CMS_PLUGINS_SUCCESS'    => '<p>CMS-Plugins können nicht erkannt werden.\n</p>',
  'CMS_PLUGINS_ERROR'      => '<p>CMS Plugin erkannt\n</p>',
  'CMS_PLUGINS_ERROR_DESC' => '<p>Es wurde ein von ihrem CMS-System genutztes Plugin entdeckt. Ein Angreifer könnte diese Information nutzen, um gezielt nach Schwachstellen für ihre Website zu suchen.\n</p>',
  'CMS_PLUGINS_TIPS'       => '<p>Plugins sollten auf jene beschränkt werden, die tatsächlich benötigt werden. Damit kann die Angriffsfläche erheblich reduzieren werden. Zudem sollten installierte Plugins immer auf dem aktuellsten Stand gehalten werden.\n</p>',
  'CMS_PLUGINS_LINK'       => '<p>Plugin-Gefunden\n</p>',
  //
  // EMAIL_ADDRESS
  'EMAIL_ADDRESS'            => '<p>Überprüfung auf vorhandene Email-Adressen\n</p>',
  'EMAIL_ADDRESS_SUCCESS'    => '<p>Keine Email-Adressen gefunden.\n</p>',
  'EMAIL_ADDRESS_ERROR'      => '<p>Auslesbare Email-Adresse\n</p>',
  'EMAIL_ADDRESS_ERROR_DESC' => '<p>Ihre Webseite enthält mindestens eine maschinell auslesbare Email-Adresse. Dieses ermöglicht es Dritten, die hinterlegten Email-Adressen automatisiert durch WebCrawler (auch Spider, Searchbot oder Robot) zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufügen.\n</p>',
  'EMAIL_ADDRESS_TIPS'       => '<p>Hinterlegen Sie Ihre Kontaktadressen, bspw. im Impressum wie folgt: mail at siwecos.de / mail @ siwecos.de oder hinterlegen Sie die Information in einer Grafik-Datei.\n</p>',
  'EMAIL_ADDRESS_LINK'       => '<p>Email-Adresse-Gefunden\n</p>',
  //
  // JS_LIB
  'JS_LIB'            => '<p>Überprüfung auf unsichere JavaScript-Bibliotheken\n</p>',
  'JS_LIB_SUCCESS'    => '<p>Die JavaScript-Bibliotheken sind nach dem aktuellen Stand voraussichtlich nicht durch bekannte Schwachstellen angreifbar.\n</p>',
  'JS_LIB_ERROR'      => '<p>Unsichere JavaScript-Bibliothek gefunden.\n</p>',
  'JS_LIB_ERROR_DESC' => '<p>Es wurde eine von Ihnen verwendete JavaScript-Bibliothek gefunden. Ein Angreifer könnte diese Information nutzen, um gezielt nach Schwachstellen für Ihre Website zu suchen.\n</p>',
  'JS_LIB_TIPS'       => '<p>Updaten Sie Ihre verwendeten Javascript Bibliotheken.\n</p>',
  'JS_LIB_LINK'       => '<p>Javascript-Schwachstelle\n</p>',
  //
  // PHONE_NUMBER
  'PHONE_NUMBER'            => '<p>Überprüfung auf auslesbare Telefonnummern\n</p>',
  'PHONE_NUMBER_SUCCESS'    => '<p>Telefonnummern wurden nicht gefunden.\n</p>',
  'PHONE_NUMBER_ERROR'      => '<p>Telefonnummer gefunden.\n</p>',
  'PHONE_NUMBER_ERROR_DESC' => '<p>Es wurde eine Telefonnummer gefunden. Ein Angreifer könnte diese Information nutzen, um Mitarbeiter zu manipulieren und an Informationen gelangen die Geheim bleiben sollten.\n</p>',
  'PHONE_NUMBER_TIPS'       => '<p>Die veröffentlichten Telefonnummern sollten auf jene beschränkt werden, die auch tatsächlich für die Kommunikation mit Kunden gedacht sind. Außerdem sollte der telefonierende Mitarbeiter sich der Gefahr von Social Engineering Angriffen bewusst sein und die Vorgehensweise von Social Engineers kennen.\n</p>',
  'PHONE_NUMBER_LINK'       => '<p>Telefonnummer-Gefunden\n</p>',
  //
  // Category: Initiative-S Scanner
  //
  // MALWARE
  'MALWARE'            => '<p>Überprüfung auf mögliche Malware\n</p>',
  'MALWARE_SUCCESS'    => '<p>Ihre Domain wurde in keiner uns bekannten Malware Liste gefunden.\n</p>',
  'MALWARE_ERROR'      => '<p>Ihre Domain wurde in Malware Listen gefunden\n</p>',
  'MALWARE_ERROR_DESC' => '<p>Malware bezeichnet Software, die dem Benutzer und natürlich in erster Linie dem Computer Schaden zufügen kann. Malware bezeichnet dabei alle Arten von schadhaften Programmen wie etwa Viren, Trojaner, Spyware, Dialer, Dropper, Rootkits und Keylogger.\n</p>',
  'MALWARE_TIPS'       => '<p><b><span style="color:#c31622"> Nehmen Sie die Webseite offline!<span></b>\n</p><p>Bei einem Aufruf der Seite besteht die Gefahr, dass Sie den aufrufenden PC mit Schadsoftware infizieren. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. Sie kommen auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n</p><p><b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />\n</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />\n<b>- Webfrontend (Hosting-Vertrag, Content-Management-System)</b><br />\n<b>- FTP-, SSH-Zugänge</b><br />\n<b>- Datenbank-Passwörter</b><br />\n</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />\n</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target="_self" rel="nofollow" class="external text" href="https://www.botfrei.de">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target="_self" rel="nofollow" class="external free" href="https://www.botfrei.de/de/eucleaner/index.html">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>\n</span>\n</p>',
  'MALWARE_LINK'       => '<p>Malware-Inhalte\n</p>',
  //
  // PHISHING
  'PHISHING'            => '<p>Überprüfung auf mögliche Phishing-Inhalte\n</p>',
  'PHISHING_SUCCESS'    => '<p>Ihre Domain wurde in keiner uns bekannten Phising Liste gefunden.\n</p>',
  'PHISHING_ERROR'      => '<p>Ihre Domain wurde in Phising Listen gefunden\n</p>',
  'PHISHING_ERROR_DESC' => '<p>Beim Phishing wird in der Regel trickreich versucht, sensible persönliche Daten wie Passwörter, Kreditkartennummern und persönliche Daten des Besuchers der Seite zu entwenden. Dabei versenden Kriminelle üblicherweise Spam-E-Mails. Diese E-Mails enthalten u.a. Links zu einer Phishing-Seite, die sich als legitime Webseite ausgibt.\n</p>',
  'PHISHING_TIPS'       => '<p><b><span style="color:#c31622"> Nehmen Sie die Webseite offline!<span></b>\n</p><p>Es ist weiterhin möglich, dass Sie mit der Webseite Phishing-Inhalte zu Verfügung stellen und Kriminelle persönliche Daten darüber sammeln. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n</p><p><b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />\n</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />\n<b>- Webfrontend (Hosting-Vertrag, Content-Management-System)</b><br />\n<b>- FTP-, SSH-Zugänge</b><br />\n<b>- Datenbank-Passwörter</b><br />\n</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />\n</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target="_self" rel="nofollow" class="external text" href="https://www.botfrei.de">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target="_self" rel="nofollow" class="external free" href="https://www.botfrei.de/de/eucleaner/index.html">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>\n</span>\n</p>',
  'PHISHING_LINK'       => '<p>Phishing-Inhalte\n</p>',
  //
  // SPAM
  'SPAM'            => '<p>Überprüfung auf mögliche Spam-Inhalte\n</p>',
  'SPAM_SUCCESS'    => '<p>Ihre Domain wurde in keiner uns bekannten Spam Liste gefunden.\n</p>',
  'SPAM_ERROR'      => '<p>Ihre Domain wurde in Spam Listen gefunden\n</p>',
  'SPAM_ERROR_DESC' => '<p>Als Spam bezeichnet man ungewollte und zum Teil unseriöse Werbung im E-Mail Postfach (z.B. Viagra-Werbung, Medikamente, Versicherung und Kreditvergleiche). Diese Werbungen werden massenhaft verschickt bzw. können aber auch zielgerichtet verschickt werden. In der Regel verschleiern die Absender ihre wahre Identität in der E-Mail und versuchen Sie zu täuschen.\n</p>',
  'SPAM_TIPS'       => '<p><b><span style="color:#c31622"> Nehmen Sie die Webseite offline!<span></b>\n</p><p>Um den Besuch Ihrer infizierten Webseite zu vermeiden bzw. damit Google Ihre Webseite nicht aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde, schalten Sie die Webseite offline. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n</p><p>Um zu prüfen ob die Seite über diverse Spam-Merkmale verfügt, rufen Sie die Seite im Browser auf, klicken über die rechte Maustaste den "Quelltext anzeigen". In diesem Fenster können Sie Ihren Quellcode mit Drücken der Tasten <b>Strg+f</b> (suchen) auf gängige Online-Betrügereien durch Werbung für Medikamente oder dubiose Kreditgeschäft überprüfen.\n</p><p><b>Einige Suchvorschläge</b>:<br />\n- „payday“<br />\n- „Pharma“<br />\n- „Viagra“<br />\n- „Cialis“<br /><br />\n<b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />\n</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />\n<b>- Webfrontend (Hosting-Vertrag, Content-Management-System)</b><br />\n<b>- FTP-, SSH-Zugänge</b><br />\n<b>- Datenbank-Passwörter</b><br />\n</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />\n</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target="_self" rel="nofollow" class="external text" href="https://www.botfrei.de">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target="_self" rel="nofollow" class="external free" href="https://www.botfrei.de/de/eucleaner/index.html">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>\n</span>\n</p>',
  'SPAM_LINK'       => '<p>Spam-Inhalte\n</p>',
  //
  // Category: Protokollversionen
  //
  // PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2'            => '<p>Überprüfung auf veraltetes SSL2 Protokoll\n</p>',
  'PROTOCOLVERSION_SSL2_SUCCESS'    => '<p>Veraltete Protokollversion SSL2 nicht unterstützt\n</p>',
  'PROTOCOLVERSION_SSL2_ERROR'      => '<p>Veraltete Protokollversion SSL2 unterstützt\n</p>',
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => '<p>Der Server unterstützt die veraltete Protokollversion SSL2, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.\n</p>',
  'PROTOCOLVERSION_SSL2_TIPS'       => '<p><a href="https://siwecos.de/wiki/Transport_Layer_Security" title="Transport Layer Security">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a href="https://siwecos.de/wiki/SSL" title="SSL">SSL2</a> verzichten. Weitere Informationen finden Sie hier: <a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/SSL">SSL</a>\n</p>',
  'PROTOCOLVERSION_SSL2_LINK'       => '<p>Veraltete-Protokollversion-SSL2\n</p>',
  //
  // PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3'            => '<p>Überprüfung auf veraltetes SSL3 Protokoll\n</p>',
  'PROTOCOLVERSION_SSL3_SUCCESS'    => '<p>Veraltete Protokollversion SSL3 nicht unterstützt\n</p>',
  'PROTOCOLVERSION_SSL3_ERROR'      => '<p>Veraltete Protokollversion SSL3 unterstützt\n</p>',
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => '<p>Der Server unterstützt die veraltete Protokollversion SSL3, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.\n</p>',
  'PROTOCOLVERSION_SSL3_TIPS'       => '<p><a href="https://siwecos.de/wiki/Transport_Layer_Security" title="Transport Layer Security">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a href="https://siwecos.de/wiki/SSL" title="SSL">SSL3</a> verzichten. Weitere Informationen finden Sie hier: <a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/SSL">SSL</a>\n</p>',
  'PROTOCOLVERSION_SSL3_LINK'       => '<p>Veraltete-Protokollversion-SSL3\n</p>',
  //
  // PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13'            => '<p>Überprüfung auf Einsatz  des TLS1.3 Protokoll\n</p>',
  'PROTOCOLVERSION_TLS13_SUCCESS'    => '<p>TLS 1.3 nicht unterstützt\n</p>',
  'PROTOCOLVERSION_TLS13_ERROR'      => '<p>Moderne TLS 1.3 unterstützt\n</p>',
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => '<p>Der Server unterstützt die neueste TLS Protokollversion. Diese befindet sich noch im Standartisierungsprozess. Sollten sie nicht wissen was dies bedeutet, können sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützten und TLS 1.3 sich noch in der Entwicklung befindet.\n</p>',
  'PROTOCOLVERSION_TLS13_TIPS'       => '<p>Es besteht kein Handlungsbedarf.\n</p>',
  'PROTOCOLVERSION_TLS13_LINK'       => '<p>Protokollversion-TLS13-Gefunden\n</p>',
  //
  // Category: Scanner
  //
  // SCANNER_NAME_DOMXSS
  'SCANNER_NAME_DOMXSS'            => '<p>DOMXSS Scanner\n</p>',
  //
  // SCANNER_NAME_HEADER
  'SCANNER_NAME_HEADER'            => '<p>Header Scanner\n</p>',
  //
  // SCANNER_NAME_INFOLEAK
  'SCANNER_NAME_INFOLEAK'            => '<p>Info Leak Scanner\n</p>',
  //
  // SCANNER_NAME_INI_S
  'SCANNER_NAME_INI_S'            => '<p>Initiative-S Scanner\n</p>',
  //
  // SCANNER_NAME_WS_TLS
  'SCANNER_NAME_WS_TLS'            => '<p>TLS Scanner\n</p>',
  //
  // Category: Verschlüsselungsmethode
  //
  // CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED'            => '<p>Überprüfung der Client-Verschlüsselungsmethodik\n</p>',
  'CIPHERSUITEORDER_ENFORCED_SUCCESS'    => '<p>Verantwortungsvolle Auswahl der Verschlüsselungsmethoden\n</p>',
  'CIPHERSUITEORDER_ENFORCED_ERROR'      => '<p>Verantwortungslose Auswahl der Verschlüsselungsmethoden\n</p>',
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => '<p>Ihr Webserver / Ihre Webseite ist so konfiguriert, dass die Verschlüsselungsmethodik des Webseiten-Besuchers bevorzugt wird, statt die Ihres Webservers. Server sollten die Auswahl der Verschlüsselungsmethoden nicht ihren Kunden überlassen, sondern aktiv starke Verbindungen auswählen.\n</p>',
  'CIPHERSUITEORDER_ENFORCED_TIPS'       => '<p>Konfigurieren Sie Ihren Webservern so, dass der Webserver die Verschlüsselungsmethodik bei der Kommunikation zwischen Ihrer Webseite und dem Webbrowser des Besuchers bestimmt.\n</p>',
  'CIPHERSUITEORDER_ENFORCED_LINK'       => '<p>Verschluesselungsmethode-Client\n</p>',
  //
  // CIPHERSUITE_ANON
  'CIPHERSUITE_ANON'            => '<p>Überprüfung auf anonyme Verschlüsselungsmethodik.\n</p>',
  'CIPHERSUITE_ANON_SUCCESS'    => '<p>Kein Anonymer Schlüsselaustausch unterstützt\n</p>',
  'CIPHERSUITE_ANON_ERROR'      => '<p>Anonymer Schlüsselaustausch unterstützt\n</p>',
  'CIPHERSUITE_ANON_ERROR_DESC' => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass eine unsichere Verschlüsselungsmethode (<a href="https://siwecos.de/wiki/Cipher_Suite" title="Cipher Suite">Cipher Suite</a>) ohne Rechtekontrolle bei der Verbindung erfolgt. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle" title="Man-in-the-middle">Man-in-the-Middle Attacken</a>.\n</p>',
  'CIPHERSUITE_ANON_TIPS'       => '<p>Deaktivieren Sie die Unterstützung des "Anonymen Schlüsselaustauschs" in der  Verschlüsselungsmethodik. In Konsequenz auf die bekannt gewordenen TLS Schwachstellen ist die wichtigste Regel, wann immer es geht, TLS 1.2 zu nutzen. SSL 3.0 sollte in Browser deaktiviert werden.\n</p>',
  'CIPHERSUITE_ANON_LINK'       => '<p>Schluesselaustauschverfahren\n</p>',
  //
  // CIPHERSUITE_DES
  'CIPHERSUITE_DES'            => '<p>Überprüfung auf DES Verschlüsselungsmethodik\n</p>',
  'CIPHERSUITE_DES_SUCCESS'    => '<p>Keine veraltete DES Verschlüsselungsmethodik unterstützt\n</p>',
  'CIPHERSUITE_DES_ERROR'      => '<p>Veraltete DES Verschlüsselungsmethodik unterstützt\n</p>',
  'CIPHERSUITE_DES_ERROR_DESC' => '<p>Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.\n</p>',
  'CIPHERSUITE_DES_TIPS'       => '<p>Deaktivieren Sie die Unterstützung der DES Verschlüsselungsmethodik in Ihrer Webserver-Software.\n</p>',
  'CIPHERSUITE_DES_LINK'       => '<p>Schwaches-DES-Verschluesselungsprotokoll\n</p>',
  //
  // CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT'            => '<p>Überprüfung auf schwache Verschlüsselungs-Funktionen\n</p>',
  'CIPHERSUITE_EXPORT_SUCCESS'    => '<p>Keine schwache EXPORT Verschlüsselung unterstützt\n</p>',
  'CIPHERSUITE_EXPORT_ERROR'      => '<p>Schwache Export Verschlüsselung unterstützt\n</p>',
  'CIPHERSUITE_EXPORT_ERROR_DESC' => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass sich vorsätzlich unsichere Verschlüsselungsmethoden (<a href="https://siwecos.de/wiki/Cipher_Suite" title="Cipher Suite">Cipher Suites</a>) nutzen lassen. Dies ermöglicht <a href="/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1" class="new" title="Man-in-the-Middle (Seite nicht vorhanden)">Man-in-the-Middle Attacken</a>.\n</p>',
  'CIPHERSUITE_EXPORT_TIPS'       => '<p>Deaktivieren Sie die Unterstützung von EXPORT Verschlüsselungsmethoden im Webserver.\n</p>',
  'CIPHERSUITE_EXPORT_LINK'       => '<p>Geschwaechtes-Verschluesselungsprotokoll\n</p>',
  //
  // CIPHERSUITE_NULL
  'CIPHERSUITE_NULL'            => '<p>Überprüfung auf NULL-Chiffren\n</p>',
  'CIPHERSUITE_NULL_SUCCESS'    => '<p>Keine unsicheren Null Chiffren unterstützt\n</p>',
  'CIPHERSUITE_NULL_ERROR'      => '<p>Unsichere NULL Chiffren unterstützt\n</p>',
  'CIPHERSUITE_NULL_ERROR_DESC' => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass zugelassen wird das unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle" title="Man-in-the-middle">Man-in-the-Middle Attacken</a>.\n</p>',
  'CIPHERSUITE_NULL_TIPS'       => '<p>Deaktivieren Sie die Unterstützung von NULL Verschlüsselungsmethoden.\n</p>',
  'CIPHERSUITE_NULL_LINK'       => '<p>Unverschluesselte-Kommunikation\n</p>',
  //
  // CIPHERSUITE_RC4
  'CIPHERSUITE_RC4'            => '<p>Überprüfung auf RC4 Verschlüsselungsmethodik\n</p>',
  'CIPHERSUITE_RC4_SUCCESS'    => '<p>Keine veraltete RC4 Verschlüsselungsmethodik unterstützt\n</p>',
  'CIPHERSUITE_RC4_ERROR'      => '<p>Veraltete RC4 Verschlüsselungsmethodik\nunterstützt\n</p>',
  'CIPHERSUITE_RC4_ERROR_DESC' => '<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 (<a href="/wiki/index.php?title=Ciper_Suite&amp;action=edit&amp;redlink=1" class="new" title="Ciper Suite (Seite nicht vorhanden)">Cipher Suites</a>) weiterhin unterstützt. Dies ermöglicht <a href="/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1" class="new" title="Man-in-the-Middle (Seite nicht vorhanden)">Man-in-the-Middle Attacken</a>.\n</p>',
  'CIPHERSUITE_RC4_TIPS'       => '<p>Deaktivieren Sie die Unterstützung der RC4 Verschlüsselungsmethodik.\n</p>',
  'CIPHERSUITE_RC4_LINK'       => '<p>Unsichere-Verschluesselungsfunktion-RC4\n</p>',
  //
  // Category: WS_TLS
  //
  // ANON_SUITES
  'ANON_SUITES'            => '<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass eine anonyme Verschlüsselungsmethodik (<a href="https://siwecos.de/wiki/Cipher_Suite" title="Cipher Suite">Cipher Suite</a>) ohne Authentikation bei der Verbindung erfolgt. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle" title="Man-in-the-middle">Man-in-the-Middle Attacken</a>.\n</p>',
  //
  // DES_SUITES
  'DES_SUITES'            => '<p>Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES  (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.\n</p>',
  //
  // EXPIRED
  'EXPIRED'            => '<p>Ihr Zertifikat ist am&#160;%DATE% abgelaufen. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt.\n</p>',
  //
  // EXPORT_SUITES
  'EXPORT_SUITES'            => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass sich vorsätzlich geschwächte kryptographische Funktionen (<a href="https://siwecos.de/wiki/Cipher_Suite" title="Cipher Suite">Cipher Suites</a>) nutzen lassen. Dies ermöglicht <a href="/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1" class="new" title="Man-in-the-Middle (Seite nicht vorhanden)">Man-in-the-Middle Attacken</a>.\n</p>',
  //
  // HASH_ALGO
  'HASH_ALGO'            => '<p>Ihr Server-Zertifikat nutzt den schwachen Hash-Algorithmus&#160;%HASH%. Das Zertifikat kann so sehr einfach gefälscht werden. Ein Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen Hash-Algorithmus jedoch nicht.\n</p>',
  //
  // HTTPS_RESPONSE
  'HTTPS_RESPONSE'            => '<p>Der Server “%HOST%“ scheint überhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?\n</p>',
  //
  // HTTPS_SUPPORTED
  'HTTPS_SUPPORTED'            => '<p>Der Server “%HOST%“ scheint kein TLS zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten von ihnen und die ihrer Kunden zu schützen.\n</p>',
  //
  // NOT_YET_VALID
  'NOT_YET_VALID'            => '<p>Ihr Zertifikat wird erst am&#160;%DATE% gültig. Ihre Webseite wird Besuchern bis dahin als unsicher bzw. nicht vertrauenswürdig angezeigt.\n</p>',
  //
  // NULL_SUITES
  'NULL_SUITES'            => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass zugelassen wird das unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle" title="Man-in-the-middle">Man-in-the-Middle Attacken</a>.\n</p>',
  //
  // RC4_SUITES
  'RC4_SUITES'            => '<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 (<a href="/wiki/index.php?title=Ciper_Suite&amp;action=edit&amp;redlink=1" class="new" title="Ciper Suite (Seite nicht vorhanden)">Cipher Suites</a>) weiterhin unterstützt. Dies ermöglicht <a href="/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1" class="new" title="Man-in-the-Middle (Seite nicht vorhanden)">Man-in-the-Middle Attacken</a>.\n</p>',
  //
  // Category: XSS-Scanner
  //
  // HAS_SINKS
  'HAS_SINKS'            => '<p>Überprüfung des JavaScript-Codes nach DOMXSS-Sinks\n</p>',
  'HAS_SINKS_SUCCESS'    => '<p>Automatisiert wurden keine unsicheren Codebestandteile für DOMXSS-Sinks erkannt.\n</p>',
  'HAS_SINKS_ERROR'      => '<p>Unsicheren JavaScript-Code verwendet (Sinks)\n</p>',
  'HAS_SINKS_ERROR_DESC' => '<p>Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der unter bestimmten Voraussetzungen auf eine DOM-basierende Cross-Site Scripting Anfälligkeit hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen.\n</p>',
  'HAS_SINKS_TIPS'       => '<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.\n</p>',
  'HAS_SINKS_LINK'       => '<p>DOMXSS-Schwachstelle\n</p>',
  //
  // HAS_SOURCES
  'HAS_SOURCES'            => '<p>Überprüfung des JavaScript-Codes nach DOMXSS-Sources\n</p>',
  'HAS_SOURCES_SUCCESS'    => '<p>Automatisiert wurden keine unsicheren Codebestandteile für DOMXSS-Sources erkannt.\n</p>',
  'HAS_SOURCES_ERROR'      => '<p>Unsicheren JavaScript-Code verwendet (Sources)\n</p>',
  'HAS_SOURCES_ERROR_DESC' => '<p>Bei der Überprüfung wurde mindestens eine Schwachstelle auf der Webseite gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte.\n</p>',
  'HAS_SOURCES_TIPS'       => '<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.\n</p>',
  'HAS_SOURCES_LINK'       => '<p>Schadcode-Ueber-Fremde-Quellen\n</p>',
  //
  // Category: Zertifikate
  //
  // CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED'            => '<p>Überprüfung der Zertifikat Laufzeit\n</p>',
  'CERTIFICATE_EXPIRED_SUCCESS'    => '<p>Zertifikat nicht abgelaufen\n</p>',
  'CERTIFICATE_EXPIRED_ERROR'      => '<p>Zertifikat abgelaufen\n</p>',
  'CERTIFICATE_EXPIRED_ERROR_DESC' => '<p>Die Meldung bedeutet, dass Ihr <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Server-Zertifikatt</a> abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über <a href="https://siwecos.de/wiki/HTTPS" title="HTTPS">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt, z.B. "Ihr Zertifikat ist am Datum abgelaufen". Die Seite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt.\n</p>',
  'CERTIFICATE_EXPIRED_TIPS'       => '<p>Dieses Problem lässt sich lösen, indem Sie das eingesetzte <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikat</a> erneuern. Wie Sie Zertifikate verlängern können, lesen Sie hier: <a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Zertifikate#Was_tun.2C_wenn_ein_SSL-Zertifikat_abgelaufen_ist.3F">Zertifikat abgelaufen</a>\n</p>',
  'CERTIFICATE_EXPIRED_LINK'       => '<p>Zertifikat-Abgelaufen\n</p>',
  //
  // CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER'            => '<p>Überprüfung der Zertifikatsübermittlung\n</p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => '<p>Server sendet ein Zertifikat\n</p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => '<p>Server sendet kein Zertifikat\n</p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => '<p>Der Server hat kein <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikat</a> gesendet. Dies ist ungewöhnlich und sollte eigentlich nicht vorkommen. Der Server sollte seine <a href="https://siwecos.de/wiki/Transport_Layer_Security" title="Transport Layer Security">TLS-Konfiguration</a> überprüfen und ggfs. <a href="https://siwecos.de/wiki/CIPHERSUITE_ANON" title="CIPHERSUITE ANON">anonyme Ciphersuites</a> ausschalten.\n</p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_TIPS'       => '<p>Aktualisieren Sie dringend die von Ihnen eingesetzte <a href="https://siwecos.de/wiki/Transport_Layer_Security" title="Transport Layer Security">TLS-Implementierung</a>. Moderne Software erlaubt diese Art der Konfiguration nicht mehr.\n</p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_LINK'       => '<p>Zertifikat-Nicht-Gesendet\n</p>',
  //
  // CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET'            => '<p>Überprüfung der Zertifikat Gültigkeit\n</p>',
  'CERTIFICATE_NOT_VALID_YET_SUCCESS'    => '<p>Zertifikat ist schon gültig\n</p>',
  'CERTIFICATE_NOT_VALID_YET_ERROR'      => '<p>Zertifikat noch nicht gültig\n</p>',
  'CERTIFICATE_NOT_VALID_YET_ERROR_DESC' => '<p>Die Meldung bedeutet, dass Ihr <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Server-Zertifikat</a> noch nicht gültig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt. Sollte ein Nutzer Ihre Webseite über <a href="https://siwecos.de/wiki/HTTPS" title="HTTPS">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.\n</p>',
  'CERTIFICATE_NOT_VALID_YET_TIPS'       => '<p>Deaktivieren Sie das <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikat</a> solange es <b>noch nicht</b> gültig ist. Ihre Webseite ist dann zwar nicht zertifiziert, jedoch erhalten Besucher zumindest keine Warnmeldung beim Aufruf Ihrer Webseite. Alternativ bietet sich die Möglichkeit an, Ihr altes <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikat</a> einzusetzen, so lange dies noch gültig ist. Wie Sie <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikate</a> verlängern können, lesen Sie hier: <a href="https://siwecos.de/wiki/CERTIFICATE_EXPIRED" title="CERTIFICATE EXPIRED">Zertifikat abgelaufen</a>.\n</p>',
  'CERTIFICATE_NOT_VALID_YET_LINK'       => '<p>Zertifikat-Nicht-Gueltig\n</p>',
  //
  // CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION'            => '<p>Überprüfung der Verschlüsselungsstärke des Zertifikats.\n</p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => '<p>Starker Hash-Algorithmus\n</p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => '<p>Schwacher Hash-Algorithmus\n</p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => '<p>Die Meldung bedeutet, dass Ihr Server-Zertifikat einen schwachen Hash-Algorithmus (Verschlüsselung) besitzt. Es stellt möglicherweise ein leichtes Ziel für Hacker-Angriffe dar.\n</p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_TIPS'       => '<p>Um dieses Problem zu lösen sollten sie ein neues Zertifikat mit einer sicheren Hash-Funktion (starke Verschlüsselung) installieren. Wie Sie ein sicheres Zertifikat bekommen, lesen Sie hier: <a href="https://siwecos.de/wiki/Zertifikate#Wie_wird_ein_SSL-Zertifikat_installiert.3F" title="Zertifikate">Zertifikat installieren</a>.\n</p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_LINK'       => '<p>Schwache-Verschluesselung\n</p>',
  //
  // CERTIFICATE_WEAK_SIGN_ALGO
  'CERTIFICATE_WEAK_SIGN_ALGO'            => '<p>Überprüfung der Zertifikat Verschlüsselung\n</p>',
  //
  // CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS
  'CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS'            => '<p>Überprüfung der Zertifikat Verschlüsselung\n</p>',

];
