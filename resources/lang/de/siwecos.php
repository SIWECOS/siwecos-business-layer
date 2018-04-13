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
  'PHISING_FOUND'            => '<p>Ihre Domain ‘%site%’ wurde in folgenden Phising-Listen gefunden:&#160;%where%
</p>',
  //
  // Category: Angriffe
  //
  // BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE'            => '<p>Überprüfung auf Bleichenbacher Schwachstelle
</p>',
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Bleichenbacher (ROBOT)
</p>',
  'BLEICHENBACHER_VULNERABLE_ERROR'      => '<p>Verwundbar durch Bleichenbacher (ROBOT)
</p>',
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Bleichenbacher Angriff(ROBOT). Hierbei kann die Kommunikation entschlüsselt und bei der Übertragung die Nutzereingaben wie Passwörter im Klartext gelesen werden.
</p>',
  'BLEICHENBACHER_VULNERABLE_TIPS'       => '<p>Überprüfen Sie Ihr Zertifikat bzw. spielen sie umgehend ein Update für ihre TLS-Verschlüsselung auf ihren Server ein.
</p>',
  'BLEICHENBACHER_VULNERABLE_LINK'       => '<p>Bleichenbacher-Schwachstelle
</p>',
  //
  // CRIME_VULNERABLE
  'CRIME_VULNERABLE'            => '<p>Überprüfung auf die CRIME Schwachstelle
</p>',
  'CRIME_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch CRIME
</p>',
  'CRIME_VULNERABLE_ERROR'      => '<p>Verwundbar durch CRIME
</p>',
  'CRIME_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch CRIME. Ein Angriff welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.
</p>',
  'CRIME_VULNERABLE_TIPS'       => '<p>CRIME kann besiegt werden, indem die Verwendung von Komprimierung verhindert wird. Entweder auf der Client-Seite, indem der Browser die Komprimierung von SPDY-Anfragen deaktiviert, oder indem die Website die Verwendung von Datenkompression bei solchen Transaktionen unter Verwendung der Protokollaushandlungsmerkmale des TLS-Protokolls verhindert.
</p>',
  'CRIME_VULNERABLE_LINK'       => '<p>Crime-Schwachstelle
</p>',
  //
  // HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE'            => '<p>Überprüfung auf die Heartbleed Schwachstelle.
</p>',
  'HEARTBLEED_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Heartbleed
</p>',
  'HEARTBLEED_VULNERABLE_ERROR'      => '<p>Verwundbar durch Heartbleed
</p>',
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch Heartbleed. Dadurch kann ein Angreifer sensible Daten aus dem Arbeitsspeicher des Servers auslesen, wie z.B. geheime Schlüssel und Kundendaten.
</p>',
  'HEARTBLEED_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Verschlüsselung auf ihren Server ein.
</p>',
  'HEARTBLEED_VULNERABLE_LINK'       => '<p>Heartbleed-Schwachstelle
</p>',
  //
  // INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE'            => '<p>Überprüfung auf die Ephemeral Invalid Curve Schwachstelle.
</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Ephemeral Invalid Curve Angriffe
</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => '<p>Verwundbar durch Ephemeral Invalid Curve Angriffe
</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Ephemeral Invalid Curve Angriff. Dadurch kann ein Angreifer die Verbindungen angreifen.
</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.
</p>',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_LINK'       => '<p>Invalid-Curve-Ephemeral-Schwachstelle
</p>',
  //
  // INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE'            => '<p>Überprüfung auf die Invalid Curve Schwachstelle
</p>',
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Invalid Curve Angriffe
</p>',
  'INVALID_CURVE_VULNERABLE_ERROR'      => '<p>Verwundbar durch Invalid Curve Angriffe
</p>',
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Invalid Curve Angriff. Dadurch kann ein Angreifer den geheimen Schlüssel ihres Zertifikats stehlen.
</p>',
  'INVALID_CURVE_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.
</p>',
  'INVALID_CURVE_VULNERABLE_LINK'       => '<p>Invalid-Curve-Schwachstelle
</p>',
  //
  // PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE'            => '<p>Überprüfung auf die Padding-Oracle Schwachstelle
</p>',
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Padding Oracle Angriffe
</p>',
  'PADDING_ORACLE_VULNERABLE_ERROR'      => '<p>Verwundbar durch Padding Oracle Angriffe
</p>',
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Padding-Oracle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.
</p>',
  'PADDING_ORACLE_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.
</p>',
  'PADDING_ORACLE_VULNERABLE_LINK'       => '<p>PADDING-ORACLE-Schwachstelle
</p>',
  //
  // POODLE_VULNERABLE
  'POODLE_VULNERABLE'            => '<p>Überprüfung auf die POODLE Schwachstelle
</p>',
  'POODLE_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch Poodle
</p>',
  'POODLE_VULNERABLE_ERROR'      => '<p>Verwundbar durch Poodle
</p>',
  'POODLE_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch einen Poodle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.
</p>',
  'POODLE_VULNERABLE_TIPS'       => '<p>Deaktivieren Sie umgehend das veraltete Verschlüsselungsprotokoll SSL3 auf ihrem Server!
</p>',
  'POODLE_VULNERABLE_LINK'       => '<p>TLS-POODLE-Schwachstelle
</p>',
  //
  // SWEET32_VULNERABLE
  'SWEET32_VULNERABLE'            => '<p>Überprüfung auf SWEET32 Schwachstelle
</p>',
  'SWEET32_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch SWEET32
</p>',
  'SWEET32_VULNERABLE_ERROR'      => '<p>Verwundbar durch SWEET32
</p>',
  'SWEET32_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch SWEET32, welcher es einem Angreifer erlaubt teile der Kommunikation zu entschlüsseln falls über eine Verbindung große Mengen Daten transferiert werden.
</p>',
  'SWEET32_VULNERABLE_TIPS'       => '<p>Deaktivieren Sie <a target="_self" rel="nofollow" class="external text" href="https://www.itwissen.info/Blockchiffre-block-cipher.html">Blockchiffren</a> mit einer Länge von 64 Bit. Vergewissern Sie sich, das Protokolle wie SSLv2 und SSLv3 deaktiviert sind.
</p>',
  'SWEET32_VULNERABLE_LINK'       => '<p>Sweet32-Schwachstelle
</p>',
  //
  // TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE'            => '<p>Überprüfung auf die TLS-POODLE Schwachstelle
</p>',
  'TLS_POODLE_VULNERABLE_SUCCESS'    => '<p>Nicht verwundbar durch TLS-Poodle
</p>',
  'TLS_POODLE_VULNERABLE_ERROR'      => '<p>Verwundbar durch TLS-Poodle
</p>',
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => '<p>Der Server ist verwundbar durch eine Variante des Poodle Angriffs auf TLS, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.
</p>',
  'TLS_POODLE_VULNERABLE_TIPS'       => '<p>Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein. In der Apache-Konfiguration etwa kann man etwa die Zeile "SSLProtocol All -SSLv2 -SSLv3 " angeben.
</p>',
  'TLS_POODLE_VULNERABLE_LINK'       => '<p>Tls-Poodle-Schwachstelle
</p>',
  //
  // Category: Fehler
  //
  // SCANNER_TIMEOUT
  'SCANNER_TIMEOUT'            => '<p>Der Scanner "%scanner%" wurde nach&#160;%timeoutvalue% Sekunden beendet, weil er kein Ergebnis geliefert hat.
</p>',
  //
  // TIMEOUT
  'TIMEOUT'            => '<p>Zeitüberschreitung
</p>',
  'TIMEOUT_ERROR'      => '<p>Der Scan hat kein Ergebnis geliefert und wurde deswegen abgebrochen.
</p>',
  'TIMEOUT_ERROR_DESC' => '<p>Eine Zeitüberschreitung bedeutet, dass der Scan ihrer Domain länger dauerte als ein Scan üblicherweise dauert.
</p><p>Ursachen hierfür können unter anderem sein:
</p><p>Ihr Server ist momentan nicht erreichbar oder überlastet
</p><p>Unser Scanner Server ist momentan überlastet
</p>',
  //
  // Category: Fehlermeldung
  //
  // DONT_LEAK_USER_CREDS
  'DONT_LEAK_USER_CREDS'            => '<p>Sie sollten ihre Zugangsdaten (Name und Passwort) nicht übermitteln.
</p>',
  //
  // HEADER_NOT_SET
  'HEADER_NOT_SET'            => '<p>Der Header ist nicht gesetzt.
</p>',
  //
  // HEADER_SET_MULTIPLE_TIMES
  'HEADER_SET_MULTIPLE_TIMES'            => '<p>Der Header wurde mehrmals gesetzt.
