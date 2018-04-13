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
  'PHISING_FOUND'            => "Ihre Domain ‘%site%’ wurde in folgenden Phising-Listen gefunden:&#160;%where%\n",
  //
  // Category: Angriffe
  //
  // BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE'            => "Überprüfung auf Bleichenbacher Schwachstelle\n",
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch Bleichenbacher (ROBOT)\n",
  'BLEICHENBACHER_VULNERABLE_ERROR'      => "Verwundbar durch Bleichenbacher (ROBOT)\n",
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch einen Bleichenbacher Angriff(ROBOT). Hierbei kann die Kommunikation entschlüsselt und bei der Übertragung die Nutzereingaben wie Passwörter im Klartext gelesen werden.\n</p>",
  'BLEICHENBACHER_VULNERABLE_TIPS'       => "<p>Überprüfen Sie Ihr Zertifikat bzw. spielen sie umgehend ein Update für ihre TLS-Verschlüsselung auf ihren Server ein.\n</p>",
  'BLEICHENBACHER_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Bleichenbacher-Schwachstelle/DE",
  //
  // CRIME_VULNERABLE
  'CRIME_VULNERABLE'            => "Überprüfung auf die CRIME Schwachstelle\n",
  'CRIME_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch CRIME\n",
  'CRIME_VULNERABLE_ERROR'      => "Verwundbar durch CRIME\n",
  'CRIME_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch CRIME. Ein Angriff welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>",
  'CRIME_VULNERABLE_TIPS'       => "<p>CRIME kann besiegt werden, indem die Verwendung von Komprimierung verhindert wird. Entweder auf der Client-Seite, indem der Browser die Komprimierung von SPDY-Anfragen deaktiviert, oder indem die Website die Verwendung von Datenkompression bei solchen Transaktionen unter Verwendung der Protokollaushandlungsmerkmale des TLS-Protokolls verhindert.\n</p>",
  'CRIME_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Crime-Schwachstelle/DE",
  //
  // HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE'            => "Überprüfung auf die Heartbleed Schwachstelle.\n",
  'HEARTBLEED_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch Heartbleed\n",
  'HEARTBLEED_VULNERABLE_ERROR'      => "Verwundbar durch Heartbleed\n",
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch Heartbleed. Dadurch kann ein Angreifer sensible Daten aus dem Arbeitsspeicher des Servers auslesen, wie z.B. geheime Schlüssel und Kundendaten.\n</p>",
  'HEARTBLEED_VULNERABLE_TIPS'       => "<p>Spielen sie umgehend ein Update für ihre TLS Verschlüsselung auf ihren Server ein.\n</p>",
  'HEARTBLEED_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE",
  //
  // INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE'            => "Überprüfung auf die Ephemeral Invalid Curve Schwachstelle.\n",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch Ephemeral Invalid Curve Angriffe\n",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => "Verwundbar durch Ephemeral Invalid Curve Angriffe\n",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch einen Ephemeral Invalid Curve Angriff. Dadurch kann ein Angreifer die Verbindungen angreifen.\n</p>",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_TIPS'       => "<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.\n</p>",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE",
  //
  // INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE'            => "Überprüfung auf die Invalid Curve Schwachstelle\n",
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch Invalid Curve Angriffe\n",
  'INVALID_CURVE_VULNERABLE_ERROR'      => "Verwundbar durch Invalid Curve Angriffe\n",
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch einen Invalid Curve Angriff. Dadurch kann ein Angreifer den geheimen Schlüssel ihres Zertifikats stehlen.\n</p>",
  'INVALID_CURVE_VULNERABLE_TIPS'       => "<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.\n</p>",
  'INVALID_CURVE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Invalid-Curve-Schwachstelle/DE",
  //
  // PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE'            => "Überprüfung auf die Padding-Oracle Schwachstelle\n",
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch Padding Oracle Angriffe\n",
  'PADDING_ORACLE_VULNERABLE_ERROR'      => "Verwundbar durch Padding Oracle Angriffe\n",
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch einen Padding-Oracle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>",
  'PADDING_ORACLE_VULNERABLE_TIPS'       => "<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.\n</p>",
  'PADDING_ORACLE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/PADDING-ORACLE-Schwachstelle/DE",
  //
  // POODLE_VULNERABLE
  'POODLE_VULNERABLE'            => "Überprüfung auf die POODLE Schwachstelle\n",
  'POODLE_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch Poodle\n",
  'POODLE_VULNERABLE_ERROR'      => "Verwundbar durch Poodle\n",
  'POODLE_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch einen Poodle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>",
  'POODLE_VULNERABLE_TIPS'       => "<p>Deaktivieren Sie umgehend das veraltete Verschlüsselungsprotokoll SSL3 auf ihrem Server!\n</p>",
  'POODLE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/TLS-POODLE-Schwachstelle/DE",
  //
  // SWEET32_VULNERABLE
  'SWEET32_VULNERABLE'            => "Überprüfung auf SWEET32 Schwachstelle\n",
  'SWEET32_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch SWEET32\n",
  'SWEET32_VULNERABLE_ERROR'      => "Verwundbar durch SWEET32\n",
  'SWEET32_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch SWEET32, welcher es einem Angreifer erlaubt teile der Kommunikation zu entschlüsseln falls über eine Verbindung große Mengen Daten transferiert werden.\n</p>",
  'SWEET32_VULNERABLE_TIPS'       => "<p>Deaktivieren Sie <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.itwissen.info/Blockchiffre-block-cipher.html\">Blockchiffren</a> mit einer Länge von 64 Bit. Vergewissern Sie sich, das Protokolle wie SSLv2 und SSLv3 deaktiviert sind.\n</p>",
  'SWEET32_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Sweet32-Schwachstelle/DE",
  //
  // TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE'            => "Überprüfung auf die TLS-POODLE Schwachstelle\n",
  'TLS_POODLE_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch TLS-Poodle\n",
  'TLS_POODLE_VULNERABLE_ERROR'      => "Verwundbar durch TLS-Poodle\n",
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch eine Variante des Poodle Angriffs auf TLS, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>",
  'TLS_POODLE_VULNERABLE_TIPS'       => "<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein. In der Apache-Konfiguration etwa kann man etwa die Zeile \"SSLProtocol All -SSLv2 -SSLv3 \" angeben.\n</p>",
  'TLS_POODLE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Tls-Poodle-Schwachstelle/DE",
  //
  // Category: Fehler
  //
  // SCANNER_TIMEOUT
  'SCANNER_TIMEOUT'            => "Der Scanner \"%scanner%\" wurde nach&#160;%timeoutvalue% Sekunden beendet, weil er kein Ergebnis geliefert hat.\n",
  //
  // TIMEOUT
  'TIMEOUT'            => "Zeitüberschreitung\n",
  'TIMEOUT_ERROR'      => "Der Scan hat kein Ergebnis geliefert und wurde deswegen abgebrochen.\n",
  'TIMEOUT_ERROR_DESC' => "<p>Eine Zeitüberschreitung bedeutet, dass der Scan ihrer Domain länger dauerte als ein Scan üblicherweise dauert.\n</p><p>Ursachen hierfür können unter anderem sein:\n</p><p>Ihr Server ist momentan nicht erreichbar oder überlastet\n</p><p>Unser Scanner Server ist momentan überlastet\n</p>",
  //
  // Category: Fehlermeldung
  //
  // DONT_LEAK_USER_CREDS
  'DONT_LEAK_USER_CREDS'            => "Sie sollten ihre Zugangsdaten (Name und Passwort) nicht übermitteln.\n",
  //
  // HEADER_NOT_SET
  'HEADER_NOT_SET'            => "Der Header ist nicht gesetzt.\n",
  //
  // HEADER_SET_MULTIPLE_TIMES
  'HEADER_SET_MULTIPLE_TIMES'            => "Der Header wurde mehrmals gesetzt.\n",
  //
  // JSON_DECODE_ERROR
  'JSON_DECODE_ERROR'            => "Es gibt hier einen Jason Übersetzungsfehler.\n",
  //
  // LOCALHOST_SCAN_NOT_ALLOWED
  'LOCALHOST_SCAN_NOT_ALLOWED'            => "Die lokale Überprüfung ist nicht erlaubt.\n",
  //
  // MAX_AGE_ERROR
  'MAX_AGE_ERROR'            => "Es trat ein Fehler beim Überprüfen der `max-age`-Angabe auf.\n",
  //
  // NOT_REACHABLE
  'NOT_REACHABLE'            => "Nicht erreichbar.\n",
  //
  // NO_HTTP_RESPONSE
  'NO_HTTP_RESPONSE'            => "Die angegebene URL lieferte keine Antwort.\n",
  //
  // NO_SOURCE_CODE
  'NO_SOURCE_CODE'            => "Keine Quelle gefunden.\n",
  //
  // NO_VALID_URL
  'NO_VALID_URL'            => "Die Internetadresse (URL) ist nicht gültig.\n",
  //
  // PORT_DISALLOWED
  'PORT_DISALLOWED'            => "Dieser Port ist nicht erlaubt.\n",
  //
  // REDIRECT_ERROR
  'REDIRECT_ERROR'            => "Es gibt einen Umleitungsfehler.\n",
  //
  // SCORE_info
  'SCORE_info'            => "Info\n",
  //
  // Category: Generell
  //
  // HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED'            => "Überprüfung der Reaktionszeit des HTTP Headers\n",
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => "Server spricht TLS\n",
  'HTTPS_NOT_SUPPORTED_ERROR'      => "Server scheint kein TLS zu sprechen\n",
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => "<p>Der Server scheint kein TLS (Transportschichtsicherheit) zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten und die ihrer Kunden zu schützen.\n</p>",
  'HTTPS_NOT_SUPPORTED_TIPS'       => "<p>Aktivieren sie TLS (Transportschichtsicherheit)\n</p>",
  'HTTPS_NOT_SUPPORTED_LINK'       => "https://siwecos.de/wiki/Keine-TLS-Unterstuetzung/DE",
  //
  // HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE'            => "Überprüfung der Reaktionszeit des HTTPS Headers\n",
  'HTTPS_NO_RESPONSE_SUCCESS'    => "Server antwortet\n",
  'HTTPS_NO_RESPONSE_ERROR'      => "Server antwortet nicht\n",
  'HTTPS_NO_RESPONSE_ERROR_DESC' => "<p>Der Server scheint nicht zu antworten. Haben sie die Domain richtig eingegeben?\n</p>",
  'HTTPS_NO_RESPONSE_TIPS'       => "<p>Bitte überprüfen Sie Ihre Eingabe auf Eingabefehler.\n</p>",
  'HTTPS_NO_RESPONSE_LINK'       => "https://siwecos.de/wiki/Reaktionszeit-Ueberschritten/DE",
  //
  // SCORE_bonus
  'SCORE_bonus'            => "Bonus\n",
  //
  // SCORE_critical
  'SCORE_critical'            => "Critical\n",
  //
  // SCORE_hidden
  'SCORE_hidden'            => "Versteckt\n",
  //
  // SCORE_success
  'SCORE_success'            => "Erfolgreich\n",
  //
  // SCORE_warning
  'SCORE_warning'            => "Warnung\n",
  //
  // Category: HSHS_DOMXSS
  //
  // CSP_CORRECT
  'CSP_CORRECT'            => "Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // CSP_LEGACY_HEADER_SET
  'CSP_LEGACY_HEADER_SET'            => "Der veraltete Header `X-Content-Security-Policy` ist gesetzt. Der neue standardisierte Header ist `Content-Security-Policy`.\n",
  //
  // CSP_NO_UNSAFE_INCLUDED
  'CSP_NO_UNSAFE_INCLUDED'            => "Der Header ist korrekt gesetzt und enthält keine `unsafe-`-Direktiven.\n",
  //
  // CSP_UNSAFE_INCLUDED
  'CSP_UNSAFE_INCLUDED'            => "Der Header ist unsicher gesetzt, da er `unsafe-inline`- oder `unsafe-eval`-Direktiven enthält.\n",
  //
  // CT_CORRECT
  'CT_CORRECT'            => "Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // CT_HEADER_WITHOUT_CHARSET
  'CT_HEADER_WITHOUT_CHARSET'            => "Der Header ist ohne Zeichensatzangabe gesetzt und dadurch nicht sicher.\n",
  //
  // CT_HEADER_WITH_CHARSET
  'CT_HEADER_WITH_CHARSET'            => "Der Header ist korrekt gesetzt und beinhaltet eine Zeichensatz-Angabe.\n",
  //
  // CT_META_TAG_SET
  'CT_META_TAG_SET'            => "Die Header-Angabe ist via `&lt;meta&gt;`-Tag gesetzt, enthält jedoch keine Zeichensatz-Angabe oder folgt nicht den Empfehlungen.\n",
  //
  // CT_META_TAG_SET_CORRECT
  'CT_META_TAG_SET_CORRECT'            => "Die Header-Angabe ist via `&lt;meta&gt;`-Tag gesetzt und entspricht den Empfehlungen.\n",
  //
  // CT_WRONG_CHARSET
  'CT_WRONG_CHARSET'            => "Ein falscher oder ungültiger Zeichensatz wurde eingetragen. Die Konfiguration ist nicht sicher.\n",
  //
  // HPKP_LESS_15
  'HPKP_LESS_15'            => "Die öffentlichen Schlüssel sind für weniger als 15 Tage gepinnt.\n",
  //
  // HPKP_MORE_15
  'HPKP_MORE_15'            => "Die öffentlichen Schlüssel sind für mehr als 15 Tage gepinnt.\n",
  //
  // HPKP_REPORT_URI
  'HPKP_REPORT_URI'            => "Eine `report-uri` ist gesetzt.\n",
  //
  // HSTS_LESS_6
  'HSTS_LESS_6'            => "Der Wert von `max-age` ist kleiner als 6 Monate.\n",
  //
  // HSTS_MORE_6
  'HSTS_MORE_6'            => "Der Wert von `max-age` ist größer als 6 Monate.\n",
  //
  // HSTS_PRELOAD
  'HSTS_PRELOAD'            => "Die `preload`-Direktive ist gesetzt.\n",
  //
  // INCLUDE_SUBDOMAINS
  'INCLUDE_SUBDOMAINS'            => "`includeSubDomains` ist gesetzt.\n",
  //
  // NO_SINKS_FOUND
  'NO_SINKS_FOUND'            => "Es wurden keine „Sinks“ gefunden.\n",
  //
  // NO_SOURCES_FOUND
  'NO_SOURCES_FOUND'            => "Es wurden keine „Sources“ gefunden.\n",
  //
  // SINKS_FOUND
  'SINKS_FOUND'            => "Es wurden „Sinks“ gefunden.\n",
  //
  // SOURCES_FOUND
  'SOURCES_FOUND'            => "Es wurden „Sources“ gefunden.\n",
  //
  // XCTO_CORRECT
  'XCTO_CORRECT'            => "Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // XCTO_NOT_CORRECT
  'XCTO_NOT_CORRECT'            => "Der Header ist nicht korrekt gesetzt.\n",
  //
  // XFO_CORRECT
  'XFO_CORRECT'            => "Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // XFO_WILDCARDS
  'XFO_WILDCARDS'            => "Der Header enthält Wildcard-Angaben (*) und ist daher nicht sicher konfiguriert.\n",
  //
  // XXSS_BLOCK
  'XXSS_BLOCK'            => "Die `mode=block`-Direktive ist aktiviert.\n",
  //
  // XXSS_CORRECT
  'XXSS_CORRECT'            => "Der Header ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // Category: HTTP-Security-Header-Scanner
  //
  // CONTENT_SECURITY_POLICY
  'CONTENT_SECURITY_POLICY'            => "Überprüfung der Content Security Policy (CSP)\n",
  'CONTENT_SECURITY_POLICY_SUCCESS'    => "Eine sichere Konfiguration der Content Security Policy (CSP) wurde gefunden.\n",
  'CONTENT_SECURITY_POLICY_ERROR'      => "Content Security Policy Inaktiv\n",
  'CONTENT_SECURITY_POLICY_ERROR_DESC' => "<p>Die Content-Security-Policy ist ein Sicherheitskonzept, welches das Injizieren und Auszuführen von evtl. bösartigen Befehlen in eine Webanwendung (Content-Injection-Angriffe) mildern soll. Es stellt über eine Whitelist (Liste erlaubter Quellen) dar, von welchen <a href=\"/wiki/Quellen\" title=\"Quellen\">Quellen</a> Javascripte, Bilder, Schriftarten und andere Inhalte auf Ihrer Seite eingebunden werden dürfen.\n</p>",
  'CONTENT_SECURITY_POLICY_TIPS'       => "<p>Verwenden Sie den CSP mit default-src 'none' und ohne unsicher-eval oder unsicher-inline-Richtlinien. Mehr zu <b>Content Security Policy</b> (zu deutsch etwa \"Richtlinie für die Sicherheit der Inhalte\") finden Sie bei <b><a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://wiki.selfhtml.org/wiki/Sicherheit/Content_Security_Policy\">SELFHTML&gt;&gt;</a></b>\n</p><p><br />\n--snip<br />\n</p><p><b>Beispiele für den Header der Startseite:</b>\n</p>\n<pre>\n&lt;meta http-equiv=\"Content-Security-Policy\" content=\"default-src 'self'; script-src 'self'\"&gt;\n&lt;meta http-equiv=\"X-Content-Security-Policy\" content=\"default-src 'self'; script-src 'self'\"&gt;\n&lt;meta http-equiv=\"X-WebKit-CSP\" content=\"default-src 'self'; script-src 'self'\"&gt;</pre>\n<p><b>Konfiguration des Webservers</b>\n</p><p>Wenn man seinen eigenen Webserver konfigurieren kann, was bei günstigen Hostingangeboten in aller Regel nicht der Fall ist, dann gibt es diese Einstellungsmöglichkeit über die <b>Bearbeitung der .htaccess</b>:\n</p>\n<pre># Download / Lade Inhalte nur von Seiten die explizit erlaubt sind\n# Beispiel: Alles von der eigenen Domain erlauben, keine Externas:\n\nHeader set Content-Security-Policy \"default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self'; style-src 'self';\"\n\n</pre>\n<p>--snap\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/Htaccess\">.htaccess-Beispiel</a>)\n</p>",
  'CONTENT_SECURITY_POLICY_LINK'       => "https://siwecos.de/wiki/Content-Security-Policy-Schwachstelle/DE",
  //
  // CONTENT_TYPE
  'CONTENT_TYPE'            => "Überprüfung des HTTP Content-Types\n",
  'CONTENT_TYPE_SUCCESS'    => "Die Content Type Angabe ist korrekt konfiguriert.\n",
  'CONTENT_TYPE_ERROR'      => "Inkorekte HTTP Content-Type Konfiguration\n",
  'CONTENT_TYPE_ERROR_DESC' => "<p>Der Content-Type ist eine Angabe, die für gewöhnlich im Kopfbereich der Webseite, dem sogenannten HTTP-Header, untergebracht wird. Durch diese Angaben wird der Zeichensatz und der Typ des Inhalts der Seite definiert. Sollte eine Definition fehlen, wird der Webbrowser versuchen den Content-Type zu erraten; dies kann zu Sicherheitslücken wie Code-Page-Sniffing führen. Diese Angaben sind zudem wichtig, damit die Webseite in jedem <a href=\"/wiki/Browser\" title=\"Browser\">Browser</a> und auf jedem Computer einwandfrei dargestellt wird. Wenn ein Server ein Dokument an einen <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://de.wikipedia.org/wiki/User_Agent\">User-Agent</a> sendet (zum Beispiel zum <a href=\"/wiki/Browser\" title=\"Browser\">Browser</a>) ist es nützlich, im Content-Type-Feld des HTTP-Header die Art des Dateiformates zu hinterlegen. Diese Informationen deklarieren den <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://de.wikipedia.org/wiki/Internet_Media_Type\">MIME-Typ</a> und senden entsprechend die Zeichenkodierung des Dokuments wie text/html, text/plain, etc. an den Browser.\n</p>",
  'CONTENT_TYPE_TIPS'       => "<p>Fügen sie den entsprechenden HTTP-Header oder alternativ ein &lt;meta&gt; Tag hinzu. Bitte beachten Sie, dass &lt;meta&gt; im Gegensatz zu einem HTTP-Header leichter angegriffen werden kann.\n</p><p><b>text/html; charset=utf-8</b>;\n</p><p><b>--snip</b>\n</p>\n<pre>&lt;meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"&gt;</pre>\n<p><b>—snap</b>\n</p><p><br />\nWeiterhin muß der Server selber konfiguriert werden, damit die <b>richtige charset-Information</b> gesendet wird. Dazu benötigt werden entsprechende Berechtigungen benötigt um die Änderungen am Server durchführen zu können. Weiter Informationen zu den verschiedenen Serverkonfigurationen finden Sie auf den Seiten von <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.w3.org/International/articles/http-charset/index.de\">W3.org</a>.\n</p><p>Darüber hinaus gibt es auch die Möglichkeit die <b>richtige charset-Information</b> der <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"http://httpd.apache.org/docs/2.0/howto/htaccess.html\"><b>.htaccess</b></a> zu übergeben, welche die Angaben im HTTP-Header überschreiben. <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.w3.org/International/questions/qa-htaccess-charset\">charset in .htaccess</a>\n</p><p><b>In die .htaccess eintragen:</b>\n</p>\n<pre>AddType 'text/html; charset=UTF-8' html</pre>\n<p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/Htaccess\">.htaccess-Beispiel</a>)\n</p>",
  'CONTENT_TYPE_LINK'       => "https://siwecos.de/wiki/Content-Type-Nicht-Korrekt/DE",
  //
  // PUBLIC_KEY_PINS
  'PUBLIC_KEY_PINS'            => "Überprüfung des Public Key Pinning (HPKP)\n",
  'PUBLIC_KEY_PINS_SUCCESS'    => "Public-Key-Pinning ist aktiviert\n",
  'PUBLIC_KEY_PINS_ERROR'      => "Public-Key-Pinning nicht vorhanden.\n",
  'PUBLIC_KEY_PINS_ERROR_DESC' => "<p>Mächtige Angreifer wie bspw. Geheimdienste können ggf. eine Signatur, mit der Hilfe einer von den Benutzern akzeptierten Zertifizierungsstelle, erstellen lassen. Um dies zu verhindern kann eine Webseite definieren, dass beim ersten Aufruf des Zertifikats das Zertifikat dauerhaft gespeichert (pinning). Mit der Hilfe von Key-Pinning wird für die von der Webseiten definierten Zeit lediglich das gespeicherte Zertifikat akzeptiert.\n</p>",
  'PUBLIC_KEY_PINS_TIPS'       => "<p>pin-sha256=\"&lt;HASH&gt;\"; pin-sha256=\"&lt;HASH&gt;\"; max-age=2592000; includeSubDomains;\n<b>HPKP aktivieren</b> - Dieses Feature kann einfach aktiviert werden indem ein Public-Key-Pins HTTP-Header beim Aufruf der Seite über <a href=\"/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a> zurückgegeben wird. (<a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://developer.mozilla.org/de/docs/Web/Security/Public_Key_Pinning\">Weitere Infos</a>).\n</p><p><b>--snip</b>\n</p>\n<pre>Public-Key-Pins: pin-sha256=\"base64==\"; max-age=expireTime [; includeSubdomains][; report-uri=\"reportURI\"]</pre>\n<p><b>--snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/Htaccess\">.htaccess-Beispiel</a>)\n</p>",
  'PUBLIC_KEY_PINS_LINK'       => "https://siwecos.de/wiki/Public-Key-Pins-Deaktiviert/DE",
  //
  // STRICT_TRANSPORT_SECURITY
  'STRICT_TRANSPORT_SECURITY'            => "Überprüfung des HSTS Schutzes\n",
  'STRICT_TRANSPORT_SECURITY_SUCCESS'    => "Ihre Webseite ist ausschließlich über das sichere HTTPS-Protokoll erreichbar. Kommunikation zwischen Ihrer Webseite und den Besuchern kann nicht abgehört und manipuliert werden.\n",
  'STRICT_TRANSPORT_SECURITY_ERROR'      => "HSTS Schutz Fehler\n",
  'STRICT_TRANSPORT_SECURITY_ERROR_DESC' => "<p>Strict-Transport-Security stellt sicher, dass die Webseite für eine bestimmte Zeit lediglich über HTTPS gesicherte Verbindung aufgerufen werden kann. Der Webseitenbetreiber kann diesbezüglich u.a. definieren, wie lange das Zeitinterval ist und ob diese Regelung auch für Subdomains gelten soll.\n</p>",
  'STRICT_TRANSPORT_SECURITY_TIPS'       => "<p>max-age=63072000; includeSubdomains;\nHTTP Strict Transport Security (HSTS) ist ein einfach zu integrierender Web-Security-Policy-Mechanismus.\n</p>\n<b>--snip</b><pre>\n# HTTP Strict Transport Security (HSTS) aktivieren\n# Pflichtangabe: „max-age“\n# Optional: „includeSubDomains“</pre>\n<pre>  <b>Header set Strict-Transport-Security „max-age=31556926, includeSubDomains“</b>\n</pre>\n<p><b>--snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/Htaccess\">.htaccess-Beispiel</a>)\n</p>",
  'STRICT_TRANSPORT_SECURITY_LINK'       => "https://siwecos.de/wiki/Keine-Verschluesselung-Gefunden/DE",
  //
  // X_CONTENT_TYPE_OPTIONS
  'X_CONTENT_TYPE_OPTIONS'            => "Überprüfung des X-Content-Type Headers\n",
  'X_CONTENT_TYPE_OPTIONS_SUCCESS'    => "Der HTTP-Header ist korrekt gesetzt.\n",
  'X_CONTENT_TYPE_OPTIONS_ERROR'      => "X-Content-Type Header fehlt\n",
  'X_CONTENT_TYPE_OPTIONS_ERROR_DESC' => "<p>Die X-Content-Type-Options Einstellungen im Header verhindern, dass der <a href=\"/wiki/Browser\" title=\"Browser\">Browser</a> Dateien als etwas anderes interpretiert, als vom Inhaltstyp im <a href=\"/wiki/HTTP\" title=\"HTTP\">HTTP-Header</a> deklariert wurde. Die Headereinstellungen sind hier nicht gesetzt.\n</p>",
  'X_CONTENT_TYPE_OPTIONS_TIPS'       => "<p>nosniff; <br /><br />\n<b>Beispielcode einer .htaccess auf einem Apache Webserver.</b><br />\n</p>\n<b>--snip</b><pre>\n&lt;IfModule mod_headers.c&gt;\n   # prevent mime based attacks like drive-by download attacks, IE and Chrome\n   '''Header set X-Content-Type-Options „nosniff“'''\n&lt;pre&gt;&lt;/IfModule&gt;</pre>\n<p><b>—snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/Htaccess\">.htaccess-Beispiel</a>)\n</p>",
  'X_CONTENT_TYPE_OPTIONS_LINK'       => "https://siwecos.de/wiki/X-Content-Type-Options-Schwachstelle/DE",
  //
  // X_FRAME_OPTIONS
  'X_FRAME_OPTIONS'            => "Überprüfung der X-Frame Optionen\n",
  'X_FRAME_OPTIONS_SUCCESS'    => "Der Header ist korrekt gesetzt und verbessert den Schutz Ihrer Webseite gegen Clickjacking-Angriffe.\n",
  'X_FRAME_OPTIONS_ERROR'      => "HTTP-Header X-Frame Optionen nicht gesetzt.\n",
  'X_FRAME_OPTIONS_ERROR_DESC' => "<p>X-Frame-Options hilft dabei Angriffe über Framing-Mechanismen zu unterbinden. Dies gewährleistet bspw., dass Clickjacking-Angriffe größtenteils gemildert werden können. Darüber hinaus werden Downgrading-Angriffe wie etwa im Internet Explorer minimiert.\n</p>",
  'X_FRAME_OPTIONS_TIPS'       => "<p>Im HTTP-Header entsprechend den Bedürfnissen setzen. Die <b>X-Frame-Options</b> im <a href=\"/wiki/HTTP\" title=\"HTTP\">HTTP</a> Header kann verwendet werden, um zu bestimmen, ob ein aufrufender <a href=\"/wiki/Browser\" title=\"Browser\">Browser</a> die Zielseite in einem &lt;frame&gt;, &lt;iframe&gt; oder bspw. &lt;object&gt; rendern bzw. einbetten darf. Webseiten können diesen Header verwenden, um u. a. Clickjacking-Angriffe abzuwehren, indem sie unterbinden, dass ihr Content in fremden Seiten eingebettet wird.\n</p><p>Mit dem HTTP-Header Befehl X-Frame-Options können moderne Webbrowser angewiesen werden, eine Seite nicht in einem Frame auf einer andere Website zu laden. Dafür muss der folgende Befehl in der htaccess-Datei gesetzt werden:\n</p><p>Header always append X-Frame-Options DENY\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options DENY\n</pre>\n<p><b>—snap</b>\n</p><p>Alternativ kann erlaubt werden, dass die Seite nur auf anderen Seiten der gleichen Domain eingebunden werden dürfen:\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options SAMEORIGIN\n</pre>\n<p><b>—snap</b>\n</p><p>Falls eine Website doch extern eingebunden werden muss, kann eine Domain angegeben werden:\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options ALLOW-FROM botfrei.de\n</pre>\n<p><b>—snap</b>\n</p><p><br />\nHier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/Htaccess\">.htaccess-Beispiel</a>)\n</p>",
  'X_FRAME_OPTIONS_LINK'       => "https://siwecos.de/wiki/X-Frame-Options-Schwachstelle/DE",
  //
  // X_XSS_PROTECTION
  'X_XSS_PROTECTION'            => "Überprüfung ob der Cross-Site Scripting Filter aktiviert und korrekt konfiguriert ist.\n",
  'X_XSS_PROTECTION_SUCCESS'    => "Der Cross-Site-Scripting (XSS) -Schutz des Webbrowsers ist auf Ihrer Seite aktiviert.\n",
  'X_XSS_PROTECTION_ERROR'      => "Cross-Site-Scripting Schutz nicht aktiviert oder unzureichend konfiguriert.\n",
  'X_XSS_PROTECTION_ERROR_DESC' => "<p>Der HTTP-Header X-XSS-Protection definiert wie in Browser eingebaute XSS-Filter konfiguriert werden. Eine Default-Installation kann eine unzureichende Konfiguration offenbaren.\n</p>",
  'X_XSS_PROTECTION_TIPS'       => "<p>1; mode=block\n</p><p><b>Beispielcode einer .htaccess auf einem Apache Webserver.</b>\n</p>\n<b>--snip</b><br /><pre>\n   # Turn on XSS prevention tools, activated by default in IE and Chrome\n   '''Header set X-XSS-Protection „1; mode=block“'''\n</pre>\n<p><b>—snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.\n(<a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/Htaccess\">.htaccess-Beispiel</a>)\n</p>",
  'X_XSS_PROTECTION_LINK'       => "https://siwecos.de/wiki/XSS-Schwachstelle/DE",
  //
  // Category: INI_S
  //
  // MALWARE_FOUND
  'MALWARE_FOUND'            => "Ihre Domain ‘%site%’ wurde in folgenden Malware-Listen gefunden:&#160;%where%\n",
  //
  // PHISHING_FOUND
  'PHISHING_FOUND'            => "Ihre Domain ‘%site%’ wurde in folgenden Phising-Listen gefunden:&#160;%where%\n",
  //
  // SPAM_FOUND
  'SPAM_FOUND'            => "Ihre Domain ‘%site%’ wurde in folgenden Spam-Listen gefunden:&#160;%where%\n",
  //
  // Category: Infoleak
  //
  // CMS_ONLY
  'CMS_ONLY'            => "Das verwendete CMS&#160;%cms% wurde erkannt.\n",
  //
  // CMS_VERSION
  'CMS_VERSION'            => "Das verwendete CMS&#160;%cms% und dessen Version&#160;%version% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.\n",
  //
  // CMS_VERSION_VULN
  'CMS_VERSION_VULN'            => "Das verwendete CMS&#160;%cms% der Version&#160;%version% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.\n",
  //
  // EMAIL_FOUND
  'EMAIL_FOUND'            => "Die Email-Adresse&#160;%email_adress% wurde gefunden. Wollen Sie diese Email-Adresse wirklich veröffentlichen? Ein Angreifer kann dies für bspw. Phising-Angriffe nutzen.\n",
  //
  // JS_LIB_ONLY
  'JS_LIB_ONLY'            => "Die verwendete JavaScript-Bibliothek&#160;%js_lib_name% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt.\n",
  //
  // JS_LIB_VERSION
  'JS_LIB_VERSION'            => "Die verwendete JavaScript-Bibliothek&#160;%js_lib_name% mit der Version&#160;%js_lib_version% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.\n",
  //
  // JS_LIB_VULN_VERSION
  'JS_LIB_VULN_VERSION'            => "Die verwendete JavaScript-Bibliothek&#160;%js_lib_name% mit der Version&#160;%js_lib_version% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.\n",
  //
  // NUMBER_FOUND
  'NUMBER_FOUND'            => "Die Telefonnummer&#160;%number% wurde gefunden. Wollen Sie diese Telefonnummer wirklich veröffentlichen? Ein Angreifer kann diese bspw. für Phishing-Angriffe nutzen.\n",
  //
  // PLUGIN_ONLY
  'PLUGIN_ONLY'            => "Das verwendete CMS-Plugin&#160;%plugin% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt.\n",
  //
  // PLUGIN_VERSION
  'PLUGIN_VERSION'            => "Das verwendete CMS-Plugin&#160;%plugin% mit der Version&#160;%plugin_version% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.\n",
  //
  // PLUGIN_VERSION_VULN
  'PLUGIN_VERSION_VULN'            => "Das verwendete CMS-Plugin&#160;%plugin% der Version&#160;%plugin_version% in DOM-node&#160;%node% mit dem Inhalt&#160;%node_content% erkannt. Für diese Version ist eine Schwachstelle bekannt.\n",
  //
  // Category: Information-Leakage-Scanner
  //
  // CMS
  'CMS'            => "Überprüfung auf Erkennbarkeit des verwendeten CMS.\n",
  'CMS_SUCCESS'    => "Falls Sie ein CMS verwenden, kann dieses nicht automatisiert erkannt werden.\n",
  'CMS_ERROR'      => "Content Management System (CMS) erkennbar\n",
  'CMS_ERROR_DESC' => "<p>Das verwendete <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/Content-Management-Systeme\">Content Management System</a> kann identifiziert werden. Diese Information könnte von einem Angreifer genutzt werden, um gezielt nach Schwachstellen für dieses spezielle CMS zu suchen.\n</p>",
  'CMS_TIPS'       => "<p>Halten Sie installierte Webserver und das Content Management System immer auf dem aktuellsten Stand. Manche CMS-Systeme erlauben es Versionsinformationen zu verstecken. Nutzen sie dieses Feature falls verfügbar.\n</p>",
  'CMS_LINK'       => "https://siwecos.de/wiki/Content-Management-System-Gefunden/DE",
  //
  // CMS_PLUGINS
  'CMS_PLUGINS'            => "Überprüfung auf unsichere CMS-Plugins\n",
  'CMS_PLUGINS_SUCCESS'    => "CMS-Plugins können nicht erkannt werden.\n",
  'CMS_PLUGINS_ERROR'      => "CMS Plugin erkannt\n",
  'CMS_PLUGINS_ERROR_DESC' => "<p>Es wurde ein von ihrem CMS-System genutztes Plugin entdeckt. Ein Angreifer könnte diese Information nutzen, um gezielt nach Schwachstellen für ihre Website zu suchen.\n</p>",
  'CMS_PLUGINS_TIPS'       => "<p>Plugins sollten auf jene beschränkt werden, die tatsächlich benötigt werden. Damit kann die Angriffsfläche erheblich reduzieren werden. Zudem sollten installierte Plugins immer auf dem aktuellsten Stand gehalten werden.\n</p>",
  'CMS_PLUGINS_LINK'       => "https://siwecos.de/wiki/Plugin-Gefunden/DE",
  //
  // EMAIL_ADDRESS
  'EMAIL_ADDRESS'            => "Überprüfung auf vorhandene Email-Adressen\n",
  'EMAIL_ADDRESS_SUCCESS'    => "Keine Email-Adressen gefunden.\n",
  'EMAIL_ADDRESS_ERROR'      => "Auslesbare Email-Adresse\n",
  'EMAIL_ADDRESS_ERROR_DESC' => "<p>Ihre Webseite enthält mindestens eine maschinell auslesbare Email-Adresse. Dieses ermöglicht es Dritten, die hinterlegten Email-Adressen automatisiert durch WebCrawler (auch Spider, Searchbot oder Robot) zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufügen.\n</p>",
  'EMAIL_ADDRESS_TIPS'       => "<p>Hinterlegen Sie Ihre Kontaktadressen, bspw. im Impressum wie folgt: mail at siwecos.de / mail @ siwecos.de oder hinterlegen Sie die Information in einer Grafik-Datei.\n</p>",
  'EMAIL_ADDRESS_LINK'       => "https://siwecos.de/wiki/Email-Adresse-Gefunden/DE",
  //
  // JS_LIB
  'JS_LIB'            => "Überprüfung auf unsichere JavaScript-Bibliotheken\n",
  'JS_LIB_SUCCESS'    => "Die JavaScript-Bibliotheken sind nach dem aktuellen Stand voraussichtlich nicht durch bekannte Schwachstellen angreifbar.\n",
  'JS_LIB_ERROR'      => "Unsichere JavaScript-Bibliothek gefunden.\n",
  'JS_LIB_ERROR_DESC' => "<p>Es wurde eine von Ihnen verwendete JavaScript-Bibliothek gefunden. Ein Angreifer könnte diese Information nutzen, um gezielt nach Schwachstellen für Ihre Website zu suchen.\n</p>",
  'JS_LIB_TIPS'       => "<p>Updaten Sie Ihre verwendeten Javascript Bibliotheken.\n</p>",
  'JS_LIB_LINK'       => "https://siwecos.de/wiki/Javascript-Schwachstelle/DE",
  //
  // PHONE_NUMBER
  'PHONE_NUMBER'            => "Überprüfung auf auslesbare Telefonnummern\n",
  'PHONE_NUMBER_SUCCESS'    => "Telefonnummern wurden nicht gefunden.\n",
  'PHONE_NUMBER_ERROR'      => "Telefonnummer gefunden.\n",
  'PHONE_NUMBER_ERROR_DESC' => "<p>Es wurde eine Telefonnummer gefunden. Ein Angreifer könnte diese Information nutzen, um Mitarbeiter zu manipulieren und an Informationen gelangen die Geheim bleiben sollten.\n</p>",
  'PHONE_NUMBER_TIPS'       => "<p>Die veröffentlichten Telefonnummern sollten auf jene beschränkt werden, die auch tatsächlich für die Kommunikation mit Kunden gedacht sind. Außerdem sollte der telefonierende Mitarbeiter sich der Gefahr von Social Engineering Angriffen bewusst sein und die Vorgehensweise von Social Engineers kennen.\n</p>",
  'PHONE_NUMBER_LINK'       => "https://siwecos.de/wiki/Telefonnummer-Gefunden/DE",
  //
  // Category: Initiative-S Scanner
  //
  // MALWARE
  'MALWARE'            => "Überprüfung auf mögliche Malware\n",
  'MALWARE_SUCCESS'    => "Ihre Domain wurde in keiner uns bekannten Malware Liste gefunden.\n",
  'MALWARE_ERROR'      => "Ihre Domain wurde in Malware Listen gefunden\n",
  'MALWARE_ERROR_DESC' => "<p>Malware bezeichnet Software, die dem Benutzer und natürlich in erster Linie dem Computer Schaden zufügen kann. Malware bezeichnet dabei alle Arten von schadhaften Programmen wie etwa Viren, Trojaner, Spyware, Dialer, Dropper, Rootkits und Keylogger.\n</p>",
  'MALWARE_TIPS'       => "<p><b><span style=\"color:#c31622\"> Nehmen Sie die Webseite offline!<span></b>\n</p><p>Bei einem Aufruf der Seite besteht die Gefahr, dass Sie den aufrufenden PC mit Schadsoftware infizieren. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. Sie kommen auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n</p><p><b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />\n</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />\n<b>- Webfrontend (Hosting-Vertrag, Content-Management-System)</b><br />\n<b>- FTP-, SSH-Zugänge</b><br />\n<b>- Datenbank-Passwörter</b><br />\n</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als \"Hintertüren\" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup \"schadcodefrei\" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />\n</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.botfrei.de\">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target=\"_self\" rel=\"nofollow\" class=\"external free\" href=\"https://www.botfrei.de/de/eucleaner/index.html\">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>\n</span>\n</p>",
  'MALWARE_LINK'       => "https://siwecos.de/wiki/Malware-Inhalte/DE",
  //
  // PHISHING
  'PHISHING'            => "Überprüfung auf mögliche Phishing-Inhalte\n",
  'PHISHING_SUCCESS'    => "Ihre Domain wurde in keiner uns bekannten Phising Liste gefunden.\n",
  'PHISHING_ERROR'      => "Ihre Domain wurde in Phising Listen gefunden\n",
  'PHISHING_ERROR_DESC' => "<p>Beim Phishing wird in der Regel trickreich versucht, sensible persönliche Daten wie Passwörter, Kreditkartennummern und persönliche Daten des Besuchers der Seite zu entwenden. Dabei versenden Kriminelle üblicherweise Spam-E-Mails. Diese E-Mails enthalten u.a. Links zu einer Phishing-Seite, die sich als legitime Webseite ausgibt.\n</p>",
  'PHISHING_TIPS'       => "<p><b><span style=\"color:#c31622\"> Nehmen Sie die Webseite offline!<span></b>\n</p><p>Es ist weiterhin möglich, dass Sie mit der Webseite Phishing-Inhalte zu Verfügung stellen und Kriminelle persönliche Daten darüber sammeln. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n</p><p><b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />\n</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />\n<b>- Webfrontend (Hosting-Vertrag, Content-Management-System)</b><br />\n<b>- FTP-, SSH-Zugänge</b><br />\n<b>- Datenbank-Passwörter</b><br />\n</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als \"Hintertüren\" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup \"schadcodefrei\" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />\n</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.botfrei.de\">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target=\"_self\" rel=\"nofollow\" class=\"external free\" href=\"https://www.botfrei.de/de/eucleaner/index.html\">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>\n</span>\n</p>",
  'PHISHING_LINK'       => "https://siwecos.de/wiki/Phishing-Inhalte/DE",
  //
  // SPAM
  'SPAM'            => "Überprüfung auf mögliche Spam-Inhalte\n",
  'SPAM_SUCCESS'    => "Ihre Domain wurde in keiner uns bekannten Spam Liste gefunden.\n",
  'SPAM_ERROR'      => "Ihre Domain wurde in Spam Listen gefunden\n",
  'SPAM_ERROR_DESC' => "<p>Als Spam bezeichnet man ungewollte und zum Teil unseriöse Werbung im E-Mail Postfach (z.B. Viagra-Werbung, Medikamente, Versicherung und Kreditvergleiche). Diese Werbungen werden massenhaft verschickt bzw. können aber auch zielgerichtet verschickt werden. In der Regel verschleiern die Absender ihre wahre Identität in der E-Mail und versuchen Sie zu täuschen.\n</p>",
  'SPAM_TIPS'       => "<p><b><span style=\"color:#c31622\"> Nehmen Sie die Webseite offline!<span></b>\n</p><p>Um den Besuch Ihrer infizierten Webseite zu vermeiden bzw. damit Google Ihre Webseite nicht aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde, schalten Sie die Webseite offline. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n</p><p>Um zu prüfen ob die Seite über diverse Spam-Merkmale verfügt, rufen Sie die Seite im Browser auf, klicken über die rechte Maustaste den \"Quelltext anzeigen\". In diesem Fenster können Sie Ihren Quellcode mit Drücken der Tasten <b>Strg+f</b> (suchen) auf gängige Online-Betrügereien durch Werbung für Medikamente oder dubiose Kreditgeschäft überprüfen.\n</p><p><b>Einige Suchvorschläge</b>:<br />\n- „payday“<br />\n- „Pharma“<br />\n- „Viagra“<br />\n- „Cialis“<br /><br />\n<b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />\n</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />\n<b>- Webfrontend (Hosting-Vertrag, Content-Management-System)</b><br />\n<b>- FTP-, SSH-Zugänge</b><br />\n<b>- Datenbank-Passwörter</b><br />\n</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als \"Hintertüren\" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup \"schadcodefrei\" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />\n</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.botfrei.de\">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target=\"_self\" rel=\"nofollow\" class=\"external free\" href=\"https://www.botfrei.de/de/eucleaner/index.html\">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>\n</span>\n</p>",
  'SPAM_LINK'       => "https://siwecos.de/wiki/Spam-Inhalte/DE",
  //
  // Category: Protokollversionen
  //
  // PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2'            => "Überprüfung auf veraltetes SSL2 Protokoll\n",
  'PROTOCOLVERSION_SSL2_SUCCESS'    => "Veraltete Protokollversion SSL2 nicht unterstützt\n",
  'PROTOCOLVERSION_SSL2_ERROR'      => "Veraltete Protokollversion SSL2 unterstützt\n",
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => "<p>Der Server unterstützt die veraltete Protokollversion SSL2, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.\n</p>",
  'PROTOCOLVERSION_SSL2_TIPS'       => "<p><a href=\"/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a href=\"/wiki/SSL\" title=\"SSL\">SSL2</a> verzichten. Weitere Informationen finden Sie hier: <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/SSL\">SSL</a>\n</p>",
  'PROTOCOLVERSION_SSL2_LINK'       => "https://siwecos.de/wiki/Veraltete-Protokollversion-SSL2/DE",
  //
  // PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3'            => "Überprüfung auf veraltetes SSL3 Protokoll\n",
  'PROTOCOLVERSION_SSL3_SUCCESS'    => "Veraltete Protokollversion SSL3 nicht unterstützt\n",
  'PROTOCOLVERSION_SSL3_ERROR'      => "Veraltete Protokollversion SSL3 unterstützt\n",
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => "<p>Der Server unterstützt die veraltete Protokollversion SSL3, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.\n</p>",
  'PROTOCOLVERSION_SSL3_TIPS'       => "<p><a href=\"/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a href=\"/wiki/SSL\" title=\"SSL\">SSL3</a> verzichten. Weitere Informationen finden Sie hier: <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/SSL\">SSL</a>\n</p>",
  'PROTOCOLVERSION_SSL3_LINK'       => "https://siwecos.de/wiki/Veraltete-Protokollversion-SSL3/DE",
  //
  // PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13'            => "Überprüfung auf Einsatz  des TLS1.3 Protokoll\n",
  'PROTOCOLVERSION_TLS13_SUCCESS'    => "TLS 1.3 nicht unterstützt\n",
  'PROTOCOLVERSION_TLS13_ERROR'      => "Moderne TLS 1.3 unterstützt\n",
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => "<p>Der Server unterstützt die neueste TLS Protokollversion. Diese befindet sich noch im Standartisierungsprozess. Sollten sie nicht wissen was dies bedeutet, können sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützten und TLS 1.3 sich noch in der Entwicklung befindet.\n</p>",
  'PROTOCOLVERSION_TLS13_TIPS'       => "<p>Es besteht kein Handlungsbedarf.\n</p>",
  'PROTOCOLVERSION_TLS13_LINK'       => "https://siwecos.de/wiki/Protokollversion-TLS13-Gefunden/DE",
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
  // Category: Verschlüsselungsmethode
  //
  // CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED'            => "Überprüfung der Client-Verschlüsselungsmethodik\n",
  'CIPHERSUITEORDER_ENFORCED_SUCCESS'    => "Verantwortungsvolle Auswahl der Verschlüsselungsmethoden\n",
  'CIPHERSUITEORDER_ENFORCED_ERROR'      => "Verantwortungslose Auswahl der Verschlüsselungsmethoden\n",
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => "<p>Ihr Webserver / Ihre Webseite ist so konfiguriert, dass die Verschlüsselungsmethodik des Webseiten-Besuchers bevorzugt wird, statt die Ihres Webservers. Server sollten die Auswahl der Verschlüsselungsmethoden nicht ihren Kunden überlassen, sondern aktiv starke Verbindungen auswählen.\n</p>",
  'CIPHERSUITEORDER_ENFORCED_TIPS'       => "<p>Konfigurieren Sie Ihren Webservern so, dass der Webserver die Verschlüsselungsmethodik bei der Kommunikation zwischen Ihrer Webseite und dem Webbrowser des Besuchers bestimmt.\n</p>",
  'CIPHERSUITEORDER_ENFORCED_LINK'       => "https://siwecos.de/wiki/Verschluesselungsmethode-Client/DE",
  //
  // CIPHERSUITE_ANON
  'CIPHERSUITE_ANON'            => "Überprüfung auf anonyme Verschlüsselungsmethodik.\n",
  'CIPHERSUITE_ANON_SUCCESS'    => "Kein Anonymer Schlüsselaustausch unterstützt\n",
  'CIPHERSUITE_ANON_ERROR'      => "Anonymer Schlüsselaustausch unterstützt\n",
  'CIPHERSUITE_ANON_ERROR_DESC' => "<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass eine unsichere Verschlüsselungsmethode (<a href=\"/wiki/Cipher_Suite\" title=\"Cipher Suite\">Cipher Suite</a>) ohne Rechtekontrolle bei der Verbindung erfolgt. Dies ermöglicht <a href=\"/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-Middle Attacken</a>.\n</p>",
  'CIPHERSUITE_ANON_TIPS'       => "<p>Deaktivieren Sie die Unterstützung des \"Anonymen Schlüsselaustauschs\" in der  Verschlüsselungsmethodik. In Konsequenz auf die bekannt gewordenen TLS Schwachstellen ist die wichtigste Regel, wann immer es geht, TLS 1.2 zu nutzen. SSL 3.0 sollte in Browser deaktiviert werden.\n</p>",
  'CIPHERSUITE_ANON_LINK'       => "https://siwecos.de/wiki/Schluesselaustauschverfahren/DE",
  //
  // CIPHERSUITE_DES
  'CIPHERSUITE_DES'            => "Überprüfung auf DES Verschlüsselungsmethodik\n",
  'CIPHERSUITE_DES_SUCCESS'    => "Keine veraltete DES Verschlüsselungsmethodik unterstützt\n",
  'CIPHERSUITE_DES_ERROR'      => "Veraltete DES Verschlüsselungsmethodik unterstützt\n",
  'CIPHERSUITE_DES_ERROR_DESC' => "<p>Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.\n</p>",
  'CIPHERSUITE_DES_TIPS'       => "<p>Deaktivieren Sie die Unterstützung der DES Verschlüsselungsmethodik in Ihrer Webserver-Software.\n</p>",
  'CIPHERSUITE_DES_LINK'       => "https://siwecos.de/wiki/Schwaches-DES-Verschluesselungsprotokoll/DE",
  //
  // CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT'            => "Überprüfung auf schwache Verschlüsselungs-Funktionen\n",
  'CIPHERSUITE_EXPORT_SUCCESS'    => "Keine schwache EXPORT Verschlüsselung unterstützt\n",
  'CIPHERSUITE_EXPORT_ERROR'      => "Schwache Export Verschlüsselung unterstützt\n",
  'CIPHERSUITE_EXPORT_ERROR_DESC' => "<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass sich vorsätzlich unsichere Verschlüsselungsmethoden (<a href=\"/wiki/Cipher_Suite\" title=\"Cipher Suite\">Cipher Suites</a>) nutzen lassen. Dies ermöglicht <a href=\"/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Man-in-the-Middle (Seite nicht vorhanden)\">Man-in-the-Middle Attacken</a>.\n</p>",
  'CIPHERSUITE_EXPORT_TIPS'       => "<p>Deaktivieren Sie die Unterstützung von EXPORT Verschlüsselungsmethoden im Webserver.\n</p>",
  'CIPHERSUITE_EXPORT_LINK'       => "https://siwecos.de/wiki/Geschwaechtes-Verschluesselungsprotokoll/DE",
  //
  // CIPHERSUITE_NULL
  'CIPHERSUITE_NULL'            => "Überprüfung auf NULL-Chiffren\n",
  'CIPHERSUITE_NULL_SUCCESS'    => "Keine unsicheren Null Chiffren unterstützt\n",
  'CIPHERSUITE_NULL_ERROR'      => "Unsichere NULL Chiffren unterstützt\n",
  'CIPHERSUITE_NULL_ERROR_DESC' => "<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass zugelassen wird das unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht <a href=\"/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-Middle Attacken</a>.\n</p>",
  'CIPHERSUITE_NULL_TIPS'       => "<p>Deaktivieren Sie die Unterstützung von NULL Verschlüsselungsmethoden.\n</p>",
  'CIPHERSUITE_NULL_LINK'       => "https://siwecos.de/wiki/Unverschluesselte-Kommunikation/DE",
  //
  // CIPHERSUITE_RC4
  'CIPHERSUITE_RC4'            => "Überprüfung auf RC4 Verschlüsselungsmethodik\n",
  'CIPHERSUITE_RC4_SUCCESS'    => "Keine veraltete RC4 Verschlüsselungsmethodik unterstützt\n",
  'CIPHERSUITE_RC4_ERROR'      => "Veraltete RC4 Verschlüsselungsmethodik\nunterstützt\n",
  'CIPHERSUITE_RC4_ERROR_DESC' => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 (<a href=\"/wiki/index.php?title=Ciper_Suite&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Ciper Suite (Seite nicht vorhanden)\">Cipher Suites</a>) weiterhin unterstützt. Dies ermöglicht <a href=\"/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Man-in-the-Middle (Seite nicht vorhanden)\">Man-in-the-Middle Attacken</a>.\n</p>",
  'CIPHERSUITE_RC4_TIPS'       => "<p>Deaktivieren Sie die Unterstützung der RC4 Verschlüsselungsmethodik.\n</p>",
  'CIPHERSUITE_RC4_LINK'       => "https://siwecos.de/wiki/Unsichere-Verschluesselungsfunktion-RC4/DE",
  //
  // Category: WS_TLS
  //
  // ANON_SUITES
  'ANON_SUITES'            => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass eine anonyme Verschlüsselungsmethodik (<a href=\"/wiki/Cipher_Suite\" title=\"Cipher Suite\">Cipher Suite</a>) ohne Authentikation bei der Verbindung erfolgt. Dies ermöglicht <a href=\"/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-Middle Attacken</a>.\n",
  //
  // DES_SUITES
  'DES_SUITES'            => "Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES  (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.\n",
  //
  // EXPIRED
  'EXPIRED'            => "Ihr Zertifikat ist am&#160;%DATE% abgelaufen. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt.\n",
  //
  // EXPORT_SUITES
  'EXPORT_SUITES'            => "Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass sich vorsätzlich geschwächte kryptographische Funktionen (<a href=\"/wiki/Cipher_Suite\" title=\"Cipher Suite\">Cipher Suites</a>) nutzen lassen. Dies ermöglicht <a href=\"/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Man-in-the-Middle (Seite nicht vorhanden)\">Man-in-the-Middle Attacken</a>.\n",
  //
  // HASH_ALGO
  'HASH_ALGO'            => "Ihr Server-Zertifikat nutzt den schwachen Hash-Algorithmus&#160;%HASH%. Das Zertifikat kann so sehr einfach gefälscht werden. Ein Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen Hash-Algorithmus jedoch nicht.\n",
  //
  // HTTPS_RESPONSE
  'HTTPS_RESPONSE'            => "Der Server “%HOST%“ scheint überhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?\n",
  //
  // HTTPS_SUPPORTED
  'HTTPS_SUPPORTED'            => "Der Server “%HOST%“ scheint kein TLS zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten von ihnen und die ihrer Kunden zu schützen.\n",
  //
  // NOT_YET_VALID
  'NOT_YET_VALID'            => "Ihr Zertifikat wird erst am&#160;%DATE% gültig. Ihre Webseite wird Besuchern bis dahin als unsicher bzw. nicht vertrauenswürdig angezeigt.\n",
  //
  // NULL_SUITES
  'NULL_SUITES'            => "Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass zugelassen wird das unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht <a href=\"/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-Middle Attacken</a>.\n",
  //
  // RC4_SUITES
  'RC4_SUITES'            => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 (<a href=\"/wiki/index.php?title=Ciper_Suite&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Ciper Suite (Seite nicht vorhanden)\">Cipher Suites</a>) weiterhin unterstützt. Dies ermöglicht <a href=\"/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1\" class=\"new\" title=\"Man-in-the-Middle (Seite nicht vorhanden)\">Man-in-the-Middle Attacken</a>.\n",
  //
  // Category: XSS-Scanner
  //
  // HAS_SINKS
  'HAS_SINKS'            => "Überprüfung des JavaScript-Codes nach DOMXSS-Sinks\n",
  'HAS_SINKS_SUCCESS'    => "Automatisiert wurden keine unsicheren Codebestandteile für DOMXSS-Sinks erkannt.\n",
  'HAS_SINKS_ERROR'      => "Unsicheren JavaScript-Code verwendet (Sinks)\n",
  'HAS_SINKS_ERROR_DESC' => "<p>Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der unter bestimmten Voraussetzungen auf eine DOM-basierende Cross-Site Scripting Anfälligkeit hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen.\n</p>",
  'HAS_SINKS_TIPS'       => "<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.\n</p>",
  'HAS_SINKS_LINK'       => "https://siwecos.de/wiki/DOMXSS-Schwachstelle/DE",
  //
  // HAS_SOURCES
  'HAS_SOURCES'            => "Überprüfung des JavaScript-Codes nach DOMXSS-Sources\n",
  'HAS_SOURCES_SUCCESS'    => "Automatisiert wurden keine unsicheren Codebestandteile für DOMXSS-Sources erkannt.\n",
  'HAS_SOURCES_ERROR'      => "Unsicheren JavaScript-Code verwendet (Sources)\n",
  'HAS_SOURCES_ERROR_DESC' => "<p>Bei der Überprüfung wurde mindestens eine Schwachstelle auf der Webseite gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte.\n</p>",
  'HAS_SOURCES_TIPS'       => "<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.\n</p>",
  'HAS_SOURCES_LINK'       => "https://siwecos.de/wiki/Schadcode-Ueber-Fremde-Quellen/DE",
  //
  // Category: Zertifikate
  //
  // CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED'            => "Überprüfung der Zertifikat Laufzeit\n",
  'CERTIFICATE_EXPIRED_SUCCESS'    => "Zertifikat nicht abgelaufen\n",
  'CERTIFICATE_EXPIRED_ERROR'      => "Zertifikat abgelaufen\n",
  'CERTIFICATE_EXPIRED_ERROR_DESC' => "<p>Die Meldung bedeutet, dass Ihr <a href=\"/wiki/Zertifikate\" title=\"Zertifikate\">Server-Zertifikatt</a> abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über <a href=\"/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt, z.B. \"Ihr Zertifikat ist am Datum abgelaufen\". Die Seite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt.\n</p>",
  'CERTIFICATE_EXPIRED_TIPS'       => "<p>Dieses Problem lässt sich lösen, indem Sie das eingesetzte <a href=\"/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> erneuern. Wie Sie Zertifikate verlängern können, lesen Sie hier: <a target=\"_self\" rel=\"nofollow\" class=\"external text\" href=\"https://www.siwecos.de/wiki/Zertifikate#Was_tun.2C_wenn_ein_SSL-Zertifikat_abgelaufen_ist.3F\">Zertifikat abgelaufen</a>\n</p>",
  'CERTIFICATE_EXPIRED_LINK'       => "https://siwecos.de/wiki/Zertifikat-Abgelaufen/DE",
  //
  // CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER'            => "Überprüfung der Zertifikatsübermittlung\n",
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => "Server sendet ein Zertifikat\n",
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => "Server sendet kein Zertifikat\n",
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => "<p>Der Server hat kein <a href=\"/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> gesendet. Dies ist ungewöhnlich und sollte eigentlich nicht vorkommen. Der Server sollte seine <a href=\"/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Konfiguration</a> überprüfen und ggfs. <a href=\"/wiki/CIPHERSUITE_ANON\" title=\"CIPHERSUITE ANON\">anonyme Ciphersuites</a> ausschalten.\n</p>",
  'CERTIFICATE_NOT_SENT_BY_SERVER_TIPS'       => "<p>Aktualisieren Sie dringend die von Ihnen eingesetzte <a href=\"/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a>. Moderne Software erlaubt diese Art der Konfiguration nicht mehr.\n</p>",
  'CERTIFICATE_NOT_SENT_BY_SERVER_LINK'       => "https://siwecos.de/wiki/Zertifikat-Nicht-Gesendet/DE",
  //
  // CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET'            => "Überprüfung der Zertifikat Gültigkeit\n",
  'CERTIFICATE_NOT_VALID_YET_SUCCESS'    => "Zertifikat ist schon gültig\n",
  'CERTIFICATE_NOT_VALID_YET_ERROR'      => "Zertifikat noch nicht gültig\n",
  'CERTIFICATE_NOT_VALID_YET_ERROR_DESC' => "<p>Die Meldung bedeutet, dass Ihr <a href=\"/wiki/Zertifikate\" title=\"Zertifikate\">Server-Zertifikat</a> noch nicht gültig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt. Sollte ein Nutzer Ihre Webseite über <a href=\"/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.\n</p>",
  'CERTIFICATE_NOT_VALID_YET_TIPS'       => "<p>Deaktivieren Sie das <a href=\"/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> solange es <b>noch nicht</b> gültig ist. Ihre Webseite ist dann zwar nicht zertifiziert, jedoch erhalten Besucher zumindest keine Warnmeldung beim Aufruf Ihrer Webseite. Alternativ bietet sich die Möglichkeit an, Ihr altes <a href=\"/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> einzusetzen, so lange dies noch gültig ist. Wie Sie <a href=\"/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikate</a> verlängern können, lesen Sie hier: <a href=\"/wiki/CERTIFICATE_EXPIRED\" title=\"CERTIFICATE EXPIRED\">Zertifikat abgelaufen</a>.\n</p>",
  'CERTIFICATE_NOT_VALID_YET_LINK'       => "https://siwecos.de/wiki/Zertifikat-Nicht-Gueltig/DE",
  //
  // CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION'            => "Überprüfung der Verschlüsselungsstärke des Zertifikats.\n",
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => "Starker Hash-Algorithmus\n",
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => "Schwacher Hash-Algorithmus\n",
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => "<p>Die Meldung bedeutet, dass Ihr Server-Zertifikat einen schwachen Hash-Algorithmus (Verschlüsselung) besitzt. Es stellt möglicherweise ein leichtes Ziel für Hacker-Angriffe dar.\n</p>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_TIPS'       => "<p>Um dieses Problem zu lösen sollten sie ein neues Zertifikat mit einer sicheren Hash-Funktion (starke Verschlüsselung) installieren. Wie Sie ein sicheres Zertifikat bekommen, lesen Sie hier: <a href=\"/wiki/Zertifikate#Wie_wird_ein_SSL-Zertifikat_installiert.3F\" title=\"Zertifikate\">Zertifikat installieren</a>.\n</p>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_LINK'       => "https://siwecos.de/wiki/Schwache-Verschluesselung/DE",
  //
  // CERTIFICATE_WEAK_SIGN_ALGO
  'CERTIFICATE_WEAK_SIGN_ALGO'            => "Überprüfung der Zertifikat Verschlüsselung\n",
  //
  // CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS
  'CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS'            => "Überprüfung der Zertifikat Verschlüsselung\n",

];
