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
  // Category: Angriffe
  //
  // BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE'            => 'Überprüfung auf Bleichenbacher Schwachstelle',
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR'      => 'Verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Bleichenbacher Angriff(ROBOT). Hierbei kann die Kommunikation entschlüsselt und bei der Übertragung die Nutzereingaben wie Passwörter im Klartext gelesen werden.',
  'BLEICHENBACHER_VULNERABLE_TIPS'       => 'Überprüfen Sie Ihr Zertifikat bzw. spielen sie umgehend ein Update für ihre TLS-Verschlüsselung auf ihren Server ein.',
  'BLEICHENBACHER_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/Bleichenbacher-Schwachstelle/DE',
  //
  // CRIME_VULNERABLE
  'CRIME_VULNERABLE'            => 'Überprüfung auf die CRIME Schwachstelle',
  'CRIME_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR'      => 'Verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch CRIME. Ein Angriff welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'CRIME_VULNERABLE_TIPS'       => 'CRIME kann besiegt werden, indem die Verwendung von Komprimierung verhindert wird. Entweder auf der Client-Seite, indem der Browser die Komprimierung von SPDY-Anfragen deaktiviert, oder indem die Website die Verwendung von Datenkompression bei solchen Transaktionen unter Verwendung der Protokollaushandlungsmerkmale des TLS-Protokolls verhindert.',
  'CRIME_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/Crime-Schwachstelle/DE',
  //
  // HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE'            => 'Überprüfung auf die Heartbleed Schwachstelle.',
  'HEARTBLEED_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR'      => 'Verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch Heartbleed. Dadurch kann ein Angreifer sensible Daten aus dem Arbeitsspeicher des Servers auslesen, wie z.B. geheime Schlüssel und Kundendaten.',
  'HEARTBLEED_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Verschlüsselung auf ihren Server ein.',
  'HEARTBLEED_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE',
  //
  // INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE'            => 'Überprüfung auf die Ephemeral Invalid Curve Schwachstelle.',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => 'Verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Ephemeral Invalid Curve Angriff. Dadurch kann ein Angreifer die Verbindungen angreifen.',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE',
  //
  // INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE'            => 'Überprüfung auf die Invalid Curve Schwachstelle',
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR'      => 'Verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Invalid Curve Angriff. Dadurch kann ein Angreifer den geheimen Schlüssel ihres Zertifikats stehlen.',
  'INVALID_CURVE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  'INVALID_CURVE_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/Invalid-Curve-Schwachstelle/DE',
  //
  // PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE'            => 'Überprüfung auf die Padding-Oracle Schwachstelle',
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR'      => 'Verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Padding-Oracle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'PADDING_ORACLE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  'PADDING_ORACLE_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/PADDING-ORACLE-Schwachstelle/DE',
  //
  // POODLE_VULNERABLE
  'POODLE_VULNERABLE'            => 'Überprüfung auf die POODLE Schwachstelle',
  'POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Poodle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'POODLE_VULNERABLE_TIPS'       => 'Deaktivieren Sie umgehend das veraltete Verschlüsselungsprotokoll SSL3 auf ihrem Server!',
  'POODLE_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/TLS-POODLE-Schwachstelle/DE',
  //
  // SWEET32_VULNERABLE
  'SWEET32_VULNERABLE'            => 'Überprüfung auf SWEET32 Schwachstelle',
  'SWEET32_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR'      => 'Verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch SWEET32, welcher es einem Angreifer erlaubt teile der Kommunikation zu entschlüsseln falls über eine Verbindung große Mengen Daten transferiert werden.',
  'SWEET32_VULNERABLE_TIPS'       => 'Deaktivieren Sie [https://www.itwissen.info/Blockchiffre-block-cipher.html Blockchiffren] mit einer Länge von 64 Bit. Vergewissern Sie sich, das Protokolle wie SSLv2 und SSLv3 deaktiviert sind.',
  'SWEET32_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/Sweet32-Schwachstelle/DE',
  //
  // TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE'            => 'Überprüfung auf die TLS-POODLE Schwachstelle',
  'TLS_POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch eine Variante des Poodle Angriffs auf TLS, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'TLS_POODLE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein. In der Apache-Konfiguration etwa kann man etwa die Zeile "SSLProtocol All -SSLv2 -SSLv3 " angeben.',
  'TLS_POODLE_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/Tls-Poodle-Schwachstelle/DE',
  //
  // Category: Fehler
  //
  // SCANNER_TIMEOUT
  'SCANNER_TIMEOUT'            => 'Der Scanner "%scanner%" wurde nach %timeoutvalue% Sekunden beendet, weil er kein Ergebnis geliefert hat.',
  //
  // TIMEOUT
  'TIMEOUT'            => 'Zeitüberschreitung',
  'TIMEOUT_ERROR'      => 'Der Scan hat kein Ergebnis geliefert und wurde deswegen abgebrochen.',
  'TIMEOUT_ERROR_DESC' => '<p>Eine Zeitüberschreitung bedeutet, dass der Scan ihrer Domain länger dauerte als ein Scan üblicherweise dauert.</p><p>Ursachen hierfür können unter anderem sein:</p><p>Ihr Server ist momentan nicht erreichbar oder überlastet</p>Unser Scanner Server ist momentan überlastet',
  //
  // Category: Fehlermeldung
  //
  // DONT_LEAK_USER_CREDS
  'DONT_LEAK_USER_CREDS'            => 'Sie sollten ihre Zugangsdaten (Name und Passwort) nicht übermitteln.',
  //
  // HEADER_NOT_SET
  'HEADER_NOT_SET'            => 'Der Header ist nicht gesetzt.',
  //
  // HEADER_SET_MULTIPLE_TIMES
  'HEADER_SET_MULTIPLE_TIMES'            => 'Der Header wurde mehrmals gesetzt.',
  //
  // JSON_DECODE_ERROR
  'JSON_DECODE_ERROR'            => 'Es gibt hier einen Jason Übersetzungsfehler.',
  //
  // LOCALHOST_SCAN_NOT_ALLOWED
  'LOCALHOST_SCAN_NOT_ALLOWED'            => 'Die lokale Überprüfung ist nicht erlaubt.',
  //
  // MAX_AGE_ERROR
  'MAX_AGE_ERROR'            => 'Es trat ein Fehler beim Überprüfen der `max-age`-Angabe auf.',
  //
  // NOT_REACHABLE
  'NOT_REACHABLE'            => 'Nicht erreichbar.',
  //
  // NO_HTTP_RESPONSE
  'NO_HTTP_RESPONSE'            => 'Die angegebene URL lieferte keine Antwort.',
  //
  // NO_SOURCE_CODE
  'NO_SOURCE_CODE'            => 'Keine Quelle gefunden.',
  //
  // NO_VALID_URL
  'NO_VALID_URL'            => 'Die Internetadresse (URL) ist nicht gültig.',
  //
  // PORT_DISALLOWED
  'PORT_DISALLOWED'            => 'Dieser Port ist nicht erlaubt.',
  //
  // REDIRECT_ERROR
  'REDIRECT_ERROR'            => 'Es gibt einen Umleitungsfehler.',
  //
  // SCORE_info
  'SCORE_info'            => 'Info',
  //
  // Category: Generell
  //
  // HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED'            => 'Überprüfung der Reaktionszeit des HTTP Headers',
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => 'Server spricht TLS',
  'HTTPS_NOT_SUPPORTED_ERROR'      => 'Server scheint kein TLS zu sprechen',
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => 'Der Server scheint kein TLS (Transportschichtsicherheit) zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten und die ihrer Kunden zu schützen.',
  'HTTPS_NOT_SUPPORTED_TIPS'       => 'Aktivieren sie TLS (Transportschichtsicherheit)',
  'HTTPS_NOT_SUPPORTED_LINK'       => 'https://siwecos.de/wiki/Keine-TLS-Unterstuetzung/DE',
  //
  // HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE'            => 'Überprüfung der Reaktionszeit des HTTPS Headers',
  'HTTPS_NO_RESPONSE_SUCCESS'    => 'Server antwortet',
  'HTTPS_NO_RESPONSE_ERROR'      => 'Server antwortet nicht',
  'HTTPS_NO_RESPONSE_ERROR_DESC' => 'Der Server scheint nicht zu antworten. Haben sie die Domain richtig eingegeben?',
  'HTTPS_NO_RESPONSE_TIPS'       => 'Bitte überprüfen Sie Ihre Eingabe auf Eingabefehler.',
  'HTTPS_NO_RESPONSE_LINK'       => 'https://siwecos.de/wiki/Reaktionszeit-Ueberschritten/DE',
  //
  // SCORE_bonus
  'SCORE_bonus'            => 'Bonus',
  //
  // SCORE_critical
  'SCORE_critical'            => 'Critical',
  //
  // SCORE_hidden
  'SCORE_hidden'            => 'Versteckt',
  //
  // SCORE_success
  'SCORE_success'            => 'Erfolgreich',
  //
  // SCORE_warning
  'SCORE_warning'            => 'Warnung',
  //
  // Category: HSHS_DOMXSS
  //
  // CSP_CORRECT
  'CSP_CORRECT'            => 'Der Header ist korrekt gesetzt und entspricht den Empfehlungen.',
  //
  // CSP_LEGACY_HEADER_SET
  'CSP_LEGACY_HEADER_SET'            => 'Der veraltete Header `X-Content-Security-Policy` ist gesetzt. Der neue standardisierte Header ist `Content-Security-Policy`.',
  //
  // CSP_NO_UNSAFE_INCLUDED
  'CSP_NO_UNSAFE_INCLUDED'            => 'Der Header ist korrekt gesetzt und enthält keine `unsafe-`-Direktiven.',
  //
  // CSP_UNSAFE_INCLUDED
  'CSP_UNSAFE_INCLUDED'            => 'Der Header ist unsicher gesetzt, da er `unsafe-inline`- oder `unsafe-eval`-Direktiven enthält.',
  //
  // CT_CORRECT
  'CT_CORRECT'            => 'Der Header ist korrekt gesetzt und entspricht den Empfehlungen.',
  //
  // CT_HEADER_WITHOUT_CHARSET
  'CT_HEADER_WITHOUT_CHARSET'            => 'Der Header ist ohne Zeichensatzangabe gesetzt und dadurch nicht sicher.',
  //
  // CT_HEADER_WITH_CHARSET
  'CT_HEADER_WITH_CHARSET'            => 'Der Header ist korrekt gesetzt und beinhaltet eine Zeichensatz-Angabe.',
  //
  // CT_META_TAG_SET
  'CT_META_TAG_SET'            => 'Die Header-Angabe ist via `<meta>`-Tag gesetzt, enthält jedoch keine Zeichensatz-Angabe oder folgt nicht den Empfehlungen.',
  //
  // CT_META_TAG_SET_CORRECT
  'CT_META_TAG_SET_CORRECT'            => 'Die Header-Angabe ist via `<meta>`-Tag gesetzt und entspricht den Empfehlungen.',
  //
  // CT_WRONG_CHARSET
  'CT_WRONG_CHARSET'            => 'Ein falscher oder ungültiger Zeichensatz wurde eingetragen. Die Konfiguration ist nicht sicher.',
  //
  // HPKP_LESS_15
  'HPKP_LESS_15'            => 'Die öffentlichen Schlüssel sind für weniger als 15 Tage gepinnt.',
  //
  // HPKP_MORE_15
  'HPKP_MORE_15'            => 'Die öffentlichen Schlüssel sind für mehr als 15 Tage gepinnt.',
  //
  // HPKP_REPORT_URI
  'HPKP_REPORT_URI'            => 'Eine `report-uri` ist gesetzt.',
  //
  // HSTS_LESS_6
  'HSTS_LESS_6'            => 'Der Wert von `max-age` ist kleiner als 6 Monate.',
  //
  // HSTS_MORE_6
  'HSTS_MORE_6'            => 'Der Wert von `max-age` ist größer als 6 Monate.',
  //
  // HSTS_PRELOAD
  'HSTS_PRELOAD'            => 'Die `preload`-Direktive ist gesetzt.',
  //
  // INCLUDE_SUBDOMAINS
  'INCLUDE_SUBDOMAINS'            => '`includeSubDomains` ist gesetzt.',
  //
  // NO_SINKS_FOUND
  'NO_SINKS_FOUND'            => 'Es wurden keine „Sinks“ gefunden.',
  //
  // NO_SOURCES_FOUND
  'NO_SOURCES_FOUND'            => 'Es wurden keine „Sources“ gefunden.',
  //
  // SINKS_FOUND
  'SINKS_FOUND'            => 'Es wurden „Sinks“ gefunden.',
  //
  // SOURCES_FOUND
  'SOURCES_FOUND'            => 'Es wurden „Sources“ gefunden.',
  //
  // XCTO_CORRECT
  'XCTO_CORRECT'            => 'Der Header ist korrekt gesetzt und entspricht den Empfehlungen.',
  //
  // XCTO_NOT_CORRECT
  'XCTO_NOT_CORRECT'            => 'Der Header ist nicht korrekt gesetzt.',
  //
  // XFO_CORRECT
  'XFO_CORRECT'            => 'Der Header ist korrekt gesetzt und entspricht den Empfehlungen.',
  //
  // XFO_WILDCARDS
  'XFO_WILDCARDS'            => 'Der Header enthält Wildcard-Angaben (*) und ist daher nicht sicher konfiguriert.',
  //
  // XXSS_BLOCK
  'XXSS_BLOCK'            => 'Die `mode=block`-Direktive ist aktiviert.',
  //
  // XXSS_CORRECT
  'XXSS_CORRECT'            => 'Der Header ist korrekt gesetzt und entspricht den Empfehlungen.',
  //
  // Category: HTTP-Security-Header-Scanner
  //
  // CONTENT_SECURITY_POLICY
  'CONTENT_SECURITY_POLICY'            => 'Überprüfung der Content Security Policy (CSP)',
  'CONTENT_SECURITY_POLICY_SUCCESS'    => 'Eine sichere Konfiguration der Content Security Policy (CSP) wurde gefunden.',
  'CONTENT_SECURITY_POLICY_ERROR'      => 'Content Security Policy Inaktiv',
  'CONTENT_SECURITY_POLICY_ERROR_DESC' => 'Die Content-Security-Policy ist ein Sicherheitskonzept, welches das Injizieren und Auszuführen von evtl. bösartigen Befehlen in eine Webanwendung (Content-Injection-Angriffe) mildern soll. Es stellt über eine Whitelist (Liste erlaubter Quellen) dar, von welchen <a href="https://siwecos.de/wiki/Quellen/DE" target="siwecos_wiki" class="wikI">Quellen</a> Javascripte, Bilder, Schriftarten und andere Inhalte auf Ihrer Seite eingebunden werden dürfen.',
  'CONTENT_SECURITY_POLICY_TIPS'       => 'Verwenden Sie den CSP mit default-src \'none\' und ohne unsicher-eval oder unsicher-inline-Richtlinien. Mehr zu \'\'\'Content Security Policy\'\'\' (zu deutsch etwa "Richtlinie für die Sicherheit der Inhalte") finden Sie bei \'\'\'[https://wiki.selfhtml.org/wiki/Sicherheit/Content_Security_Policy SELFHTML>>]\'\'\'\n\n\n--snip<br>\n\n\'\'\'Beispiele für den Header der Startseite:\'\'\'\n\n<pre>\n<meta http-equiv="Content-Security-Policy" content="default-src \'self\'; script-src \'self\'">\n<meta http-equiv="X-Content-Security-Policy" content="default-src \'self\'; script-src \'self\'">\n<meta http-equiv="X-WebKit-CSP" content="default-src \'self\'; script-src \'self\'"></pre>\n\n\'\'\'Konfiguration des Webservers\'\'\'\n\nWenn man seinen eigenen Webserver konfigurieren kann, was bei günstigen Hostingangeboten in aller Regel nicht der Fall ist, dann gibt es diese Einstellungsmöglichkeit über die \'\'\'Bearbeitung der .htaccess\'\'\':\n\n<pre># Download / Lade Inhalte nur von Seiten die explizit erlaubt sind\n# Beispiel: Alles von der eigenen Domain erlauben, keine Externas:\n\nHeader set Content-Security-Policy "default-src \'none\'; script-src \'self\'; connect-src \'self\'; img-src \'self\'; style-src \'self\';"\n\n</pre>\n\n--snap\n\nHier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den \'\'\'HTTP-Security-Header-Scanner\'\'\' Grün zu stimmen.\n([https://www.siwecos.de/wiki/Htaccess .htaccess-Beispiel])',
  'CONTENT_SECURITY_POLICY_LINK'       => 'https://siwecos.de/wiki/Content-Security-Policy-Schwachstelle/DE',
  //
  // CONTENT_TYPE
  'CONTENT_TYPE'            => 'Überprüfung des HTTP Content-Types',
  'CONTENT_TYPE_SUCCESS'    => 'Die Content Type Angabe ist korrekt konfiguriert.',
  'CONTENT_TYPE_ERROR'      => 'Inkorekte HTTP Content-Type Konfiguration',
  'CONTENT_TYPE_ERROR_DESC' => 'Der Content-Type ist eine Angabe, die für gewöhnlich im Kopfbereich der Webseite, dem sogenannten HTTP-Header, untergebracht wird. Durch diese Angaben wird der Zeichensatz und der Typ des Inhalts der Seite definiert. Sollte eine Definition fehlen, wird der Webbrowser versuchen den Content-Type zu erraten; dies kann zu Sicherheitslücken wie Code-Page-Sniffing führen. Diese Angaben sind zudem wichtig, damit die Webseite in jedem <a href="https://siwecos.de/wiki/Browser/DE" target="siwecos_wiki" class="wikI">Browser</a> und auf jedem Computer einwandfrei dargestellt wird. Wenn ein Server ein Dokument an einen <a href="https://de.wikipedia.org/wiki/User_Agent" target="siwecos_external" class="external">User-Agent</a> sendet (zum Beispiel zum <a href="https://siwecos.de/wiki/Browser/DE" target="siwecos_wiki" class="wikI">Browser</a>) ist es nützlich, im Content-Type-Feld des HTTP-Header die Art des Dateiformates zu hinterlegen. Diese Informationen deklarieren den <a href="https://de.wikipedia.org/wiki/Internet_Media_Type" target="siwecos_external" class="external">MIME-Typ</a> und senden entsprechend die Zeichenkodierung des Dokuments wie text/html, text/plain, etc. an den Browser.',
  'CONTENT_TYPE_TIPS'       => 'Fügen sie den entsprechenden HTTP-Header oder alternativ ein <meta> Tag hinzu. Bitte beachten Sie, dass <meta> im Gegensatz zu einem HTTP-Header leichter angegriffen werden kann.\n\n\'\'\'text/html; charset=utf-8\'\'\';\n\n\'\'\'--snip\'\'\'\n\n<pre><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></pre>\n\n\'\'\'—snap\'\'\'\n\n\nWeiterhin muß der Server selber konfiguriert werden, damit die \'\'\'richtige charset-Information\'\'\' gesendet wird. Dazu benötigt werden entsprechende Berechtigungen benötigt um die Änderungen am Server durchführen zu können. Weiter Informationen zu den verschiedenen Serverkonfigurationen finden Sie auf den Seiten von [https://www.w3.org/International/articles/http-charset/index.de W3.org].\n\nDarüber hinaus gibt es auch die Möglichkeit die \'\'\'richtige charset-Information\'\'\' der [http://httpd.apache.org/docs/2.0/howto/htaccess.html \'\'\'.htaccess\'\'\'] zu übergeben, welche die Angaben im HTTP-Header überschreiben. [https://www.w3.org/International/questions/qa-htaccess-charset charset in .htaccess]\n\n\'\'\'In die .htaccess eintragen:\'\'\'\n<pre>AddType \'text/html; charset=UTF-8\' html</pre>\n\nHier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den \'\'\'HTTP-Security-Header-Scanner\'\'\' Grün zu stimmen.\n([https://www.siwecos.de/wiki/Htaccess .htaccess-Beispiel])',
  'CONTENT_TYPE_LINK'       => 'https://siwecos.de/wiki/Content-Type-Nicht-Korrekt/DE',
  //
  // PUBLIC_KEY_PINS
  'PUBLIC_KEY_PINS'            => 'Überprüfung des Public Key Pinning (HPKP)',
  'PUBLIC_KEY_PINS_SUCCESS'    => 'Public-Key-Pinning ist aktiviert',
  'PUBLIC_KEY_PINS_ERROR'      => 'Public-Key-Pinning nicht vorhanden.',
  'PUBLIC_KEY_PINS_ERROR_DESC' => 'Mächtige Angreifer wie bspw. Geheimdienste können ggf. eine Signatur, mit der Hilfe einer von den Benutzern akzeptierten Zertifizierungsstelle, erstellen lassen. Um dies zu verhindern kann eine Webseite definieren, dass beim ersten Aufruf des Zertifikats das Zertifikat dauerhaft gespeichert (pinning). Mit der Hilfe von Key-Pinning wird für die von der Webseiten definierten Zeit lediglich das gespeicherte Zertifikat akzeptiert.',
  'PUBLIC_KEY_PINS_TIPS'       => 'pin-sha256="<HASH>"; pin-sha256="<HASH>"; max-age=2592000; includeSubDomains;\n\'\'\'HPKP aktivieren\'\'\' - Dieses Feature kann einfach aktiviert werden indem ein Public-Key-Pins HTTP-Header beim Aufruf der Seite über [[HTTPS]] zurückgegeben wird. ([https://developer.mozilla.org/de/docs/Web/Security/Public_Key_Pinning Weitere Infos]).\n\n\'\'\'--snip\'\'\'\n\n<pre>Public-Key-Pins: pin-sha256="base64=="; max-age=expireTime [; includeSubdomains][; report-uri="reportURI"]</pre>\n\n\'\'\'--snap\'\'\'\n\nHier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den \'\'\'HTTP-Security-Header-Scanner\'\'\' Grün zu stimmen.\n([https://www.siwecos.de/wiki/Htaccess .htaccess-Beispiel])',
  'PUBLIC_KEY_PINS_LINK'       => 'https://siwecos.de/wiki/Public-Key-Pins-Deaktiviert/DE',
  //
  // STRICT_TRANSPORT_SECURITY
  'STRICT_TRANSPORT_SECURITY'            => 'Überprüfung des HSTS Schutzes',
  'STRICT_TRANSPORT_SECURITY_SUCCESS'    => 'Ihre Webseite ist ausschließlich über das sichere HTTPS-Protokoll erreichbar. Kommunikation zwischen Ihrer Webseite und den Besuchern kann nicht abgehört und manipuliert werden.',
  'STRICT_TRANSPORT_SECURITY_ERROR'      => 'HSTS Schutz Fehler',
  'STRICT_TRANSPORT_SECURITY_ERROR_DESC' => 'Strict-Transport-Security stellt sicher, dass die Webseite für eine bestimmte Zeit lediglich über HTTPS gesicherte Verbindung aufgerufen werden kann. Der Webseitenbetreiber kann diesbezüglich u.a. definieren, wie lange das Zeitinterval ist und ob diese Regelung auch für Subdomains gelten soll.',
  'STRICT_TRANSPORT_SECURITY_TIPS'       => 'max-age=63072000; includeSubdomains;\nHTTP Strict Transport Security (HSTS) ist ein einfach zu integrierender Web-Security-Policy-Mechanismus.\n\n\'\'\'--snip\'\'\'<pre>\n# HTTP Strict Transport Security (HSTS) aktivieren\n# Pflichtangabe: „max-age“\n# Optional: „includeSubDomains“</pre>\n   \'\'\'Header set Strict-Transport-Security „max-age=31556926, includeSubDomains“\'\'\'\n\'\'\'--snap\'\'\'\n\nHier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den \'\'\'HTTP-Security-Header-Scanner\'\'\' Grün zu stimmen.\n([https://www.siwecos.de/wiki/Htaccess .htaccess-Beispiel])',
  'STRICT_TRANSPORT_SECURITY_LINK'       => 'https://siwecos.de/wiki/Keine-Verschluesselung-Gefunden/DE',
  //
  // X_CONTENT_TYPE_OPTIONS
  'X_CONTENT_TYPE_OPTIONS'            => 'Überprüfung des X-Content-Type Headers',
  'X_CONTENT_TYPE_OPTIONS_SUCCESS'    => 'Der HTTP-Header ist korrekt gesetzt.',
  'X_CONTENT_TYPE_OPTIONS_ERROR'      => 'X-Content-Type Header fehlt',
  'X_CONTENT_TYPE_OPTIONS_ERROR_DESC' => 'Die X-Content-Type-Options Einstellungen im Header verhindern, dass der <a href="https://siwecos.de/wiki/Browser/DE" target="siwecos_wiki" class="wikI">Browser</a> Dateien als etwas anderes interpretiert, als vom Inhaltstyp im <a href="https://siwecos.de/wiki/HTTP/DE" target="siwecos_wiki" class="wikI">HTTP-Header</a> deklariert wurde. Die Headereinstellungen sind hier nicht gesetzt.',
  'X_CONTENT_TYPE_OPTIONS_TIPS'       => 'nosniff; <br><br>\n\'\'\'Beispielcode einer .htaccess auf einem Apache Webserver.\'\'\'<br>\n\'\'\'--snip\'\'\'<pre>\n<IfModule mod_headers.c>\n   # prevent mime based attacks like drive-by download attacks, IE and Chrome\n   \'\'\'Header set X-Content-Type-Options „nosniff“\'\'\'\n<pre></IfModule></pre>\n\'\'\'—snap\'\'\'\n\nHier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den \'\'\'HTTP-Security-Header-Scanner\'\'\' Grün zu stimmen.\n([https://www.siwecos.de/wiki/Htaccess .htaccess-Beispiel])',
  'X_CONTENT_TYPE_OPTIONS_LINK'       => 'https://siwecos.de/wiki/X-Content-Type-Options-Schwachstelle/DE',
  //
  // X_FRAME_OPTIONS
  'X_FRAME_OPTIONS'            => 'Überprüfung der X-Frame Optionen',
  'X_FRAME_OPTIONS_SUCCESS'    => 'Der Header ist korrekt gesetzt und verbessert den Schutz Ihrer Webseite gegen Clickjacking-Angriffe.',
  'X_FRAME_OPTIONS_ERROR'      => 'HTTP-Header X-Frame Optionen nicht gesetzt.',
  'X_FRAME_OPTIONS_ERROR_DESC' => 'X-Frame-Options hilft dabei Angriffe über Framing-Mechanismen zu unterbinden. Dies gewährleistet bspw., dass Clickjacking-Angriffe größtenteils gemildert werden können. Darüber hinaus werden Downgrading-Angriffe wie etwa im Internet Explorer minimiert.',
  'X_FRAME_OPTIONS_TIPS'       => 'Im HTTP-Header entsprechend den Bedürfnissen setzen. Die \'\'\'X-Frame-Options\'\'\' im [[HTTP]] Header kann verwendet werden, um zu bestimmen, ob ein aufrufender [[Browser]] die Zielseite in einem <frame>, <iframe> oder bspw. <object> rendern bzw. einbetten darf. Webseiten können diesen Header verwenden, um u. a. Clickjacking-Angriffe abzuwehren, indem sie unterbinden, dass ihr Content in fremden Seiten eingebettet wird.\n\nMit dem HTTP-Header Befehl X-Frame-Options können moderne Webbrowser angewiesen werden, eine Seite nicht in einem Frame auf einer andere Website zu laden. Dafür muss der folgende Befehl in der htaccess-Datei gesetzt werden:\n\nHeader always append X-Frame-Options DENY\n\n\'\'\'--snip\'\'\'\n<pre>\nHeader always append X-Frame-Options DENY\n</pre>\n\'\'\'—snap\'\'\'\n\nAlternativ kann erlaubt werden, dass die Seite nur auf anderen Seiten der gleichen Domain eingebunden werden dürfen:\n\n\'\'\'--snip\'\'\'\n<pre>\nHeader always append X-Frame-Options SAMEORIGIN\n</pre>\n\'\'\'—snap\'\'\'\n\nFalls eine Website doch extern eingebunden werden muss, kann eine Domain angegeben werden:\n\n\'\'\'--snip\'\'\'\n<pre>\nHeader always append X-Frame-Options ALLOW-FROM botfrei.de\n</pre>\n\'\'\'—snap\'\'\'\n\n\nHier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den \'\'\'HTTP-Security-Header-Scanner\'\'\' Grün zu stimmen.\n([https://www.siwecos.de/wiki/Htaccess .htaccess-Beispiel])',
  'X_FRAME_OPTIONS_LINK'       => 'https://siwecos.de/wiki/X-Frame-Options-Schwachstelle/DE',
  //
  // X_XSS_PROTECTION
  'X_XSS_PROTECTION'            => 'Überprüfung ob der Cross-Site Scripting Filter aktiviert und korrekt konfiguriert ist.',
  'X_XSS_PROTECTION_SUCCESS'    => 'Der Cross-Site-Scripting (XSS) -Schutz des Webbrowsers ist auf Ihrer Seite aktiviert.',
  'X_XSS_PROTECTION_ERROR'      => 'Cross-Site-Scripting Schutz nicht aktiviert oder unzureichend konfiguriert.',
  'X_XSS_PROTECTION_ERROR_DESC' => 'Der HTTP-Header X-XSS-Protection definiert wie in Browser eingebaute XSS-Filter konfiguriert werden. Eine Default-Installation kann eine unzureichende Konfiguration offenbaren.',
  'X_XSS_PROTECTION_TIPS'       => '1; mode=block\n\n\'\'\'Beispielcode einer .htaccess auf einem Apache Webserver.\'\'\'\n\n\'\'\'--snip\'\'\'<br><pre>\n   # Turn on XSS prevention tools, activated by default in IE and Chrome\n   \'\'\'Header set X-XSS-Protection „1; mode=block“\'\'\'\n</pre>\n\'\'\'—snap\'\'\'\n\nHier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den \'\'\'HTTP-Security-Header-Scanner\'\'\' Grün zu stimmen.\n([https://www.siwecos.de/wiki/Htaccess .htaccess-Beispiel])',
  'X_XSS_PROTECTION_LINK'       => 'https://siwecos.de/wiki/XSS-Schwachstelle/DE',
  //
  // Category: INI_S
  //
  // MALWARE_FOUND
  'MALWARE_FOUND'            => 'Ihre Domain ‘%site%’ wurde in folgenden Malware-Listen gefunden: %where%',
  //
  // PHISHING_FOUND
  'PHISHING_FOUND'            => 'Ihre Domain ‘%site%’ wurde in folgenden Phising-Listen gefunden: %where%',
  //
  // SPAM_FOUND
  'SPAM_FOUND'            => 'Ihre Domain ‘%site%’ wurde in folgenden Spam-Listen gefunden: %where%',
  //
  // Category: Infoleak
  //
  // CMS_ONLY
  'CMS_ONLY'            => 'Das verwendete CMS %cms% wurde erkannt.',
  //
  // CMS_VERSION
  'CMS_VERSION'            => 'Das verwendete CMS %cms% und dessen Version %version% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.',
  //
  // CMS_VERSION_VULN
  'CMS_VERSION_VULN'            => 'Das verwendete CMS %cms% der Version %version% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.',
  //
  // EMAIL_FOUND
  'EMAIL_FOUND'            => 'Die Email-Adresse %email_adress% wurde gefunden. Wollen Sie diese Email-Adresse wirklich veröffentlichen? Ein Angreifer kann dies für bspw. Phising-Angriffe nutzen.',
  //
  // JS_LIB_ONLY
  'JS_LIB_ONLY'            => 'Die verwendete JavaScript-Bibliothek %js_lib_name% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt.',
  //
  // JS_LIB_VERSION
  'JS_LIB_VERSION'            => 'Die verwendete JavaScript-Bibliothek %js_lib_name% mit der Version %js_lib_version% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.',
  //
  // JS_LIB_VULN_VERSION
  'JS_LIB_VULN_VERSION'            => 'Die verwendete JavaScript-Bibliothek %js_lib_name% mit der Version %js_lib_version% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.',
  //
  // NUMBER_FOUND
  'NUMBER_FOUND'            => 'Die Telefonnummer %number% wurde gefunden. Wollen Sie diese Telefonnummer wirklich veröffentlichen? Ein Angreifer kann diese bspw. für Phishing-Angriffe nutzen.',
  //
  // PLUGIN_ONLY
  'PLUGIN_ONLY'            => 'Das verwendete CMS-Plugin %plugin% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt.',
  //
  // PLUGIN_VERSION
  'PLUGIN_VERSION'            => 'Das verwendete CMS-Plugin %plugin% mit der Version %plugin_version% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.',
  //
  // PLUGIN_VERSION_VULN
  'PLUGIN_VERSION_VULN'            => 'Das verwendete CMS-Plugin %plugin% der Version %plugin_version% in DOM-node %node% mit dem Inhalt %node_content% erkannt. Für diese Version ist eine Schwachstelle bekannt.',
  //
  // Category: Information-Leakage-Scanner
  //
  // CMS
  'CMS'            => 'Überprüfung auf Erkennbarkeit des verwendeten CMS.',
  'CMS_SUCCESS'    => 'Falls Sie ein CMS verwenden, kann dieses nicht automatisiert erkannt werden.',
  'CMS_ERROR'      => 'Content Management System (CMS) erkennbar',
  'CMS_ERROR_DESC' => 'Das verwendete <a href="https://www.siwecos.de/wiki/Content-Management-Systeme" target="siwecos_external" class="external">Content Management System</a> kann identifiziert werden. Diese Information könnte von einem Angreifer genutzt werden, um gezielt nach Schwachstellen für dieses spezielle CMS zu suchen.',
  'CMS_TIPS'       => 'Halten Sie installierte Webserver und das Content Management System immer auf dem aktuellsten Stand. Manche CMS-Systeme erlauben es Versionsinformationen zu verstecken. Nutzen sie dieses Feature falls verfügbar.',
  'CMS_LINK'       => 'https://siwecos.de/wiki/Content-Management-System-Gefunden/DE',
  //
  // CMS_PLUGINS
  'CMS_PLUGINS'            => 'Überprüfung auf unsichere CMS-Plugins',
  'CMS_PLUGINS_SUCCESS'    => 'CMS-Plugins können nicht erkannt werden.',
  'CMS_PLUGINS_ERROR'      => 'CMS Plugin erkannt',
  'CMS_PLUGINS_ERROR_DESC' => 'Es wurde ein von ihrem CMS-System genutztes Plugin entdeckt. Ein Angreifer könnte diese Information nutzen, um gezielt nach Schwachstellen für ihre Website zu suchen.',
  'CMS_PLUGINS_TIPS'       => 'Plugins sollten auf jene beschränkt werden, die tatsächlich benötigt werden. Damit kann die Angriffsfläche erheblich reduzieren werden. Zudem sollten installierte Plugins immer auf dem aktuellsten Stand gehalten werden.',
  'CMS_PLUGINS_LINK'       => 'https://siwecos.de/wiki/Plugin-Gefunden/DE',
  //
  // EMAIL_ADDRESS
  'EMAIL_ADDRESS'            => 'Überprüfung auf vorhandene Email-Adressen',
  'EMAIL_ADDRESS_SUCCESS'    => 'Keine Email-Adressen gefunden.',
  'EMAIL_ADDRESS_ERROR'      => 'Auslesbare Email-Adresse',
  'EMAIL_ADDRESS_ERROR_DESC' => 'Ihre Webseite enthält mindestens eine maschinell auslesbare Email-Adresse. Dieses ermöglicht es Dritten, die hinterlegten Email-Adressen automatisiert durch WebCrawler (auch Spider, Searchbot oder Robot) zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufügen.',
  'EMAIL_ADDRESS_TIPS'       => 'Hinterlegen Sie Ihre Kontaktadressen, bspw. im Impressum wie folgt: mail at siwecos.de / mail @ siwecos.de oder hinterlegen Sie die Information in einer Grafik-Datei.',
  'EMAIL_ADDRESS_LINK'       => 'https://siwecos.de/wiki/Email-Adresse-Gefunden/DE',
  //
  // JS_LIB
  'JS_LIB'            => 'Überprüfung auf unsichere JavaScript-Bibliotheken',
  'JS_LIB_SUCCESS'    => 'Die JavaScript-Bibliotheken sind nach dem aktuellen Stand voraussichtlich nicht durch bekannte Schwachstellen angreifbar.',
  'JS_LIB_ERROR'      => 'Unsichere JavaScript-Bibliothek gefunden.',
  'JS_LIB_ERROR_DESC' => 'Es wurde eine von Ihnen verwendete JavaScript-Bibliothek gefunden. Ein Angreifer könnte diese Information nutzen, um gezielt nach Schwachstellen für Ihre Website zu suchen.',
  'JS_LIB_TIPS'       => 'Updaten Sie Ihre verwendeten Javascript Bibliotheken.',
  'JS_LIB_LINK'       => 'https://siwecos.de/wiki/Javascript-Schwachstelle/DE',
  //
  // PHONE_NUMBER
  'PHONE_NUMBER'            => 'Überprüfung auf auslesbare Telefonnummern',
  'PHONE_NUMBER_SUCCESS'    => 'Telefonnummern wurden nicht gefunden.',
  'PHONE_NUMBER_ERROR'      => 'Telefonnummer gefunden.',
  'PHONE_NUMBER_ERROR_DESC' => 'Es wurde eine Telefonnummer gefunden. Ein Angreifer könnte diese Information nutzen, um Mitarbeiter zu manipulieren und an Informationen gelangen die Geheim bleiben sollten.',
  'PHONE_NUMBER_TIPS'       => 'Die veröffentlichten Telefonnummern sollten auf jene beschränkt werden, die auch tatsächlich für die Kommunikation mit Kunden gedacht sind. Außerdem sollte der telefonierende Mitarbeiter sich der Gefahr von Social Engineering Angriffen bewusst sein und die Vorgehensweise von Social Engineers kennen.',
  'PHONE_NUMBER_LINK'       => 'https://siwecos.de/wiki/Telefonnummer-Gefunden/DE',
  //
  // Category: Initiative-S Scanner
  //
  // MALWARE
  'MALWARE'            => 'Überprüfung auf mögliche Malware',
  'MALWARE_SUCCESS'    => 'Ihre Domain wurde in keiner uns bekannten Malware Liste gefunden.',
  'MALWARE_ERROR'      => 'Ihre Domain wurde in Malware Listen gefunden',
  'MALWARE_ERROR_DESC' => 'Malware bezeichnet Software, die dem Benutzer und natürlich in erster Linie dem Computer Schaden zufügen kann. Malware bezeichnet dabei alle Arten von schadhaften Programmen wie etwa Viren, Trojaner, Spyware, Dialer, Dropper, Rootkits und Keylogger.',
  'MALWARE_TIPS'       => '\'\'\'<span style="color:#c31622"> Nehmen Sie die Webseite offline!<span>\'\'\'\n\nBei einem Aufruf der Seite besteht die Gefahr, dass Sie den aufrufenden PC mit Schadsoftware infizieren. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. Sie kommen auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n\n\'\'\'- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. \'\'\'<br>\n\nÜberprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n\n\'\'\'- Ändern Sie Ihre Zugangsdaten!\'\'\'<br>\n\'\'\'- Webfrontend (Hosting-Vertrag, Content-Management-System)\'\'\'<br>\n\'\'\'- FTP-, SSH-Zugänge\'\'\'<br>\n\'\'\'- Datenbank-Passwörter\'\'\'<br>\n\nSpielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n\n\'\'\' - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.\'\'\'<br>\n\nÜberprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite [https://www.botfrei.de botfrei.de] finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( https://www.botfrei.de/de/eucleaner/index.html )',
  'MALWARE_LINK'       => 'https://siwecos.de/wiki/Malware-Inhalte/DE',
  //
  // PHISHING
  'PHISHING'            => 'Überprüfung auf mögliche Phishing-Inhalte',
  'PHISHING_SUCCESS'    => 'Ihre Domain wurde in keiner uns bekannten Phising Liste gefunden.',
  'PHISHING_ERROR'      => 'Ihre Domain wurde in Phising Listen gefunden',
  'PHISHING_ERROR_DESC' => 'Beim Phishing wird in der Regel trickreich versucht, sensible persönliche Daten wie Passwörter, Kreditkartennummern und persönliche Daten des Besuchers der Seite zu entwenden. Dabei versenden Kriminelle üblicherweise Spam-E-Mails. Diese E-Mails enthalten u.a. Links zu einer Phishing-Seite, die sich als legitime Webseite ausgibt.',
  'PHISHING_TIPS'       => '\'\'\'<span style="color:#c31622"> Nehmen Sie die Webseite offline!<span>\'\'\'\n\nEs ist weiterhin möglich, dass Sie mit der Webseite Phishing-Inhalte zu Verfügung stellen und Kriminelle persönliche Daten darüber sammeln. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n\n\'\'\'- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. \'\'\'<br>\n\nÜberprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n\n\'\'\'- Ändern Sie Ihre Zugangsdaten!\'\'\'<br>\n\'\'\'- Webfrontend (Hosting-Vertrag, Content-Management-System)\'\'\'<br>\n\'\'\'- FTP-, SSH-Zugänge\'\'\'<br>\n\'\'\'- Datenbank-Passwörter\'\'\'<br>\n\nSpielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n\n\'\'\' - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.\'\'\'<br>\n\nÜberprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite [https://www.botfrei.de botfrei.de] finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( https://www.botfrei.de/de/eucleaner/index.html )',
  'PHISHING_LINK'       => 'https://siwecos.de/wiki/Phishing-Inhalte/DE',
  //
  // SPAM
  'SPAM'            => 'Überprüfung auf mögliche Spam-Inhalte',
  'SPAM_SUCCESS'    => 'Ihre Domain wurde in keiner uns bekannten Spam Liste gefunden.',
  'SPAM_ERROR'      => 'Ihre Domain wurde in Spam Listen gefunden',
  'SPAM_ERROR_DESC' => 'Als Spam bezeichnet man ungewollte und zum Teil unseriöse Werbung im E-Mail Postfach (z.B. Viagra-Werbung, Medikamente, Versicherung und Kreditvergleiche). Diese Werbungen werden massenhaft verschickt bzw. können aber auch zielgerichtet verschickt werden. In der Regel verschleiern die Absender ihre wahre Identität in der E-Mail und versuchen Sie zu täuschen.',
  'SPAM_TIPS'       => '\'\'\'<span style="color:#c31622"> Nehmen Sie die Webseite offline!<span>\'\'\'\n\nUm den Besuch Ihrer infizierten Webseite zu vermeiden bzw. damit Google Ihre Webseite nicht aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde, schalten Sie die Webseite offline. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n\nUm zu prüfen ob die Seite über diverse Spam-Merkmale verfügt, rufen Sie die Seite im Browser auf, klicken über die rechte Maustaste den "Quelltext anzeigen". In diesem Fenster können Sie Ihren Quellcode mit Drücken der Tasten \'\'\'Strg+f\'\'\' (suchen) auf gängige Online-Betrügereien durch Werbung für Medikamente oder dubiose Kreditgeschäft überprüfen.\n\n\'\'\'Einige Suchvorschläge\'\'\':<br>\n- „payday“<br>\n- „Pharma“<br>\n- „Viagra“<br>\n- „Cialis“<br><br>\n\'\'\'- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. \'\'\'<br>\n\nÜberprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n\n\'\'\'- Ändern Sie Ihre Zugangsdaten!\'\'\'<br>\n\'\'\'- Webfrontend (Hosting-Vertrag, Content-Management-System)\'\'\'<br>\n\'\'\'- FTP-, SSH-Zugänge\'\'\'<br>\n\'\'\'- Datenbank-Passwörter\'\'\'<br>\n\nSpielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n\n\'\'\' - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.\'\'\'<br>\n\nÜberprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite [https://www.botfrei.de botfrei.de] finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( https://www.botfrei.de/de/eucleaner/index.html )',
  'SPAM_LINK'       => 'https://siwecos.de/wiki/Spam-Inhalte/DE',
  //
  // Category: Protokollversionen
  //
  // PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2'            => 'Überprüfung auf veraltetes SSL2 Protokoll',
  'PROTOCOLVERSION_SSL2_SUCCESS'    => 'Veraltete Protokollversion SSL2 nicht unterstützt',
  'PROTOCOLVERSION_SSL2_ERROR'      => 'Veraltete Protokollversion SSL2 unterstützt',
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => 'Der Server unterstützt die veraltete Protokollversion SSL2, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.',
  'PROTOCOLVERSION_SSL2_TIPS'       => '[[Transport Layer Security|TLS-Verschlüsselung]] gilt heute als Standard. Sie sollten deshalb auf den Einsatz von [[SSL|SSL2]] verzichten. Weitere Informationen finden Sie hier: [https://www.siwecos.de/wiki/SSL SSL]',
  'PROTOCOLVERSION_SSL2_LINK'       => 'https://siwecos.de/wiki/Veraltete-Protokollversion-SSL2/DE',
  //
  // PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3'            => 'Überprüfung auf veraltetes SSL3 Protokoll',
  'PROTOCOLVERSION_SSL3_SUCCESS'    => 'Veraltete Protokollversion SSL3 nicht unterstützt',
  'PROTOCOLVERSION_SSL3_ERROR'      => 'Veraltete Protokollversion SSL3 unterstützt',
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => 'Der Server unterstützt die veraltete Protokollversion SSL3, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.',
  'PROTOCOLVERSION_SSL3_TIPS'       => '[[Transport Layer Security|TLS-Verschlüsselung]] gilt heute als Standard. Sie sollten deshalb auf den Einsatz von [[SSL|SSL3]] verzichten. Weitere Informationen finden Sie hier: [https://www.siwecos.de/wiki/SSL SSL]',
  'PROTOCOLVERSION_SSL3_LINK'       => 'https://siwecos.de/wiki/Veraltete-Protokollversion-SSL3/DE',
  //
  // PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13'            => 'Überprüfung auf Einsatz  des TLS1.3 Protokoll',
  'PROTOCOLVERSION_TLS13_SUCCESS'    => 'TLS 1.3 nicht unterstützt',
  'PROTOCOLVERSION_TLS13_ERROR'      => 'Moderne TLS 1.3 unterstützt',
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => 'Der Server unterstützt die neueste TLS Protokollversion. Diese befindet sich noch im Standartisierungsprozess. Sollten sie nicht wissen was dies bedeutet, können sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützten und TLS 1.3 sich noch in der Entwicklung befindet.',
  'PROTOCOLVERSION_TLS13_TIPS'       => 'Es besteht kein Handlungsbedarf.',
  'PROTOCOLVERSION_TLS13_LINK'       => 'https://siwecos.de/wiki/Protokollversion-TLS13-Gefunden/DE',
  //
  // Category: Scanner
  //
  // SCANNER_NAME_DOMXSS
  'SCANNER_NAME_DOMXSS'            => 'DOMXSS Scanner',
  //
  // SCANNER_NAME_HEADER
  'SCANNER_NAME_HEADER'            => 'Header Scanner',
  //
  // SCANNER_NAME_INFOLEAK
  'SCANNER_NAME_INFOLEAK'            => 'Info Leak Scanner',
  //
  // SCANNER_NAME_INI_S
  'SCANNER_NAME_INI_S'            => 'Initiative-S Scanner',
  //
  // SCANNER_NAME_WS_TLS
  'SCANNER_NAME_WS_TLS'            => 'TLS Scanner',
  //
  // Category: Verschlüsselungsmethode
  //
  // CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED'            => 'Überprüfung der Client-Verschlüsselungsmethodik',
  'CIPHERSUITEORDER_ENFORCED_SUCCESS'    => 'Verantwortungsvolle Auswahl der Verschlüsselungsmethoden',
  'CIPHERSUITEORDER_ENFORCED_ERROR'      => 'Verantwortungslose Auswahl der Verschlüsselungsmethoden',
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass die Verschlüsselungsmethodik des Webseiten-Besuchers bevorzugt wird, statt die Ihres Webservers. Server sollten die Auswahl der Verschlüsselungsmethoden nicht ihren Kunden überlassen, sondern aktiv starke Verbindungen auswählen.',
  'CIPHERSUITEORDER_ENFORCED_TIPS'       => 'Konfigurieren Sie Ihren Webservern so, dass der Webserver die Verschlüsselungsmethodik bei der Kommunikation zwischen Ihrer Webseite und dem Webbrowser des Besuchers bestimmt.',
  'CIPHERSUITEORDER_ENFORCED_LINK'       => 'https://siwecos.de/wiki/Verschluesselungsmethode-Client/DE',
  //
  // CIPHERSUITE_ANON
  'CIPHERSUITE_ANON'            => 'Überprüfung auf anonyme Verschlüsselungsmethodik.',
  'CIPHERSUITE_ANON_SUCCESS'    => 'Kein Anonymer Schlüsselaustausch unterstützt',
  'CIPHERSUITE_ANON_ERROR'      => 'Anonymer Schlüsselaustausch unterstützt',
  'CIPHERSUITE_ANON_ERROR_DESC' => 'Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass eine unsichere Verschlüsselungsmethode (<a href="https://siwecos.de/wiki/Cipher Suite/DE" target="siwecos_wiki" class="wikI">Cipher Suite</a>) ohne Rechtekontrolle bei der Verbindung erfolgt. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle/DE" target="siwecos_wiki" class="wikI">Man-in-the-Middle Attacken</a>.',
  'CIPHERSUITE_ANON_TIPS'       => 'Deaktivieren Sie die Unterstützung des "Anonymen Schlüsselaustauschs" in der  Verschlüsselungsmethodik. In Konsequenz auf die bekannt gewordenen TLS Schwachstellen ist die wichtigste Regel, wann immer es geht, TLS 1.2 zu nutzen. SSL 3.0 sollte in Browser deaktiviert werden.',
  'CIPHERSUITE_ANON_LINK'       => 'https://siwecos.de/wiki/Schluesselaustauschverfahren/DE',
  //
  // CIPHERSUITE_DES
  'CIPHERSUITE_DES'            => 'Überprüfung auf DES Verschlüsselungsmethodik',
  'CIPHERSUITE_DES_SUCCESS'    => 'Keine veraltete DES Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_DES_ERROR'      => 'Veraltete DES Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_DES_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.',
  'CIPHERSUITE_DES_TIPS'       => 'Deaktivieren Sie die Unterstützung der DES Verschlüsselungsmethodik in Ihrer Webserver-Software.',
  'CIPHERSUITE_DES_LINK'       => 'https://siwecos.de/wiki/Schwaches-DES-Verschluesselungsprotokoll/DE',
  //
  // CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT'            => 'Überprüfung auf schwache Verschlüsselungs-Funktionen',
  'CIPHERSUITE_EXPORT_SUCCESS'    => 'Keine schwache EXPORT Verschlüsselung unterstützt',
  'CIPHERSUITE_EXPORT_ERROR'      => 'Schwache Export Verschlüsselung unterstützt',
  'CIPHERSUITE_EXPORT_ERROR_DESC' => 'Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass sich vorsätzlich unsichere Verschlüsselungsmethoden (<a href="https://siwecos.de/wiki/Cipher Suite/DE" target="siwecos_wiki" class="wikI">Cipher Suites</a>) nutzen lassen. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-Middle/DE" target="siwecos_wiki" class="wikI">Man-in-the-Middle Attacken</a>.',
  'CIPHERSUITE_EXPORT_TIPS'       => 'Deaktivieren Sie die Unterstützung von EXPORT Verschlüsselungsmethoden im Webserver.',
  'CIPHERSUITE_EXPORT_LINK'       => 'https://siwecos.de/wiki/Geschwaechtes-Verschluesselungsprotokoll/DE',
  //
  // CIPHERSUITE_NULL
  'CIPHERSUITE_NULL'            => 'Überprüfung auf NULL-Chiffren',
  'CIPHERSUITE_NULL_SUCCESS'    => 'Keine unsicheren Null Chiffren unterstützt',
  'CIPHERSUITE_NULL_ERROR'      => 'Unsichere NULL Chiffren unterstützt',
  'CIPHERSUITE_NULL_ERROR_DESC' => 'Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass zugelassen wird das unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle/DE" target="siwecos_wiki" class="wikI">Man-in-the-Middle Attacken</a>.',
  'CIPHERSUITE_NULL_TIPS'       => 'Deaktivieren Sie die Unterstützung von NULL Verschlüsselungsmethoden.',
  'CIPHERSUITE_NULL_LINK'       => 'https://siwecos.de/wiki/Unverschluesselte-Kommunikation/DE',
  //
  // CIPHERSUITE_RC4
  'CIPHERSUITE_RC4'            => 'Überprüfung auf RC4 Verschlüsselungsmethodik',
  'CIPHERSUITE_RC4_SUCCESS'    => 'Keine veraltete RC4 Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_RC4_ERROR'      => 'Veraltete RC4 Verschlüsselungsmethodik\nunterstützt',
  'CIPHERSUITE_RC4_ERROR_DESC' => 'Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 (<a href="https://siwecos.de/wiki/Ciper Suite/DE" target="siwecos_wiki" class="wikI">Cipher Suites</a>) weiterhin unterstützt. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-Middle/DE" target="siwecos_wiki" class="wikI">Man-in-the-Middle Attacken</a>.',
  'CIPHERSUITE_RC4_TIPS'       => 'Deaktivieren Sie die Unterstützung der RC4 Verschlüsselungsmethodik.',
  'CIPHERSUITE_RC4_LINK'       => 'https://siwecos.de/wiki/Unsichere-Verschluesselungsfunktion-RC4/DE',
  //
  // Category: WS_TLS
  //
  // ANON_SUITES
  'ANON_SUITES'            => 'Ihr Webserver/Ihre Webseite ist so konfiguriert, dass eine anonyme Verschlüsselungsmethodik ([[Cipher Suite]]) ohne Authentikation bei der Verbindung erfolgt. Dies ermöglicht [[Man-in-the-middle|Man-in-the-Middle Attacken]].',
  //
  // DES_SUITES
  'DES_SUITES'            => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES  (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.',
  //
  // EXPIRED
  'EXPIRED'            => 'Ihr Zertifikat ist am %DATE% abgelaufen. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt.',
  //
  // EXPORT_SUITES
  'EXPORT_SUITES'            => 'Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass sich vorsätzlich geschwächte kryptographische Funktionen ([[Cipher Suite|Cipher Suites]]) nutzen lassen. Dies ermöglicht [[Man-in-the-Middle|Man-in-the-Middle Attacken]].',
  //
  // HASH_ALGO
  'HASH_ALGO'            => 'Ihr Server-Zertifikat nutzt den schwachen Hash-Algorithmus %HASH%. Das Zertifikat kann so sehr einfach gefälscht werden. Ein Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen Hash-Algorithmus jedoch nicht.',
  //
  // HTTPS_RESPONSE
  'HTTPS_RESPONSE'            => 'Der Server “%HOST%“ scheint überhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?',
  //
  // HTTPS_SUPPORTED
  'HTTPS_SUPPORTED'            => 'Der Server “%HOST%“ scheint kein TLS zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten von ihnen und die ihrer Kunden zu schützen.',
  //
  // NOT_YET_VALID
  'NOT_YET_VALID'            => 'Ihr Zertifikat wird erst am %DATE% gültig. Ihre Webseite wird Besuchern bis dahin als unsicher bzw. nicht vertrauenswürdig angezeigt.',
  //
  // NULL_SUITES
  'NULL_SUITES'            => 'Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass zugelassen wird das unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht [[Man-in-the-middle|Man-in-the-Middle Attacken]].',
  //
  // RC4_SUITES
  'RC4_SUITES'            => 'Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 ([[Ciper Suite|Cipher Suites]]) weiterhin unterstützt. Dies ermöglicht [[Man-in-the-Middle|Man-in-the-Middle Attacken]].',
  //
  // Category: XSS-Scanner
  //
  // HAS_SINKS
  'HAS_SINKS'            => 'Überprüfung des JavaScript-Codes nach DOMXSS-Sinks',
  'HAS_SINKS_SUCCESS'    => 'Automatisiert wurden keine unsicheren Codebestandteile für DOMXSS-Sinks erkannt.',
  'HAS_SINKS_ERROR'      => 'Unsicheren JavaScript-Code verwendet (Sinks)',
  'HAS_SINKS_ERROR_DESC' => 'Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der unter bestimmten Voraussetzungen auf eine DOM-basierende Cross-Site Scripting Anfälligkeit hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen.',
  'HAS_SINKS_TIPS'       => 'Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.',
  'HAS_SINKS_LINK'       => 'https://siwecos.de/wiki/DOMXSS-Schwachstelle/DE',
  //
  // HAS_SOURCES
  'HAS_SOURCES'            => 'Überprüfung des JavaScript-Codes nach DOMXSS-Sources',
  'HAS_SOURCES_SUCCESS'    => 'Automatisiert wurden keine unsicheren Codebestandteile für DOMXSS-Sources erkannt.',
  'HAS_SOURCES_ERROR'      => 'Unsicheren JavaScript-Code verwendet (Sources)',
  'HAS_SOURCES_ERROR_DESC' => 'Bei der Überprüfung wurde mindestens eine Schwachstelle auf der Webseite gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte.',
  'HAS_SOURCES_TIPS'       => 'Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.',
  'HAS_SOURCES_LINK'       => 'https://siwecos.de/wiki/Schadcode-Ueber-Fremde-Quellen/DE',
  //
  // Category: Zertifikate
  //
  // CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED'            => 'Überprüfung der Zertifikat Laufzeit',
  'CERTIFICATE_EXPIRED_SUCCESS'    => 'Zertifikat nicht abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR'      => 'Zertifikat abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr <a href="https://siwecos.de/wiki/Zertifikate/DE" target="siwecos_wiki" class="wikI">Server-Zertifikat</a>t abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über <a href="https://siwecos.de/wiki/HTTPS/DE" target="siwecos_wiki" class="wikI">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt, z.B. "Ihr Zertifikat ist am Datum abgelaufen". Die Seite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt.',
  'CERTIFICATE_EXPIRED_TIPS'       => 'Dieses Problem lässt sich lösen, indem Sie das eingesetzte [[Zertifikate|Zertifikat]] erneuern. Wie Sie Zertifikate verlängern können, lesen Sie hier: [https://www.siwecos.de/wiki/Zertifikate#Was_tun.2C_wenn_ein_SSL-Zertifikat_abgelaufen_ist.3F Zertifikat abgelaufen]',
  'CERTIFICATE_EXPIRED_LINK'       => 'https://siwecos.de/wiki/Zertifikat-Abgelaufen/DE',
  //
  // CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER'            => 'Überprüfung der Zertifikatsübermittlung',
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => 'Server sendet ein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => 'Server sendet kein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => 'Der Server hat kein <a href="https://siwecos.de/wiki/Zertifikate/DE" target="siwecos_wiki" class="wikI">Zertifikat</a> gesendet. Dies ist ungewöhnlich und sollte eigentlich nicht vorkommen. Der Server sollte seine <a href="https://siwecos.de/wiki/Transport_Layer_Security/DE" target="siwecos_wiki" class="wikI">TLS-Konfiguration</a> überprüfen und ggfs. <a href="https://siwecos.de/wiki/CIPHERSUITE_ANON/DE" target="siwecos_wiki" class="wikI">anonyme Ciphersuites</a> ausschalten.',
  'CERTIFICATE_NOT_SENT_BY_SERVER_TIPS'       => 'Aktualisieren Sie dringend die von Ihnen eingesetzte [[Transport_Layer_Security|TLS-Implementierung]]. Moderne Software erlaubt diese Art der Konfiguration nicht mehr.',
  'CERTIFICATE_NOT_SENT_BY_SERVER_LINK'       => 'https://siwecos.de/wiki/Zertifikat-Nicht-Gesendet/DE',
  //
  // CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET'            => 'Überprüfung der Zertifikat Gültigkeit',
  'CERTIFICATE_NOT_VALID_YET_SUCCESS'    => 'Zertifikat ist schon gültig',
  'CERTIFICATE_NOT_VALID_YET_ERROR'      => 'Zertifikat noch nicht gültig',
  'CERTIFICATE_NOT_VALID_YET_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr <a href="https://siwecos.de/wiki/Zertifikate/DE" target="siwecos_wiki" class="wikI">Server-Zertifikat</a> noch nicht gültig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt. Sollte ein Nutzer Ihre Webseite über <a href="https://siwecos.de/wiki/HTTPS/DE" target="siwecos_wiki" class="wikI">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.',
  'CERTIFICATE_NOT_VALID_YET_TIPS'       => 'Deaktivieren Sie das [[Zertifikate|Zertifikat]] solange es \'\'\'noch nicht\'\'\' gültig ist. Ihre Webseite ist dann zwar nicht zertifiziert, jedoch erhalten Besucher zumindest keine Warnmeldung beim Aufruf Ihrer Webseite. Alternativ bietet sich die Möglichkeit an, Ihr altes [[Zertifikate|Zertifikat]] einzusetzen, so lange dies noch gültig ist. Wie Sie [[Zertifikate|Zertifikate]] verlängern können, lesen Sie hier: [[CERTIFICATE_EXPIRED|Zertifikat abgelaufen]].',
  'CERTIFICATE_NOT_VALID_YET_LINK'       => 'https://siwecos.de/wiki/Zertifikat-Nicht-Gueltig/DE',
  //
  // CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION'            => 'Überprüfung der Verschlüsselungsstärke des Zertifikats.',
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => 'Starker Hash-Algorithmus',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => 'Schwacher Hash-Algorithmus',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat einen schwachen Hash-Algorithmus (Verschlüsselung) besitzt. Es stellt möglicherweise ein leichtes Ziel für Hacker-Angriffe dar.',
  'CERTIFICATE_WEAK_HASH_FUNCTION_TIPS'       => 'Um dieses Problem zu lösen sollten sie ein neues Zertifikat mit einer sicheren Hash-Funktion (starke Verschlüsselung) installieren. Wie Sie ein sicheres Zertifikat bekommen, lesen Sie hier: [[Zertifikate#Wie_wird_ein_SSL-Zertifikat_installiert.3F|Zertifikat installieren]].',
  'CERTIFICATE_WEAK_HASH_FUNCTION_LINK'       => 'https://siwecos.de/wiki/Schwache-Verschluesselung/DE',
  //
  // CERTIFICATE_WEAK_SIGN_ALGO
  'CERTIFICATE_WEAK_SIGN_ALGO'            => 'Überprüfung der Zertifikat Verschlüsselung',
  //
  // CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS
  'CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS'            => 'Überprüfung der Zertifikat Verschlüsselung',

];