</p>',
  //
  // JSON_DECODE_ERROR
  'JSON_DECODE_ERROR'            => '<p>Es gibt hier einen Jason Übersetzungsfehler.
</p>',
  //
  // LOCALHOST_SCAN_NOT_ALLOWED
  'LOCALHOST_SCAN_NOT_ALLOWED'            => '<p>Die lokale Überprüfung ist nicht erlaubt.
</p>',
  //
  // MAX_AGE_ERROR
  'MAX_AGE_ERROR'            => '<p>Es trat ein Fehler beim Überprüfen der `max-age`-Angabe auf.
</p>',
  //
  // NOT_REACHABLE
  'NOT_REACHABLE'            => '<p>Nicht erreichbar.
</p>',
  //
  // NO_HTTP_RESPONSE
  'NO_HTTP_RESPONSE'            => '<p>Die angegebene URL lieferte keine Antwort.
</p>',
  //
  // NO_SOURCE_CODE
  'NO_SOURCE_CODE'            => '<p>Keine Quelle gefunden.
</p>',
  //
  // NO_VALID_URL
  'NO_VALID_URL'            => '<p>Die Internetadresse (URL) ist nicht gültig.
</p>',
  //
  // PORT_DISALLOWED
  'PORT_DISALLOWED'            => '<p>Dieser Port ist nicht erlaubt.
</p>',
  //
  // REDIRECT_ERROR
  'REDIRECT_ERROR'            => '<p>Es gibt einen Umleitungsfehler.
</p>',
  //
  // SCORE_info
  'SCORE_info'            => '<p>Info
</p>',
  //
  // Category: Generell
  //
  // HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED'            => '<p>Überprüfung der Reaktionszeit des HTTP Headers
</p>',
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => '<p>Server spricht TLS
</p>',
  'HTTPS_NOT_SUPPORTED_ERROR'      => '<p>Server scheint kein TLS zu sprechen
</p>',
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => '<p>Der Server scheint kein TLS (Transportschichtsicherheit) zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten und die ihrer Kunden zu schützen.
</p>',
  'HTTPS_NOT_SUPPORTED_TIPS'       => '<p>Aktivieren sie TLS (Transportschichtsicherheit)
</p>',
  'HTTPS_NOT_SUPPORTED_LINK'       => '<p>Keine-TLS-Unterstuetzung
</p>',
  //
  // HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE'            => '<p>Überprüfung der Reaktionszeit des HTTPS Headers
</p>',
  'HTTPS_NO_RESPONSE_SUCCESS'    => '<p>Server antwortet
</p>',
  'HTTPS_NO_RESPONSE_ERROR'      => '<p>Server antwortet nicht
</p>',
  'HTTPS_NO_RESPONSE_ERROR_DESC' => '<p>Der Server scheint nicht zu antworten. Haben sie die Domain richtig eingegeben?
</p>',
  'HTTPS_NO_RESPONSE_TIPS'       => '<p>Bitte überprüfen Sie Ihre Eingabe auf Eingabefehler.
</p>',
  'HTTPS_NO_RESPONSE_LINK'       => '<p>Reaktionszeit-Ueberschritten
</p>',
  //
  // SCORE_bonus
  'SCORE_bonus'            => '<p>Bonus
</p>',
  //
  // SCORE_critical
  'SCORE_critical'            => '<p>Critical
</p>',
  //
  // SCORE_hidden
  'SCORE_hidden'            => '<p>Versteckt
</p>',
  //
  // SCORE_success
  'SCORE_success'            => '<p>Erfolgreich
</p>',
  //
  // SCORE_warning
  'SCORE_warning'            => '<p>Warnung
</p>',
  //
  // Category: HSHS_DOMXSS
  //
  // CSP_CORRECT
  'CSP_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.
</p>',
  //
  // CSP_LEGACY_HEADER_SET
  'CSP_LEGACY_HEADER_SET'            => '<p>Der veraltete Header `X-Content-Security-Policy` ist gesetzt. Der neue standardisierte Header ist `Content-Security-Policy`.
</p>',
  //
  // CSP_NO_UNSAFE_INCLUDED
  'CSP_NO_UNSAFE_INCLUDED'            => '<p>Der Header ist korrekt gesetzt und enthält keine `unsafe-`-Direktiven.
</p>',
  //
  // CSP_UNSAFE_INCLUDED
  'CSP_UNSAFE_INCLUDED'            => '<p>Der Header ist unsicher gesetzt, da er `unsafe-inline`- oder `unsafe-eval`-Direktiven enthält.
</p>',
  //
  // CT_CORRECT
  'CT_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.
</p>',
  //
  // CT_HEADER_WITHOUT_CHARSET
  'CT_HEADER_WITHOUT_CHARSET'            => '<p>Der Header ist ohne Zeichensatzangabe gesetzt und dadurch nicht sicher.
</p>',
  //
  // CT_HEADER_WITH_CHARSET
  'CT_HEADER_WITH_CHARSET'            => '<p>Der Header ist korrekt gesetzt und beinhaltet eine Zeichensatz-Angabe.
</p>',
  //
  // CT_META_TAG_SET
  'CT_META_TAG_SET'            => '<p>Die Header-Angabe ist via `&lt;meta&gt;`-Tag gesetzt, enthält jedoch keine Zeichensatz-Angabe oder folgt nicht den Empfehlungen.
</p>',
  //
  // CT_META_TAG_SET_CORRECT
  'CT_META_TAG_SET_CORRECT'            => '<p>Die Header-Angabe ist via `&lt;meta&gt;`-Tag gesetzt und entspricht den Empfehlungen.
</p>',
  //
  // CT_WRONG_CHARSET
  'CT_WRONG_CHARSET'            => '<p>Ein falscher oder ungültiger Zeichensatz wurde eingetragen. Die Konfiguration ist nicht sicher.
</p>',
  //
  // HPKP_LESS_15
  'HPKP_LESS_15'            => '<p>Die öffentlichen Schlüssel sind für weniger als 15 Tage gepinnt.
</p>',
  //
  // HPKP_MORE_15
  'HPKP_MORE_15'            => '<p>Die öffentlichen Schlüssel sind für mehr als 15 Tage gepinnt.
</p>',
  //
  // HPKP_REPORT_URI
  'HPKP_REPORT_URI'            => '<p>Eine `report-uri` ist gesetzt.
</p>',
  //
  // HSTS_LESS_6
  'HSTS_LESS_6'            => '<p>Der Wert von `max-age` ist kleiner als 6 Monate.
</p>',
  //
  // HSTS_MORE_6
  'HSTS_MORE_6'            => '<p>Der Wert von `max-age` ist größer als 6 Monate.
</p>',
  //
  // HSTS_PRELOAD
  'HSTS_PRELOAD'            => '<p>Die `preload`-Direktive ist gesetzt.
</p>',
  //
  // INCLUDE_SUBDOMAINS
  'INCLUDE_SUBDOMAINS'            => '<p>`includeSubDomains` ist gesetzt.
</p>',
  //
  // NO_SINKS_FOUND
  'NO_SINKS_FOUND'            => '<p>Es wurden keine „Sinks“ gefunden.
</p>',
  //
  // NO_SOURCES_FOUND
  'NO_SOURCES_FOUND'            => '<p>Es wurden keine „Sources“ gefunden.
</p>',
  //
  // SINKS_FOUND
  'SINKS_FOUND'            => '<p>Es wurden „Sinks“ gefunden.
</p>',
  //
  // SOURCES_FOUND
  'SOURCES_FOUND'            => '<p>Es wurden „Sources“ gefunden.
</p>',
  //
  // XCTO_CORRECT
  'XCTO_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.
</p>',
  //
  // XCTO_NOT_CORRECT
  'XCTO_NOT_CORRECT'            => '<p>Der Header ist nicht korrekt gesetzt.
</p>',
  //
  // XFO_CORRECT
  'XFO_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.
</p>',
  //
  // XFO_WILDCARDS
  'XFO_WILDCARDS'            => '<p>Der Header enthält Wildcard-Angaben (*) und ist daher nicht sicher konfiguriert.
</p>',
  //
  // XXSS_BLOCK
  'XXSS_BLOCK'            => '<p>Die `mode=block`-Direktive ist aktiviert.
</p>',
  //
  // XXSS_CORRECT
  'XXSS_CORRECT'            => '<p>Der Header ist korrekt gesetzt und entspricht den Empfehlungen.
</p>',
  //
  // Category: HTTP-Security-Header-Scanner
  //
  // CONTENT_SECURITY_POLICY
  'CONTENT_SECURITY_POLICY'            => '<p>Überprüfung der Content Security Policy (CSP)
</p>',
  'CONTENT_SECURITY_POLICY_SUCCESS'    => '<p>Eine sichere Konfiguration der Content Security Policy (CSP) wurde gefunden.
</p>',
  'CONTENT_SECURITY_POLICY_ERROR'      => '<p>Content Security Policy Inaktiv
</p>',
  'CONTENT_SECURITY_POLICY_ERROR_DESC' => '<p>Die Content-Security-Policy ist ein Sicherheitskonzept, welches das Injizieren und Auszuführen von evtl. bösartigen Befehlen in eine Webanwendung (Content-Injection-Angriffe) mildern soll. Es stellt über eine Whitelist (Liste erlaubter Quellen) dar, von welchen <a href="https://siwecos.de/wiki/Quellen" title="Quellen">Quellen</a> Javascripte, Bilder, Schriftarten und andere Inhalte auf Ihrer Seite eingebunden werden dürfen. </p>',
  'CONTENT_SECURITY_POLICY_TIPS'       => '<p>Verwenden Sie den CSP mit default-src 'none' und ohne unsicher-eval oder unsicher-inline-Richtlinien. Mehr zu <b>Content Security Policy</b> (zu deutsch etwa "Richtlinie für die Sicherheit der Inhalte") finden Sie bei <b><a target="_self" rel="nofollow" class="external text" href="https://wiki.selfhtml.org/wiki/Sicherheit/Content_Security_Policy">SELFHTML&gt;&gt;</a></b>
</p><p><br />
--snip<br />
</p><p><b>Beispiele für den Header der Startseite:</b>
</p>
<pre>
&lt;meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'"&gt;
&lt;meta http-equiv="X-Content-Security-Policy" content="default-src 'self'; script-src 'self'"&gt;
&lt;meta http-equiv="X-WebKit-CSP" content="default-src 'self'; script-src 'self'"&gt;</pre>
<p><b>Konfiguration des Webservers</b>
</p><p>Wenn man seinen eigenen Webserver konfigurieren kann, was bei günstigen Hostingangeboten in aller Regel nicht der Fall ist, dann gibt es diese Einstellungsmöglichkeit über die <b>Bearbeitung der .htaccess</b>:
</p>
<pre># Download / Lade Inhalte nur von Seiten die explizit erlaubt sind
# Beispiel: Alles von der eigenen Domain erlauben, keine Externas:

Header set Content-Security-Policy "default-src 'none'; script-src 'self'; connect-src 'self'; img-src 'self'; style-src 'self';"

</pre>
<p>--snap
</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.
(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)
</p>',
  'CONTENT_SECURITY_POLICY_LINK'       => '<p>Content-Security-Policy-Schwachstelle
</p>',
  //
  // CONTENT_TYPE
  'CONTENT_TYPE'            => '<p>Überprüfung des HTTP Content-Types
</p>',
  'CONTENT_TYPE_SUCCESS'    => '<p>Die Content Type Angabe ist korrekt konfiguriert.
</p>',
  'CONTENT_TYPE_ERROR'      => '<p>Inkorekte HTTP Content-Type Konfiguration
</p>',
  'CONTENT_TYPE_ERROR_DESC' => '<p>Der Content-Type ist eine Angabe, die für gewöhnlich im Kopfbereich der Webseite, dem sogenannten HTTP-Header, untergebracht wird. Durch diese Angaben wird der Zeichensatz und der Typ des Inhalts der Seite definiert. Sollte eine Definition fehlen, wird der Webbrowser versuchen den Content-Type zu erraten; dies kann zu Sicherheitslücken wie Code-Page-Sniffing führen. Diese Angaben sind zudem wichtig, damit die Webseite in jedem <a href="https://siwecos.de/wiki/Browser" title="Browser">Browser</a> und auf jedem Computer einwandfrei dargestellt wird. Wenn ein Server ein Dokument an einen <a target="_self" rel="nofollow" class="external text" href="https://de.wikipedia.org/wiki/User_Agent">User-Agent</a> sendet (zum Beispiel zum <a href="https://siwecos.de/wiki/Browser" title="Browser">Browser</a>) ist es nützlich, im Content-Type-Feld des HTTP-Header die Art des Dateiformates zu hinterlegen. Diese Informationen deklarieren den <a target="_self" rel="nofollow" class="external text" href="https://de.wikipedia.org/wiki/Internet_Media_Type">MIME-Typ</a> und senden entsprechend die Zeichenkodierung des Dokuments wie text/html, text/plain, etc. an den Browser. </p>',
  'CONTENT_TYPE_TIPS'       => '<p>Fügen sie den entsprechenden HTTP-Header oder alternativ ein &lt;meta&gt; Tag hinzu. Bitte beachten Sie, dass &lt;meta&gt; im Gegensatz zu einem HTTP-Header leichter angegriffen werden kann.
</p><p><b>text/html; charset=utf-8</b>;
</p><p><b>--snip</b>
</p>
<pre>&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8"&gt;</pre>
<p><b>—snap</b>
</p><p><br />
Weiterhin muß der Server selber konfiguriert werden, damit die <b>richtige charset-Information</b> gesendet wird. Dazu benötigt werden entsprechende Berechtigungen benötigt um die Änderungen am Server durchführen zu können. Weiter Informationen zu den verschiedenen Serverkonfigurationen finden Sie auf den Seiten von <a target="_self" rel="nofollow" class="external text" href="https://www.w3.org/International/articles/http-charset/index.de">W3.org</a>.
</p><p>Darüber hinaus gibt es auch die Möglichkeit die <b>richtige charset-Information</b> der <a target="_self" rel="nofollow" class="external text" href="http://httpd.apache.org/docs/2.0/howto/htaccess.html"><b>.htaccess</b></a> zu übergeben, welche die Angaben im HTTP-Header überschreiben. <a target="_self" rel="nofollow" class="external text" href="https://www.w3.org/International/questions/qa-htaccess-charset">charset in .htaccess</a>
</p><p><b>In die .htaccess eintragen:</b>
</p>
<pre>AddType 'text/html; charset=UTF-8' html</pre>
<p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.
(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)
</p>',
  'CONTENT_TYPE_LINK'       => '<p>Content-Type-Nicht-Korrekt
</p>',
  //
  // PUBLIC_KEY_PINS
  'PUBLIC_KEY_PINS'            => '<p>Überprüfung des Public Key Pinning (HPKP)
</p>',
  'PUBLIC_KEY_PINS_SUCCESS'    => '<p>Public-Key-Pinning ist aktiviert
</p>',
  'PUBLIC_KEY_PINS_ERROR'      => '<p>Public-Key-Pinning nicht vorhanden.
</p>',
  'PUBLIC_KEY_PINS_ERROR_DESC' => '<p>Mächtige Angreifer wie bspw. Geheimdienste können ggf. eine Signatur, mit der Hilfe einer von den Benutzern akzeptierten Zertifizierungsstelle, erstellen lassen. Um dies zu verhindern kann eine Webseite definieren, dass beim ersten Aufruf des Zertifikats das Zertifikat dauerhaft gespeichert (pinning). Mit der Hilfe von Key-Pinning wird für die von der Webseiten definierten Zeit lediglich das gespeicherte Zertifikat akzeptiert.
</p>',
  'PUBLIC_KEY_PINS_TIPS'       => '<p>pin-sha256="&lt;HASH&gt;"; pin-sha256="&lt;HASH&gt;"; max-age=2592000; includeSubDomains; <b>HPKP aktivieren</b> - Dieses Feature kann einfach aktiviert werden indem ein Public-Key-Pins HTTP-Header beim Aufruf der Seite über <a href="https://siwecos.de/wiki/HTTPS" title="HTTPS">HTTPS</a> zurückgegeben wird. (<a target="_self" rel="nofollow" class="external text" href="https://developer.mozilla.org/de/docs/Web/Security/Public_Key_Pinning">Weitere Infos</a>). </p><p><b>--snip</b> </p> <pre>Public-Key-Pins: pin-sha256="base64=="; max-age=expireTime [; includeSubdomains][; report-uri="reportURI"]</pre> <p><b>--snap</b> </p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen. (<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>) </p>',
  'PUBLIC_KEY_PINS_LINK'       => '<p>Public-Key-Pins-Deaktiviert
</p>',
  //
  // STRICT_TRANSPORT_SECURITY
  'STRICT_TRANSPORT_SECURITY'            => '<p>Überprüfung des HSTS Schutzes
</p>',
  'STRICT_TRANSPORT_SECURITY_SUCCESS'    => '<p>Ihre Webseite ist ausschließlich über das sichere HTTPS-Protokoll erreichbar. Kommunikation zwischen Ihrer Webseite und den Besuchern kann nicht abgehört und manipuliert werden.
</p>',
  'STRICT_TRANSPORT_SECURITY_ERROR'      => '<p>HSTS Schutz Fehler
</p>',
  'STRICT_TRANSPORT_SECURITY_ERROR_DESC' => '<p>Strict-Transport-Security stellt sicher, dass die Webseite für eine bestimmte Zeit lediglich über HTTPS gesicherte Verbindung aufgerufen werden kann. Der Webseitenbetreiber kann diesbezüglich u.a. definieren, wie lange das Zeitinterval ist und ob diese Regelung auch für Subdomains gelten soll.
</p>',
  'STRICT_TRANSPORT_SECURITY_TIPS'       => '<p>max-age=63072000; includeSubdomains;
HTTP Strict Transport Security (HSTS) ist ein einfach zu integrierender Web-Security-Policy-Mechanismus.
</p>
<b>--snip</b><pre>
# HTTP Strict Transport Security (HSTS) aktivieren
# Pflichtangabe: „max-age“
# Optional: „includeSubDomains“</pre>
<pre>  <b>Header set Strict-Transport-Security „max-age=31556926, includeSubDomains“</b>
</pre>
<p><b>--snap</b>
</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.
(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)
</p>',
  'STRICT_TRANSPORT_SECURITY_LINK'       => '<p>Keine-Verschluesselung-Gefunden
</p>',
  //
  // X_CONTENT_TYPE_OPTIONS
  'X_CONTENT_TYPE_OPTIONS'            => '<p>Überprüfung des X-Content-Type Headers
</p>',
  'X_CONTENT_TYPE_OPTIONS_SUCCESS'    => '<p>Der HTTP-Header ist korrekt gesetzt.
</p>',
  'X_CONTENT_TYPE_OPTIONS_ERROR'      => '<p>X-Content-Type Header fehlt
</p>',
  'X_CONTENT_TYPE_OPTIONS_ERROR_DESC' => '<p>Die X-Content-Type-Options Einstellungen im Header verhindern, dass der <a href="https://siwecos.de/wiki/Browser" title="Browser">Browser</a> Dateien als etwas anderes interpretiert, als vom Inhaltstyp im <a href="https://siwecos.de/wiki/HTTP" title="HTTP">HTTP-Header</a> deklariert wurde. Die Headereinstellungen sind hier nicht gesetzt. </p>',
  'X_CONTENT_TYPE_OPTIONS_TIPS'       => '<p>nosniff; <br /><br />
<b>Beispielcode einer .htaccess auf einem Apache Webserver.</b><br />
</p>
<b>--snip</b><pre>
&lt;IfModule mod_headers.c&gt;
   # prevent mime based attacks like drive-by download attacks, IE and Chrome
   '''Header set X-Content-Type-Options „nosniff“'''
&lt;pre&gt;&lt;/IfModule&gt;</pre>
<p><b>—snap</b>
</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.
(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)
</p>',
  'X_CONTENT_TYPE_OPTIONS_LINK'       => '<p>X-Content-Type-Options-Schwachstelle
</p>',
  //
  // X_FRAME_OPTIONS
  'X_FRAME_OPTIONS'            => '<p>Überprüfung der X-Frame Optionen
</p>',
  'X_FRAME_OPTIONS_SUCCESS'    => '<p>Der Header ist korrekt gesetzt und verbessert den Schutz Ihrer Webseite gegen Clickjacking-Angriffe.
</p>',
  'X_FRAME_OPTIONS_ERROR'      => '<p>HTTP-Header X-Frame Optionen nicht gesetzt.
</p>',
  'X_FRAME_OPTIONS_ERROR_DESC' => '<p>X-Frame-Options hilft dabei Angriffe über Framing-Mechanismen zu unterbinden. Dies gewährleistet bspw., dass Clickjacking-Angriffe größtenteils gemildert werden können. Darüber hinaus werden Downgrading-Angriffe wie etwa im Internet Explorer minimiert.
</p>',
  'X_FRAME_OPTIONS_TIPS'       => '<p>Im HTTP-Header entsprechend den Bedürfnissen setzen. Die <b>X-Frame-Options</b> im <a href="https://siwecos.de/wiki/HTTP" title="HTTP">HTTP</a> Header kann verwendet werden, um zu bestimmen, ob ein aufrufender <a href="https://siwecos.de/wiki/Browser" title="Browser">Browser</a> die Zielseite in einem &lt;frame&gt;, &lt;iframe&gt; oder bspw. &lt;object&gt; rendern bzw. einbetten darf. Webseiten können diesen Header verwenden, um u. a. Clickjacking-Angriffe abzuwehren, indem sie unterbinden, dass ihr Content in fremden Seiten eingebettet wird. </p><p>Mit dem HTTP-Header Befehl X-Frame-Options können moderne Webbrowser angewiesen werden, eine Seite nicht in einem Frame auf einer andere Website zu laden. Dafür muss der folgende Befehl in der htaccess-Datei gesetzt werden: </p><p>Header always append X-Frame-Options DENY </p><p><b>--snip</b> </p> <pre> Header always append X-Frame-Options DENY </pre> <p><b>—snap</b> </p><p>Alternativ kann erlaubt werden, dass die Seite nur auf anderen Seiten der gleichen Domain eingebunden werden dürfen: </p><p><b>--snip</b> </p> <pre> Header always append X-Frame-Options SAMEORIGIN </pre> <p><b>—snap</b> </p><p>Falls eine Website doch extern eingebunden werden muss, kann eine Domain angegeben werden: </p><p><b>--snip</b> </p> <pre> Header always append X-Frame-Options ALLOW-FROM botfrei.de </pre> <p><b>—snap</b> </p><p><br /> Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen. (<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>) </p>',
  'X_FRAME_OPTIONS_LINK'       => '<p>X-Frame-Options-Schwachstelle
</p>',
  //
  // X_XSS_PROTECTION
  'X_XSS_PROTECTION'            => '<p>Überprüfung ob der Cross-Site Scripting Filter aktiviert und korrekt konfiguriert ist.
</p>',
  'X_XSS_PROTECTION_SUCCESS'    => '<p>Der Cross-Site-Scripting (XSS) -Schutz des Webbrowsers ist auf Ihrer Seite aktiviert.
</p>',
  'X_XSS_PROTECTION_ERROR'      => '<p>Cross-Site-Scripting Schutz nicht aktiviert oder unzureichend konfiguriert.
</p>',
  'X_XSS_PROTECTION_ERROR_DESC' => '<p>Der HTTP-Header X-XSS-Protection definiert wie in Browser eingebaute XSS-Filter konfiguriert werden. Eine Default-Installation kann eine unzureichende Konfiguration offenbaren.
</p>',
  'X_XSS_PROTECTION_TIPS'       => '<p>1; mode=block
</p><p><b>Beispielcode einer .htaccess auf einem Apache Webserver.</b>
</p>
<b>--snip</b><br /><pre>
   # Turn on XSS prevention tools, activated by default in IE and Chrome
   '''Header set X-XSS-Protection „1; mode=block“'''
</pre>
<p><b>—snap</b>
</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess -Datei aussehen kann, um den <b>HTTP-Security-Header-Scanner</b> Grün zu stimmen.
(<a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Htaccess">.htaccess-Beispiel</a>)
</p>',
  'X_XSS_PROTECTION_LINK'       => '<p>XSS-Schwachstelle
</p>',
  //
  // Category: INI_S
  //
  // MALWARE_FOUND
  'MALWARE_FOUND'            => '<p>Ihre Domain ‘%site%’ wurde in folgenden Malware-Listen gefunden:&#160;%where%
</p>',
  //
  // PHISHING_FOUND
  'PHISHING_FOUND'            => '<p>Ihre Domain ‘%site%’ wurde in folgenden Phising-Listen gefunden:&#160;%where%
</p>',
  //
  // SPAM_FOUND
  'SPAM_FOUND'            => '<p>Ihre Domain ‘%site%’ wurde in folgenden Spam-Listen gefunden:&#160;%where%
</p>',
  //
  // Category: Infoleak
  //
  // CMS_ONLY
  'CMS_ONLY'            => '<p>Das verwendete CMS&#160;%cms% wurde erkannt.
</p>',
  //
  // CMS_VERSION
  'CMS_VERSION'            => '<p>Das verwendete CMS&#160;%cms% und dessen Version&#160;%version% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.
</p>',
  //
  // CMS_VERSION_VULN
  'CMS_VERSION_VULN'            => '<p>Das verwendete CMS&#160;%cms% der Version&#160;%version% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.
</p>',
  //
  // EMAIL_FOUND
  'EMAIL_FOUND'            => '<p>Die Email-Adresse&#160;%email_adress% wurde gefunden. Wollen Sie diese Email-Adresse wirklich veröffentlichen? Ein Angreifer kann dies für bspw. Phising-Angriffe nutzen.
</p>',
  //
  // JS_LIB_ONLY
  'JS_LIB_ONLY'            => '<p>Die verwendete JavaScript-Bibliothek&#160;%js_lib_name% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt.
</p>',
  //
  // JS_LIB_VERSION
  'JS_LIB_VERSION'            => '<p>Die verwendete JavaScript-Bibliothek&#160;%js_lib_name% mit der Version&#160;%js_lib_version% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.
</p>',
  //
  // JS_LIB_VULN_VERSION
  'JS_LIB_VULN_VERSION'            => '<p>Die verwendete JavaScript-Bibliothek&#160;%js_lib_name% mit der Version&#160;%js_lib_version% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.
</p>',
  //
  // NUMBER_FOUND
  'NUMBER_FOUND'            => '<p>Die Telefonnummer&#160;%number% wurde gefunden. Wollen Sie diese Telefonnummer wirklich veröffentlichen? Ein Angreifer kann diese bspw. für Phishing-Angriffe nutzen.
</p>',
  //
  // PLUGIN_ONLY
  'PLUGIN_ONLY'            => '<p>Das verwendete CMS-Plugin&#160;%plugin% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt.
</p>',
  //
  // PLUGIN_VERSION
  'PLUGIN_VERSION'            => '<p>Das verwendete CMS-Plugin&#160;%plugin% mit der Version&#160;%plugin_version% in DOM-Node&#160;%node% mit dem Inhalt&#160;%node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs.
</p>',
  //
  // PLUGIN_VERSION_VULN
  'PLUGIN_VERSION_VULN'            => '<p>Das verwendete CMS-Plugin&#160;%plugin% der Version&#160;%plugin_version% in DOM-node&#160;%node% mit dem Inhalt&#160;%node_content% erkannt. Für diese Version ist eine Schwachstelle bekannt.
</p>',
  //
  // Category: Information-Leakage-Scanner
  //
  // CMS
  'CMS'            => '<p>Überprüfung auf Erkennbarkeit des verwendeten CMS.
</p>',
  'CMS_SUCCESS'    => '<p>Falls Sie ein CMS verwenden, kann dieses nicht automatisiert erkannt werden.
</p>',
  'CMS_ERROR'      => '<p>Content Management System (CMS) erkennbar
</p>',
  'CMS_ERROR_DESC' => '<p>Das verwendete <a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Content-Management-Systeme">Content Management System</a> kann identifiziert werden. Diese Information könnte von einem Angreifer genutzt werden, um gezielt nach Schwachstellen für dieses spezielle CMS zu suchen.
</p>',
  'CMS_TIPS'       => '<p>Halten Sie installierte Webserver und das Content Management System immer auf dem aktuellsten Stand. Manche CMS-Systeme erlauben es Versionsinformationen zu verstecken. Nutzen sie dieses Feature falls verfügbar.
</p>',
  'CMS_LINK'       => '<p>Content-Management-System-Gefunden
</p>',
  //
  // CMS_PLUGINS
  'CMS_PLUGINS'            => '<p>Überprüfung auf unsichere CMS-Plugins
</p>',
  'CMS_PLUGINS_SUCCESS'    => '<p>CMS-Plugins können nicht erkannt werden.
</p>',
  'CMS_PLUGINS_ERROR'      => '<p>CMS Plugin erkannt
</p>',
  'CMS_PLUGINS_ERROR_DESC' => '<p>Es wurde ein von ihrem CMS-System genutztes Plugin entdeckt. Ein Angreifer könnte diese Information nutzen, um gezielt nach Schwachstellen für ihre Website zu suchen.
</p>',
  'CMS_PLUGINS_TIPS'       => '<p>Plugins sollten auf jene beschränkt werden, die tatsächlich benötigt werden. Damit kann die Angriffsfläche erheblich reduzieren werden. Zudem sollten installierte Plugins immer auf dem aktuellsten Stand gehalten werden.
</p>',
  'CMS_PLUGINS_LINK'       => '<p>Plugin-Gefunden
</p>',
  //
  // EMAIL_ADDRESS
  'EMAIL_ADDRESS'            => '<p>Überprüfung auf vorhandene Email-Adressen
</p>',
  'EMAIL_ADDRESS_SUCCESS'    => '<p>Keine Email-Adressen gefunden.
</p>',
  'EMAIL_ADDRESS_ERROR'      => '<p>Auslesbare Email-Adresse
</p>',
  'EMAIL_ADDRESS_ERROR_DESC' => '<p>Ihre Webseite enthält mindestens eine maschinell auslesbare Email-Adresse. Dieses ermöglicht es Dritten, die hinterlegten Email-Adressen automatisiert durch WebCrawler (auch Spider, Searchbot oder Robot) zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufügen.
</p>',
  'EMAIL_ADDRESS_TIPS'       => '<p>Hinterlegen Sie Ihre Kontaktadressen, bspw. im Impressum wie folgt: mail at siwecos.de / mail @ siwecos.de oder hinterlegen Sie die Information in einer Grafik-Datei.
</p>',
  'EMAIL_ADDRESS_LINK'       => '<p>Email-Adresse-Gefunden
</p>',
  //
  // JS_LIB
  'JS_LIB'            => '<p>Überprüfung auf unsichere JavaScript-Bibliotheken
</p>',
  'JS_LIB_SUCCESS'    => '<p>Die JavaScript-Bibliotheken sind nach dem aktuellen Stand voraussichtlich nicht durch bekannte Schwachstellen angreifbar.
</p>',
  'JS_LIB_ERROR'      => '<p>Unsichere JavaScript-Bibliothek gefunden.
</p>',
  'JS_LIB_ERROR_DESC' => '<p>Es wurde eine von Ihnen verwendete JavaScript-Bibliothek gefunden. Ein Angreifer könnte diese Information nutzen, um gezielt nach Schwachstellen für Ihre Website zu suchen.
</p>',
  'JS_LIB_TIPS'       => '<p>Updaten Sie Ihre verwendeten Javascript Bibliotheken.
</p>',
  'JS_LIB_LINK'       => '<p>Javascript-Schwachstelle
</p>',
  //
  // PHONE_NUMBER
  'PHONE_NUMBER'            => '<p>Überprüfung auf auslesbare Telefonnummern
</p>',
  'PHONE_NUMBER_SUCCESS'    => '<p>Telefonnummern wurden nicht gefunden.
</p>',
  'PHONE_NUMBER_ERROR'      => '<p>Telefonnummer gefunden.
</p>',
  'PHONE_NUMBER_ERROR_DESC' => '<p>Es wurde eine Telefonnummer gefunden. Ein Angreifer könnte diese Information nutzen, um Mitarbeiter zu manipulieren und an Informationen gelangen die Geheim bleiben sollten.
</p>',
  'PHONE_NUMBER_TIPS'       => '<p>Die veröffentlichten Telefonnummern sollten auf jene beschränkt werden, die auch tatsächlich für die Kommunikation mit Kunden gedacht sind. Außerdem sollte der telefonierende Mitarbeiter sich der Gefahr von Social Engineering Angriffen bewusst sein und die Vorgehensweise von Social Engineers kennen.
</p>',
  'PHONE_NUMBER_LINK'       => '<p>Telefonnummer-Gefunden
</p>',
  //
  // Category: Initiative-S Scanner
  //
  // MALWARE
  'MALWARE'            => '<p>Überprüfung auf mögliche Malware
</p>',
  'MALWARE_SUCCESS'    => '<p>Ihre Domain wurde in keiner uns bekannten Malware Liste gefunden.
</p>',
  'MALWARE_ERROR'      => '<p>Ihre Domain wurde in Malware Listen gefunden
</p>',
  'MALWARE_ERROR_DESC' => '<p>Malware bezeichnet Software, die dem Benutzer und natürlich in erster Linie dem Computer Schaden zufügen kann. Malware bezeichnet dabei alle Arten von schadhaften Programmen wie etwa Viren, Trojaner, Spyware, Dialer, Dropper, Rootkits und Keylogger.
</p>',
  'MALWARE_TIPS'       => '<p><b><span style="color:#c31622"> Nehmen Sie die Webseite offline!<span></b>
</p><p>Bei einem Aufruf der Seite besteht die Gefahr, dass Sie den aufrufenden PC mit Schadsoftware infizieren. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. Sie kommen auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.
</p><p><b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />
</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.
</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />
<b>- Webfrontend (Hosting-Vertrag, Content-Management-System)</b><br />
<b>- FTP-, SSH-Zugänge</b><br />
<b>- Datenbank-Passwörter</b><br />
</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!
Löschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.
Überprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.
Sollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.
</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />
</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target="_self" rel="nofollow" class="external text" href="https://www.botfrei.de">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme. 
Mit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target="_self" rel="nofollow" class="external free" href="https://www.botfrei.de/de/eucleaner/index.html">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>
</span>
</p>',
  'MALWARE_LINK'       => '<p>Malware-Inhalte
</p>',
  //
  // PHISHING
  'PHISHING'            => '<p>Überprüfung auf mögliche Phishing-Inhalte
</p>',
  'PHISHING_SUCCESS'    => '<p>Ihre Domain wurde in keiner uns bekannten Phising Liste gefunden.
</p>',
  'PHISHING_ERROR'      => '<p>Ihre Domain wurde in Phising Listen gefunden
</p>',
  'PHISHING_ERROR_DESC' => '<p>Beim Phishing wird in der Regel trickreich versucht, sensible persönliche Daten wie Passwörter, Kreditkartennummern und persönliche Daten des Besuchers der Seite zu entwenden. Dabei versenden Kriminelle üblicherweise Spam-E-Mails. Diese E-Mails enthalten u.a. Links zu einer Phishing-Seite, die sich als legitime Webseite ausgibt.
</p>',
  'PHISHING_TIPS'       => '<p><b><span style="color:#c31622"> Nehmen Sie die Webseite offline!<span></b>
</p><p>Es ist weiterhin möglich, dass Sie mit der Webseite Phishing-Inhalte zu Verfügung stellen und Kriminelle persönliche Daten darüber sammeln. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.
</p><p><b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />
</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.
</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />
<b>- Webfrontend (Hosting-Vertrag, Content-Management-System)</b><br />
<b>- FTP-, SSH-Zugänge</b><br />
<b>- Datenbank-Passwörter</b><br />
</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!
Löschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.
Überprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.
Sollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.
</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />
</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target="_self" rel="nofollow" class="external text" href="https://www.botfrei.de">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme. 
Mit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target="_self" rel="nofollow" class="external free" href="https://www.botfrei.de/de/eucleaner/index.html">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>
</span>
</p>',
  'PHISHING_LINK'       => '<p>Phishing-Inhalte
</p>',
  //
  // SPAM
  'SPAM'            => '<p>Überprüfung auf mögliche Spam-Inhalte
</p>',
  'SPAM_SUCCESS'    => '<p>Ihre Domain wurde in keiner uns bekannten Spam Liste gefunden.
</p>',
  'SPAM_ERROR'      => '<p>Ihre Domain wurde in Spam Listen gefunden
</p>',
  'SPAM_ERROR_DESC' => '<p>Als Spam bezeichnet man ungewollte und zum Teil unseriöse Werbung im E-Mail Postfach (z.B. Viagra-Werbung, Medikamente, Versicherung und Kreditvergleiche). Diese Werbungen werden massenhaft verschickt bzw. können aber auch zielgerichtet verschickt werden. In der Regel verschleiern die Absender ihre wahre Identität in der E-Mail und versuchen Sie zu täuschen.
</p>',
  'SPAM_TIPS'       => '<p><b><span style="color:#c31622"> Nehmen Sie die Webseite offline!<span></b>
</p><p>Um den Besuch Ihrer infizierten Webseite zu vermeiden bzw. damit Google Ihre Webseite nicht aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde, schalten Sie die Webseite offline. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.
</p><p>Um zu prüfen ob die Seite über diverse Spam-Merkmale verfügt, rufen Sie die Seite im Browser auf, klicken über die rechte Maustaste den "Quelltext anzeigen". In diesem Fenster können Sie Ihren Quellcode mit Drücken der Tasten <b>Strg+f</b> (suchen) auf gängige Online-Betrügereien durch Werbung für Medikamente oder dubiose Kreditgeschäft überprüfen.
</p><p><b>Einige Suchvorschläge</b>:<br />
- „payday“<br />
- „Pharma“<br />
- „Viagra“<br />
- „Cialis“<br /><br />
<b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />
</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.
</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />
<b>- Webfrontend (Hosting-Vertrag, Content-Management-System)</b><br />
<b>- FTP-, SSH-Zugänge</b><br />
<b>- Datenbank-Passwörter</b><br />
</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!
Löschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.
Überprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.
Sollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.
</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />
</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target="_self" rel="nofollow" class="external text" href="https://www.botfrei.de">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme. 
Mit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target="_self" rel="nofollow" class="external free" href="https://www.botfrei.de/de/eucleaner/index.html">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>
</span>
</p>',
  'SPAM_LINK'       => '<p>Spam-Inhalte
</p>',
  //
  // Category: Protokollversionen
  //
  // PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2'            => '<p>Überprüfung auf veraltetes SSL2 Protokoll
</p>',
  'PROTOCOLVERSION_SSL2_SUCCESS'    => '<p>Veraltete Protokollversion SSL2 nicht unterstützt
</p>',
  'PROTOCOLVERSION_SSL2_ERROR'      => '<p>Veraltete Protokollversion SSL2 unterstützt
</p>',
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => '<p>Der Server unterstützt die veraltete Protokollversion SSL2, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.
</p>',
  'PROTOCOLVERSION_SSL2_TIPS'       => '<p><a href="https://siwecos.de/wiki/Transport_Layer_Security" title="Transport Layer Security">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a href="https://siwecos.de/wiki/SSL" title="SSL">SSL2</a> verzichten. Weitere Informationen finden Sie hier: <a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/SSL">SSL</a> </p>',
  'PROTOCOLVERSION_SSL2_LINK'       => '<p>Veraltete-Protokollversion-SSL2
</p>',
  //
  // PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3'            => '<p>Überprüfung auf veraltetes SSL3 Protokoll
</p>',
  'PROTOCOLVERSION_SSL3_SUCCESS'    => '<p>Veraltete Protokollversion SSL3 nicht unterstützt
</p>',
  'PROTOCOLVERSION_SSL3_ERROR'      => '<p>Veraltete Protokollversion SSL3 unterstützt
</p>',
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => '<p>Der Server unterstützt die veraltete Protokollversion SSL3, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.
</p>',
  'PROTOCOLVERSION_SSL3_TIPS'       => '<p><a href="https://siwecos.de/wiki/Transport_Layer_Security" title="Transport Layer Security">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a href="https://siwecos.de/wiki/SSL" title="SSL">SSL3</a> verzichten. Weitere Informationen finden Sie hier: <a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/SSL">SSL</a> </p>',
  'PROTOCOLVERSION_SSL3_LINK'       => '<p>Veraltete-Protokollversion-SSL3
</p>',
  //
  // PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13'            => '<p>Überprüfung auf Einsatz  des TLS1.3 Protokoll
</p>',
  'PROTOCOLVERSION_TLS13_SUCCESS'    => '<p>TLS 1.3 nicht unterstützt
</p>',
  'PROTOCOLVERSION_TLS13_ERROR'      => '<p>Moderne TLS 1.3 unterstützt
</p>',
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => '<p>Der Server unterstützt die neueste TLS Protokollversion. Diese befindet sich noch im Standartisierungsprozess. Sollten sie nicht wissen was dies bedeutet, können sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützten und TLS 1.3 sich noch in der Entwicklung befindet.
</p>',
  'PROTOCOLVERSION_TLS13_TIPS'       => '<p>Es besteht kein Handlungsbedarf.
</p>',
  'PROTOCOLVERSION_TLS13_LINK'       => '<p>Protokollversion-TLS13-Gefunden
</p>',
  //
  // Category: Scanner
  //
  // SCANNER_NAME_DOMXSS
  'SCANNER_NAME_DOMXSS'            => '<p>DOMXSS Scanner
</p>',
  //
  // SCANNER_NAME_HEADER
  'SCANNER_NAME_HEADER'            => '<p>Header Scanner
</p>',
  //
  // SCANNER_NAME_INFOLEAK
  'SCANNER_NAME_INFOLEAK'            => '<p>Info Leak Scanner
</p>',
  //
  // SCANNER_NAME_INI_S
  'SCANNER_NAME_INI_S'            => '<p>Initiative-S Scanner
</p>',
  //
  // SCANNER_NAME_WS_TLS
  'SCANNER_NAME_WS_TLS'            => '<p>TLS Scanner
</p>',
  //
  // Category: Verschlüsselungsmethode
  //
  // CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED'            => '<p>Überprüfung der Client-Verschlüsselungsmethodik
</p>',
  'CIPHERSUITEORDER_ENFORCED_SUCCESS'    => '<p>Verantwortungsvolle Auswahl der Verschlüsselungsmethoden
</p>',
  'CIPHERSUITEORDER_ENFORCED_ERROR'      => '<p>Verantwortungslose Auswahl der Verschlüsselungsmethoden
</p>',
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => '<p>Ihr Webserver / Ihre Webseite ist so konfiguriert, dass die Verschlüsselungsmethodik des Webseiten-Besuchers bevorzugt wird, statt die Ihres Webservers. Server sollten die Auswahl der Verschlüsselungsmethoden nicht ihren Kunden überlassen, sondern aktiv starke Verbindungen auswählen.
</p>',
  'CIPHERSUITEORDER_ENFORCED_TIPS'       => '<p>Konfigurieren Sie Ihren Webservern so, dass der Webserver die Verschlüsselungsmethodik bei der Kommunikation zwischen Ihrer Webseite und dem Webbrowser des Besuchers bestimmt.
</p>',
  'CIPHERSUITEORDER_ENFORCED_LINK'       => '<p>Verschluesselungsmethode-Client
</p>',
  //
  // CIPHERSUITE_ANON
  'CIPHERSUITE_ANON'            => '<p>Überprüfung auf anonyme Verschlüsselungsmethodik.
</p>',
  'CIPHERSUITE_ANON_SUCCESS'    => '<p>Kein Anonymer Schlüsselaustausch unterstützt
</p>',
  'CIPHERSUITE_ANON_ERROR'      => '<p>Anonymer Schlüsselaustausch unterstützt
</p>',
  'CIPHERSUITE_ANON_ERROR_DESC' => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass eine unsichere Verschlüsselungsmethode (<a href="https://siwecos.de/wiki/Cipher_Suite" title="Cipher Suite">Cipher Suite</a>) ohne Rechtekontrolle bei der Verbindung erfolgt. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle" title="Man-in-the-middle">Man-in-the-Middle Attacken</a>. </p>',
  'CIPHERSUITE_ANON_TIPS'       => '<p>Deaktivieren Sie die Unterstützung des "Anonymen Schlüsselaustauschs" in der  Verschlüsselungsmethodik. In Konsequenz auf die bekannt gewordenen TLS Schwachstellen ist die wichtigste Regel, wann immer es geht, TLS 1.2 zu nutzen. SSL 3.0 sollte in Browser deaktiviert werden.
</p>',
  'CIPHERSUITE_ANON_LINK'       => '<p>Schluesselaustauschverfahren
</p>',
  //
  // CIPHERSUITE_DES
  'CIPHERSUITE_DES'            => '<p>Überprüfung auf DES Verschlüsselungsmethodik
</p>',
  'CIPHERSUITE_DES_SUCCESS'    => '<p>Keine veraltete DES Verschlüsselungsmethodik unterstützt
</p>',
  'CIPHERSUITE_DES_ERROR'      => '<p>Veraltete DES Verschlüsselungsmethodik unterstützt
</p>',
  'CIPHERSUITE_DES_ERROR_DESC' => '<p>Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.
</p>',
  'CIPHERSUITE_DES_TIPS'       => '<p>Deaktivieren Sie die Unterstützung der DES Verschlüsselungsmethodik in Ihrer Webserver-Software.
</p>',
  'CIPHERSUITE_DES_LINK'       => '<p>Schwaches-DES-Verschluesselungsprotokoll
</p>',
  //
  // CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT'            => '<p>Überprüfung auf schwache Verschlüsselungs-Funktionen
</p>',
  'CIPHERSUITE_EXPORT_SUCCESS'    => '<p>Keine schwache EXPORT Verschlüsselung unterstützt
</p>',
  'CIPHERSUITE_EXPORT_ERROR'      => '<p>Schwache Export Verschlüsselung unterstützt
</p>',
  'CIPHERSUITE_EXPORT_ERROR_DESC' => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass sich vorsätzlich unsichere Verschlüsselungsmethoden (<a href="https://siwecos.de/wiki/Cipher_Suite" title="Cipher Suite">Cipher Suites</a>) nutzen lassen. Dies ermöglicht <a href="/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1" class="new" title="Man-in-the-Middle (Seite nicht vorhanden)">Man-in-the-Middle Attacken</a>. </p>',
  'CIPHERSUITE_EXPORT_TIPS'       => '<p>Deaktivieren Sie die Unterstützung von EXPORT Verschlüsselungsmethoden im Webserver.
</p>',
  'CIPHERSUITE_EXPORT_LINK'       => '<p>Geschwaechtes-Verschluesselungsprotokoll
</p>',
  //
  // CIPHERSUITE_NULL
  'CIPHERSUITE_NULL'            => '<p>Überprüfung auf NULL-Chiffren
</p>',
  'CIPHERSUITE_NULL_SUCCESS'    => '<p>Keine unsicheren Null Chiffren unterstützt
</p>',
  'CIPHERSUITE_NULL_ERROR'      => '<p>Unsichere NULL Chiffren unterstützt
</p>',
  'CIPHERSUITE_NULL_ERROR_DESC' => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass zugelassen wird das unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle" title="Man-in-the-middle">Man-in-the-Middle Attacken</a>. </p>',
  'CIPHERSUITE_NULL_TIPS'       => '<p>Deaktivieren Sie die Unterstützung von NULL Verschlüsselungsmethoden.
</p>',
  'CIPHERSUITE_NULL_LINK'       => '<p>Unverschluesselte-Kommunikation
</p>',
  //
  // CIPHERSUITE_RC4
  'CIPHERSUITE_RC4'            => '<p>Überprüfung auf RC4 Verschlüsselungsmethodik
</p>',
  'CIPHERSUITE_RC4_SUCCESS'    => '<p>Keine veraltete RC4 Verschlüsselungsmethodik unterstützt
</p>',
  'CIPHERSUITE_RC4_ERROR'      => '<p>Veraltete RC4 Verschlüsselungsmethodik
unterstützt
</p>',
  'CIPHERSUITE_RC4_ERROR_DESC' => '<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 (<a href="/wiki/index.php?title=Ciper_Suite&amp;action=edit&amp;redlink=1" class="new" title="Ciper Suite (Seite nicht vorhanden)">Cipher Suites</a>) weiterhin unterstützt. Dies ermöglicht <a href="/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1" class="new" title="Man-in-the-Middle (Seite nicht vorhanden)">Man-in-the-Middle Attacken</a>. </p>',
  'CIPHERSUITE_RC4_TIPS'       => '<p>Deaktivieren Sie die Unterstützung der RC4 Verschlüsselungsmethodik.
</p>',
  'CIPHERSUITE_RC4_LINK'       => '<p>Unsichere-Verschluesselungsfunktion-RC4
</p>',
  //
  // Category: WS_TLS
  //
  // ANON_SUITES
  'ANON_SUITES'            => '<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass eine anonyme Verschlüsselungsmethodik (<a href="https://siwecos.de/wiki/Cipher_Suite" title="Cipher Suite">Cipher Suite</a>) ohne Authentikation bei der Verbindung erfolgt. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle" title="Man-in-the-middle">Man-in-the-Middle Attacken</a>. </p>',
  //
  // DES_SUITES
  'DES_SUITES'            => '<p>Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES  (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.
</p>',
  //
  // EXPIRED
  'EXPIRED'            => '<p>Ihr Zertifikat ist am&#160;%DATE% abgelaufen. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt.
</p>',
  //
  // EXPORT_SUITES
  'EXPORT_SUITES'            => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass sich vorsätzlich geschwächte kryptographische Funktionen (<a href="https://siwecos.de/wiki/Cipher_Suite" title="Cipher Suite">Cipher Suites</a>) nutzen lassen. Dies ermöglicht <a href="/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1" class="new" title="Man-in-the-Middle (Seite nicht vorhanden)">Man-in-the-Middle Attacken</a>. </p>',
  //
  // HASH_ALGO
  'HASH_ALGO'            => '<p>Ihr Server-Zertifikat nutzt den schwachen Hash-Algorithmus&#160;%HASH%. Das Zertifikat kann so sehr einfach gefälscht werden. Ein Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen Hash-Algorithmus jedoch nicht.
</p>',
  //
  // HTTPS_RESPONSE
  'HTTPS_RESPONSE'            => '<p>Der Server “%HOST%“ scheint überhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?
</p>',
  //
  // HTTPS_SUPPORTED
  'HTTPS_SUPPORTED'            => '<p>Der Server “%HOST%“ scheint kein TLS zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten von ihnen und die ihrer Kunden zu schützen.
</p>',
  //
  // NOT_YET_VALID
  'NOT_YET_VALID'            => '<p>Ihr Zertifikat wird erst am&#160;%DATE% gültig. Ihre Webseite wird Besuchern bis dahin als unsicher bzw. nicht vertrauenswürdig angezeigt.
</p>',
  //
  // NULL_SUITES
  'NULL_SUITES'            => '<p>Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass zugelassen wird das unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht <a href="https://siwecos.de/wiki/Man-in-the-middle" title="Man-in-the-middle">Man-in-the-Middle Attacken</a>. </p>',
  //
  // RC4_SUITES
  'RC4_SUITES'            => '<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 (<a href="/wiki/index.php?title=Ciper_Suite&amp;action=edit&amp;redlink=1" class="new" title="Ciper Suite (Seite nicht vorhanden)">Cipher Suites</a>) weiterhin unterstützt. Dies ermöglicht <a href="/wiki/index.php?title=Man-in-the-Middle&amp;action=edit&amp;redlink=1" class="new" title="Man-in-the-Middle (Seite nicht vorhanden)">Man-in-the-Middle Attacken</a>. </p>',
  //
  // Category: XSS-Scanner
  //
  // HAS_SINKS
  'HAS_SINKS'            => '<p>Überprüfung des JavaScript-Codes nach DOMXSS-Sinks
</p>',
  'HAS_SINKS_SUCCESS'    => '<p>Automatisiert wurden keine unsicheren Codebestandteile für DOMXSS-Sinks erkannt.
</p>',
  'HAS_SINKS_ERROR'      => '<p>Unsicheren JavaScript-Code verwendet (Sinks)
</p>',
  'HAS_SINKS_ERROR_DESC' => '<p>Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der unter bestimmten Voraussetzungen auf eine DOM-basierende Cross-Site Scripting Anfälligkeit hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen.
</p>',
  'HAS_SINKS_TIPS'       => '<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.
</p>',
  'HAS_SINKS_LINK'       => '<p>DOMXSS-Schwachstelle
</p>',
  //
  // HAS_SOURCES
  'HAS_SOURCES'            => '<p>Überprüfung des JavaScript-Codes nach DOMXSS-Sources
</p>',
  'HAS_SOURCES_SUCCESS'    => '<p>Automatisiert wurden keine unsicheren Codebestandteile für DOMXSS-Sources erkannt.
</p>',
  'HAS_SOURCES_ERROR'      => '<p>Unsicheren JavaScript-Code verwendet (Sources)
</p>',
  'HAS_SOURCES_ERROR_DESC' => '<p>Bei der Überprüfung wurde mindestens eine Schwachstelle auf der Webseite gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte.
</p>',
  'HAS_SOURCES_TIPS'       => '<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.
</p>',
  'HAS_SOURCES_LINK'       => '<p>Schadcode-Ueber-Fremde-Quellen
</p>',
  //
  // Category: Zertifikate
  //
  // CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED'            => '<p>Überprüfung der Zertifikat Laufzeit
</p>',
  'CERTIFICATE_EXPIRED_SUCCESS'    => '<p>Zertifikat nicht abgelaufen
</p>',
  'CERTIFICATE_EXPIRED_ERROR'      => '<p>Zertifikat abgelaufen
</p>',
  'CERTIFICATE_EXPIRED_ERROR_DESC' => '<p>Die Meldung bedeutet, dass Ihr <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Server-Zertifikatt</a> abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über <a href="https://siwecos.de/wiki/HTTPS" title="HTTPS">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt, z.B. "Ihr Zertifikat ist am Datum abgelaufen". Die Seite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt. </p>',
  'CERTIFICATE_EXPIRED_TIPS'       => '<p>Dieses Problem lässt sich lösen, indem Sie das eingesetzte <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikat</a> erneuern. Wie Sie Zertifikate verlängern können, lesen Sie hier: <a target="_self" rel="nofollow" class="external text" href="https://www.siwecos.de/wiki/Zertifikate#Was_tun.2C_wenn_ein_SSL-Zertifikat_abgelaufen_ist.3F">Zertifikat abgelaufen</a> </p>',
  'CERTIFICATE_EXPIRED_LINK'       => '<p>Zertifikat-Abgelaufen
</p>',
  //
  // CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER'            => '<p>Überprüfung der Zertifikatsübermittlung
</p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => '<p>Server sendet ein Zertifikat
</p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => '<p>Server sendet kein Zertifikat
</p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => '<p>Der Server hat kein <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikat</a> gesendet. Dies ist ungewöhnlich und sollte eigentlich nicht vorkommen. Der Server sollte seine <a href="https://siwecos.de/wiki/Transport_Layer_Security" title="Transport Layer Security">TLS-Konfiguration</a> überprüfen und ggfs. <a href="https://siwecos.de/wiki/CIPHERSUITE_ANON" title="CIPHERSUITE ANON">anonyme Ciphersuites</a> ausschalten. </p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_TIPS'       => '<p>Aktualisieren Sie dringend die von Ihnen eingesetzte <a href="https://siwecos.de/wiki/Transport_Layer_Security" title="Transport Layer Security">TLS-Implementierung</a>. Moderne Software erlaubt diese Art der Konfiguration nicht mehr. </p>',
  'CERTIFICATE_NOT_SENT_BY_SERVER_LINK'       => '<p>Zertifikat-Nicht-Gesendet
</p>',
  //
  // CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET'            => '<p>Überprüfung der Zertifikat Gültigkeit
</p>',
  'CERTIFICATE_NOT_VALID_YET_SUCCESS'    => '<p>Zertifikat ist schon gültig
</p>',
  'CERTIFICATE_NOT_VALID_YET_ERROR'      => '<p>Zertifikat noch nicht gültig
</p>',
  'CERTIFICATE_NOT_VALID_YET_ERROR_DESC' => '<p>Die Meldung bedeutet, dass Ihr <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Server-Zertifikat</a> noch nicht gültig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt. Sollte ein Nutzer Ihre Webseite über <a href="https://siwecos.de/wiki/HTTPS" title="HTTPS">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt. </p>',
  'CERTIFICATE_NOT_VALID_YET_TIPS'       => '<p>Deaktivieren Sie das <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikat</a> solange es <b>noch nicht</b> gültig ist. Ihre Webseite ist dann zwar nicht zertifiziert, jedoch erhalten Besucher zumindest keine Warnmeldung beim Aufruf Ihrer Webseite. Alternativ bietet sich die Möglichkeit an, Ihr altes <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikat</a> einzusetzen, so lange dies noch gültig ist. Wie Sie <a href="https://siwecos.de/wiki/Zertifikate" title="Zertifikate">Zertifikate</a> verlängern können, lesen Sie hier: <a href="https://siwecos.de/wiki/CERTIFICATE_EXPIRED" title="CERTIFICATE EXPIRED">Zertifikat abgelaufen</a>. </p>',
  'CERTIFICATE_NOT_VALID_YET_LINK'       => '<p>Zertifikat-Nicht-Gueltig
</p>',
  //
  // CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION'            => '<p>Überprüfung der Verschlüsselungsstärke des Zertifikats.
</p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => '<p>Starker Hash-Algorithmus
</p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => '<p>Schwacher Hash-Algorithmus
</p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => '<p>Die Meldung bedeutet, dass Ihr Server-Zertifikat einen schwachen Hash-Algorithmus (Verschlüsselung) besitzt. Es stellt möglicherweise ein leichtes Ziel für Hacker-Angriffe dar.
</p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_TIPS'       => '<p>Um dieses Problem zu lösen sollten sie ein neues Zertifikat mit einer sicheren Hash-Funktion (starke Verschlüsselung) installieren. Wie Sie ein sicheres Zertifikat bekommen, lesen Sie hier: <a href="https://siwecos.de/wiki/Zertifikate#Wie_wird_ein_SSL-Zertifikat_installiert.3F" title="Zertifikate">Zertifikat installieren</a>. </p>',
  'CERTIFICATE_WEAK_HASH_FUNCTION_LINK'       => '<p>Schwache-Verschluesselung
</p>',
  //
  // CERTIFICATE_WEAK_SIGN_ALGO
  'CERTIFICATE_WEAK_SIGN_ALGO'            => '<p>Überprüfung der Zertifikat Verschlüsselung
</p>',
  //
  // CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS
  'CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS'            => '<p>Überprüfung der Zertifikat Verschlüsselung
</p>',

];
