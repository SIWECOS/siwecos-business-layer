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
  // Category: %domain% ist unbekannt.
  //
  // COULDNT_RESOLVE_HOST
  'COULDNT_RESOLVE_HOST'            => "%domain% ist unbekannt.\n",
  //
  // Category: Angriffe
  //
  // BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE'            => "Überprüfung auf Bleichenbacher Schwachstelle <span class=\"promarker\"></span>\n",
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Bleichenbacher/DE\" title=\"Bleichenbacher/DE\">Bleichenbacher</a>\n",
  'BLEICHENBACHER_VULNERABLE_ERROR'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Bleichenbacher/DE\" title=\"Bleichenbacher/DE\">Bleichenbacher</a>\n",
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Bleichenbacher/DE\" title=\"Bleichenbacher/DE\">Bleichenbacher</a> Angriff. Hierbei kann die Kommunikation entschlüsselt und bei der Übertragung können Nutzereingaben wie Passwörter im Klartext gelesen werden.\n</p>",
  'BLEICHENBACHER_VULNERABLE_TIPS'       => "<p>Überprüfen Sie Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> bzw. spielen sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein.\n</p>",
  'BLEICHENBACHER_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Bleichenbacher-Schwachstelle/DE",
  //
  // CRIME_VULNERABLE
  'CRIME_VULNERABLE'            => "Überprüfung auf die CRIME Schwachstelle\n",
  'CRIME_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Crime-Schwachstelle/DE/Background\" title=\"Crime-Schwachstelle/DE/Background\">CRIME</a>\n",
  'CRIME_VULNERABLE_ERROR'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Crime-Schwachstelle/DE/Background\" title=\"Crime-Schwachstelle/DE/Background\">CRIME</a>\n",
  'CRIME_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Crime-Schwachstelle/DE/Background\" title=\"Crime-Schwachstelle/DE/Background\">CRIME</a>. Eine Schwachstelle, welche es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>",
  'CRIME_VULNERABLE_TIPS'       => "<p>CRIME kann besiegt werden, indem die Verwendung von Komprimierung verhindert wird. Entweder auf der Client-Seite, indem der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Browser</a> die Komprimierung von SPDY-Anfragen deaktiviert, oder indem die Webseite die Verwendung von Datenkompression bei solchen Transaktionen unter Verwendung der Protokollaushandlungsmerkmale des TLS-Protokolls verhindert. Deaktivieren sie <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Compression</a> auf Ihrem Server.\n</p>",
  'CRIME_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Crime-Schwachstelle/DE",
  //
  // HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE'            => "Überprüfung auf die Heartbleed Schwachstelle <span class=\"promarker\"></span>\n",
  'HEARTBLEED_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE/Background\" title=\"Heartbleed-Schwachstelle/DE/Background\">Heartbleed</a>\n",
  'HEARTBLEED_VULNERABLE_ERROR'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE/Background\" title=\"Heartbleed-Schwachstelle/DE/Background\">Heartbleed</a>\n",
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => "<p>Der Server ist verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE/Background\" title=\"Heartbleed-Schwachstelle/DE/Background\">Heartbleed</a>. Dadurch kann ein Angreifer sensible Daten aus dem Arbeitsspeicher des Servers auslesen, wie z. B. geheime Schlüssel und Kundendaten.\n</p>",
  'HEARTBLEED_VULNERABLE_TIPS'       => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein.\n</p>",
  'HEARTBLEED_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE",
  //
  // INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE'            => "Überprüfung auf die Ephemeral Invalid Curve Schwachstelle <span class=\"promarker\"></span>\n",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\">Ephemeral Invalid Curve Angriff</a> Angriffe.\n",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\">Ephemeral Invalid Curve Angriff</a> Angriffe.\n",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\">Ephemeral Invalid Curve Angriff</a>. Dadurch kann ein Angreifer die Verbindungen angreifen.\n</p>",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_TIPS'       => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein.\n</p>",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE",
  //
  // INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE'            => "Überprüfung auf die Invalid Curve Schwachstelle <span class=\"promarker\"></span>\n",
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Schwachstelle/DE/Background\">Invalid Curve Angriffe</a>.\n",
  'INVALID_CURVE_VULNERABLE_ERROR'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Schwachstelle/DE/Background\">Invalid Curve Angriffe</a>.\n",
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.golem.de/news/verschluesselung-punkte-auf-der-falschen-elliptischen-kurve-1511-117643.html\">Invalid Curve Angriff</a>. Dadurch kann ein Angreifer den geheimen Schlüssel Ihres <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikats</a> stehlen.\n</p>",
  'INVALID_CURVE_VULNERABLE_TIPS'       => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein.\n</p>",
  'INVALID_CURVE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Invalid-Curve-Schwachstelle/DE",
  //
  // PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE'            => "Überprüfung auf die Padding-Oracle Schwachstelle <span class=\"promarker\"></span>\n",
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/PADDING-ORACLE-Schwachstelle/DE/Background\" title=\"PADDING-ORACLE-Schwachstelle/DE/Background\">Padding</a> Oracle Angriffe.\n",
  'PADDING_ORACLE_VULNERABLE_ERROR'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/PADDING-ORACLE-Schwachstelle/DE/Background\" title=\"PADDING-ORACLE-Schwachstelle/DE/Background\">Padding Oracle Angriffe</a>.\n",
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.heise.de/security/artikel/Poodle-So-funktioniert-der-Angriff-auf-die-Verschluesselung-2425250.html\">Padding-Oracle Angriff</a>, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>",
  'PADDING_ORACLE_VULNERABLE_TIPS'       => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein.\n</p>",
  'PADDING_ORACLE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/PADDING-ORACLE-Schwachstelle/DE",
  //
  // POODLE_VULNERABLE
  'POODLE_VULNERABLE'            => "Überprüfung auf die Poodle Schwachstelle\n",
  'POODLE_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Poodle\" title=\"Poodle\">POODLE</a>\n",
  'POODLE_VULNERABLE_ERROR'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Poodle\" title=\"Poodle\">POODLE</a>\n",
  'POODLE_VULNERABLE_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Poodle\" title=\"Poodle\">POODLE-Angriff</a>, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.\n</p>",
  'POODLE_VULNERABLE_TIPS'       => "<p>Deaktivieren Sie umgehend das veraltete Verschlüsselungsprotokoll <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a> auf ihrem Server!\n</p>",
  'POODLE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/POODLE-Schwachstelle/DE",
  //
  // SWEET32_VULNERABLE
  'SWEET32_VULNERABLE'            => "Überprüfung auf Sweet32 Schwachstelle\n",
  'SWEET32_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Sweet32-Schwachstelle/DE/Background\" title=\"Sweet32-Schwachstelle/DE/Background\">Sweet32</a>.\n",
  'SWEET32_VULNERABLE_ERROR'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Sweet32-Schwachstelle/DE/Background\" title=\"Sweet32-Schwachstelle/DE/Background\">Sweet32</a>.\n",
  'SWEET32_VULNERABLE_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Sweet32-Schwachstelle/DE/Background\" title=\"Sweet32-Schwachstelle/DE/Background\">Sweet32</a>, welche es einem Angreifer erlaubt, Teile der Kommunikation zu entschlüsseln, falls über eine Verbindung große Mengen Daten transferiert werden.\n</p>",
  'SWEET32_VULNERABLE_TIPS'       => "<p>Wo es möglich ist, sollte man am besten ganz auf Triple-DES und Blowfish verzichten. Deaktivieren Sie <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.itwissen.info/Blockchiffre-block-cipher.html\">Blockchiffren</a> mit einer Länge von 64 Bit. Vergewissern Sie sich, das Protokolle wie <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSLv2</a> und <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSLv3</a> deaktiviert sind.\n</p>",
  'SWEET32_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Sweet32-Schwachstelle/DE",
  //
  // TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE'            => "Überprüfung auf die TLS-POODLE Schwachstelle\n",
  'TLS_POODLE_VULNERABLE_SUCCESS'    => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Tls-Poodle-Schwachstelle/DE/Background\" title=\"Tls-Poodle-Schwachstelle/DE/Background\">TLS-POODLE</a>.\n",
  'TLS_POODLE_VULNERABLE_ERROR'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Tls-Poodle-Schwachstelle/DE/Background\" title=\"Tls-Poodle-Schwachstelle/DE/Background\">TLS-Poodle</a>.\n",
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch eine Variante des Poodle-Angriffs auf <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS</a>, was es einem Angreifer erlaubt, die Kommunikation zu entschlüsseln.\n</p>",
  'TLS_POODLE_VULNERABLE_TIPS'       => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein. In der Apache-Konfiguration kann man etwa die Zeile \"SSLProtocol All -SSLv2 -SSLv3\" angeben.\n</p>",
  'TLS_POODLE_VULNERABLE_LINK'       => "https://siwecos.de/wiki/Tls-Poodle-Schwachstelle/DE",
  //
  // Category: Fehler
  //
  // SCANNER_TIMEOUT
  'SCANNER_TIMEOUT'            => "Der Scanner \"%scanner%\" wurde nach %timeoutvalue% Sekunden beendet, weil er kein Ergebnis geliefert hat.\n",
  //
  // TIMEOUT
  'TIMEOUT'            => "Zeitüberschreitung\n",
  'TIMEOUT_ERROR'      => "Der Scan hat kein Ergebnis geliefert und wurde deswegen abgebrochen.\n",
  'TIMEOUT_ERROR_DESC' => "<p>Eine Zeitüberschreitung bedeutet, dass der Scan Ihrer Domain länger dauerte, als ein Scan üblicherweise dauert.\n</p><p>Ursachen hierfür können unter anderem sein:\n</p><p>Ihr Server ist momentan nicht erreichbar oder überlastet.\n</p><p>Unser Scanner Server ist momentan überlastet.\n</p>",
  //
  // Category: Fehlermeldung
  //
  // COULDNT_CONNECT
  'COULDNT_CONNECT'            => "%domain% antwortet nicht.\n",
  //
  // DONT_LEAK_USER_CREDS
  'DONT_LEAK_USER_CREDS'            => "Sie sollten Ihre Zugangsdaten (Name und Passwort) nicht übermitteln.\n",
  //
  // GENERAL_ERROR
  'GENERAL_ERROR'            => "%ERRORTEXT%\n",
  //
  // HEADER_ENCODING_ERROR
  'HEADER_ENCODING_ERROR'            => "Der Header <b>%HEADER_NAME%</b> enthält <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Ersetzungszeichen/DE\" title=\"Ersetzungszeichen/DE\">nicht-verarbeitbare</a> Zeichen.\n",
  //
  // HEADER_NOT_SET
  'HEADER_NOT_SET'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist nicht gesetzt.\n",
  //
  // HEADER_SET_MULTIPLE_TIMES
  'HEADER_SET_MULTIPLE_TIMES'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> wurde mehrmals gesetzt.\n",
  //
  // JSON_DECODE_ERROR
  'JSON_DECODE_ERROR'            => "Es gibt hier einen <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://de.wikipedia.org/wiki/Json\">JSON</a> Übersetzungsfehler.\n",
  //
  // LOCALHOST_SCAN_NOT_ALLOWED
  'LOCALHOST_SCAN_NOT_ALLOWED'            => "Die lokale Überprüfung ist nicht erlaubt\n",
  //
  // MAX_AGE_ERROR
  'MAX_AGE_ERROR'            => "Es trat ein Fehler beim Überprüfen der `max-age`-Angabe auf.\n",
  //
  // NOT_REACHABLE
  'NOT_REACHABLE'            => "Nicht erreichbar.\n",
  //
  // NO_HTTP_RESPONSE
  'NO_HTTP_RESPONSE'            => "Die angegebene <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/URL\" title=\"URL\">URL</a> lieferte keine Antwort.\n",
  //
  // NO_RESPONSE
  'NO_RESPONSE'            => "Die angegebene <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/URL\" title=\"URL\">URL</a> lieferte keine Antwort.\n",
  //
  // NO_SOURCE_CODE
  'NO_SOURCE_CODE'            => "Keine Quelle gefunden.\n",
  //
  // NO_VALID_URL
  'NO_VALID_URL'            => "Die Internetadresse (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/URL\" title=\"URL\">URL</a>) ist nicht gültig.\n",
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
  'HTTPS_NOT_SUPPORTED'            => "Überprüfung der Reaktionszeit des HTTPS-Headers\n",
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => "Server unterstützt <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS</a>.\n",
  'HTTPS_NOT_SUPPORTED_ERROR'      => "Server scheint kein <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS</a> zu unterstützen.\n",
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> scheint kein TLS (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">Transportschichtsicherheit</a>) zu unterstützen. Dies bedeutet, dass Sie keinerlei Verschlüsselung einsetzen, um Ihre Daten und die Ihrer Kunden zu schützen.\n</p>",
  'HTTPS_NOT_SUPPORTED_TIPS'       => "<p>Aktivieren Sie TLS (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">Transportschichtsicherheit</a>)\n</p>",
  'HTTPS_NOT_SUPPORTED_LINK'       => "https://siwecos.de/wiki/Keine-TLS-Unterstuetzung/DE",
  //
  // HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE'            => "Überprüfung der Reaktionszeit des Headers\n",
  'HTTPS_NO_RESPONSE_SUCCESS'    => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> antwortet.\n",
  'HTTPS_NO_RESPONSE_ERROR'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> antwortet nicht.\n",
  'HTTPS_NO_RESPONSE_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> scheint überhaupt nicht zu antworten. Haben sie die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> richtig eingegeben?\n</p>",
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
  'CSP_CORRECT'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // CSP_LEGACY_HEADER_SET
  'CSP_LEGACY_HEADER_SET'            => "Der veraltete Header `X-Content-Security-Policy` ist gesetzt. Der neue standardisierte Header ist `Content-Security-Policy`.\n",
  //
  // CSP_NO_UNSAFE_INCLUDED
  'CSP_NO_UNSAFE_INCLUDED'            => "Die Content-Security-Policy-Schwachstelle (CSP) enthält keine unsicheren (unsafe) Direktiven, ist möglicherweise jedoch nicht sicher eingestellt.\n",
  //
  // CSP_UNSAFE_INCLUDED
  'CSP_UNSAFE_INCLUDED'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist unsicher gesetzt, da er `unsafe-inline`- oder `unsafe-eval`-Direktiven enthält.\n",
  //
  // CT_CORRECT
  'CT_CORRECT'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> \"%HEADER%\" ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // CT_HEADER_WITHOUT_CHARSET
  'CT_HEADER_WITHOUT_CHARSET'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist ohne Zeichensatzangabe gesetzt und dadurch nicht sicher.\n",
  //
  // CT_HEADER_WITH_CHARSET
  'CT_HEADER_WITH_CHARSET'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist korrekt gesetzt und beinhaltet eine Zeichensatz-Angabe.\n",
  //
  // CT_META_TAG_SET
  'CT_META_TAG_SET'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist korrekt gesetzt und enthält jedoch keine Zeichensatz-Angabe oder folgt nicht den Empfehlungen. Gefunden wurde \"%META%\".\n",
  //
  // CT_META_TAG_SET_CORRECT
  'CT_META_TAG_SET_CORRECT'            => "Die Angabe \"%META%\" im HTML-Header ist korrekt gesetzt.\n",
  //
  // CT_WRONG_CHARSET
  'CT_WRONG_CHARSET'            => "Ein falscher oder ungültiger Zeichensatz wurde eingetragen. Die Konfiguration ist nicht sicher.\n",
  //
  // HPKP_LESS_15
  'HPKP_LESS_15'            => "Die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselung\" title=\"Verschlüsselung\">öffentlichen Schlüssel</a> sind für weniger als 15 Tage <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTP_Public_Key_Pinning\" title=\"HTTP Public Key Pinning\">gepinnt</a>.\n",
  //
  // HPKP_MORE_15
  'HPKP_MORE_15'            => "Die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselung\" title=\"Verschlüsselung\">Schlüssel</a> sind für mehr als 15 Tage <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTP_Public_Key_Pinning\" title=\"HTTP Public Key Pinning\">gepinnt</a>.\n",
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
  // HTTPONLY_FLAG_SET
  'HTTPONLY_FLAG_SET'            => "Das HttpOnly Flag ist gesetzt.\n",
  //
  // INCLUDE_SUBDOMAINS
  'INCLUDE_SUBDOMAINS'            => "`includeSubDomains` ist gesetzt.\n",
  //
  // NO_HTTPONLY_FLAG_SET
  'NO_HTTPONLY_FLAG_SET'            => "Das HttpOnly Flag ist nicht gesetzt.\n",
  //
  // NO_SECURE_FLAG_SET
  'NO_SECURE_FLAG_SET'            => "Das Secure Flag ist nicht gesetzt.\n",
  //
  // NO_SINKS_FOUND
  'NO_SINKS_FOUND'            => "Es wurden keine „<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sinks\" title=\"DOMXSS-Sinks\">Sinks</a>“ gefunden.\n",
  //
  // NO_SOURCES_FOUND
  'NO_SOURCES_FOUND'            => "Es wurden keine „<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sources\" title=\"DOMXSS-Sources\">Sources</a>“ gefunden.\n",
  //
  // SECURE_FLAG_SET
  'SECURE_FLAG_SET'            => "Das Secure Flag ist gesetzt.\n",
  //
  // SET_COOKIE
  'SET_COOKIE'            => "Überprüfung von Set-Cookie\n",
  'SET_COOKIE_SUCCESS'    => "Cookies sind gesichert.\n",
  'SET_COOKIE_ERROR'      => "Cookies sind nicht gesichert.\n",
  'SET_COOKIE_ERROR_DESC' => "<p>Cookies sollten durch das Setzen des HttpOnly und Secure flags gesichert werden um zu verhindern, dass Dritte die Informationen abgreifen oder verändern können.\n</p>",
  'SET_COOKIE_TIPS'       => "",
  'SET_COOKIE_LINK'       => "https://siwecos.de/wiki/Set-Cookie/DE",
  //
  // SINKS_FOUND
  'SINKS_FOUND'            => "Es wurden „<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sinks\" title=\"DOMXSS-Sinks\">Sinks</a>“ gefunden.\n",
  //
  // SOURCES_FOUND
  'SOURCES_FOUND'            => "Es wurden „<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sources\" title=\"DOMXSS-Sources\">Sources</a>“ gefunden.\n",
  //
  // XCTO_CORRECT
  'XCTO_CORRECT'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // XCTO_NOT_CORRECT
  'XCTO_NOT_CORRECT'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist nicht korrekt gesetzt.\n",
  //
  // XFO_CORRECT
  'XFO_CORRECT'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // XFO_WILDCARDS
  'XFO_WILDCARDS'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> enthält Wildcard-Angaben (*) und ist daher nicht sicher konfiguriert.\n",
  //
  // XXSS_BLOCK
  'XXSS_BLOCK'            => "Die `mode=block`-Direktive ist aktiviert.\n",
  //
  // XXSS_CORRECT
  'XXSS_CORRECT'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist korrekt gesetzt und entspricht den Empfehlungen.\n",
  //
  // Category: HTTP-Security-Header-Scanner
  //
  // CONTENT_SECURITY_POLICY
  'CONTENT_SECURITY_POLICY'            => "Überprüfung der Content Security Policy (CSP)\n",
  'CONTENT_SECURITY_POLICY_SUCCESS'    => "Eine sichere Konfiguration der Content Security Policy (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Security-Policy-Schwachstelle/DE/Background\" title=\"Content-Security-Policy-Schwachstelle/DE/Background\">CSP</a>) wurde gefunden.\n",
  'CONTENT_SECURITY_POLICY_ERROR'      => "Content Security Policy unsicher\n",
  'CONTENT_SECURITY_POLICY_ERROR_DESC' => "<p>Die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Security-Policy/DE\" title=\"Content-Security-Policy/DE\">Content-Security-Policy</a> ist eine strukturierte Vorgehensweise, welches das Injizieren und Ausführen von evtl. bösartigen Befehlen in einer <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Webanwendung\" title=\"Webanwendung\">Webanwendung</a> (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Injection\" title=\"Injection\">Injection-Angriffe</a>) mildern soll. Es stellt über eine <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Whitelist/DE\" title=\"Whitelist/DE\">Whitelist</a> dar, von welchen Quellen z. B. <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Javascript\" title=\"Javascript\">Javascript</a>, Bilder, Schriftarten und andere Inhalte auf Ihrer Seite eingebunden werden dürfen.\n</p>",
  'CONTENT_SECURITY_POLICY_TIPS'       => "<p>Verwenden Sie den CSP mit default-src 'none' und ohne 'unsafe-eval' oder 'unsafe-inline' Richtlinien. Mehr zu <b>Content Security Policy</b> (zu deutsch etwa \"Richtlinie für die Sicherheit der Inhalte\") finden Sie bei <b><a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://wiki.selfhtml.org/wiki/Sicherheit/Content_Security_Policy\">SELFHTML &gt;&gt;</a></b>\n</p><p><br />\n--snip<br />\n</p><p><b>Beispiele für den Header der Startseite:</b>\n</p>\n<pre>\n&lt;meta http-equiv=\"Content-Security-Policy\" content=\"default-src 'self'; script-src 'self'\"&gt;\n&lt;meta http-equiv=\"X-Content-Security-Policy\" content=\"default-src 'self'; script-src 'self'\"&gt;\n&lt;meta http-equiv=\"X-WebKit-CSP\" content=\"default-src 'self'; script-src 'self'\"&gt;</pre>\n<p><b>Konfiguration des Webservers</b>\n</p><p>Wenn man seinen eigenen Webserver konfigurieren kann, was bei günstigen Hostingangeboten in aller Regel nicht der Fall ist, dann gibt es diese Einstellungsmöglichkeit über die <b>Bearbeitung der .htaccess</b>:\n</p>\n<pre># Download: Lade Inhalte nur von Seiten, die explizit erlaubt sind\n# Beispiel: Alles von der eigenen Domain erlauben, keine Externas:\n\nHeader set Content-Security-Policy \"default-src 'none'; frame-src 'self'; font-src 'self';img-src 'self' siwecos.de; object-src 'self'; script-src 'self'; style-src 'self';\"\n\n</pre>\n<p>--snap\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess-Datei aussehen kann, um einen höheren Wert beim <b>HTTP-Security-Header-Scanner</b> zu erzielen.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess/DE\" title=\"Htaccess/DE\">.htaccess-Beispiel</a>)\n</p>",
  'CONTENT_SECURITY_POLICY_LINK'       => "https://siwecos.de/wiki/Content-Security-Policy-Schwachstelle/DE",
  //
  // CONTENT_TYPE
  'CONTENT_TYPE'            => "Überprüfung des HTTP Content-Types\n",
  'CONTENT_TYPE_SUCCESS'    => "Die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Type-Nicht-Korrekt/DE/Background\" title=\"Content-Type-Nicht-Korrekt/DE/Background\">Content Type Angabe</a> ist korrekt konfiguriert.\n",
  'CONTENT_TYPE_ERROR'      => "Inkorrekte HTTP Content-Type Konfiguration\n",
  'CONTENT_TYPE_ERROR_DESC' => "<p>Der Content-Type ist eine Angabe, die für gewöhnlich im Kopfbereich der Webseite, dem sogenannten <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a>, untergebracht wird. Durch diese Angaben wird der Zeichensatz und der Typ des Inhalts der Seite definiert. Sollte eine Definition fehlen, wird der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Browser</a> versuchen, den Content-Type zu erraten; dies kann zu <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Sicherheitslücken</a> wie <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Sniffer\" title=\"Sniffer\">Code-Page-Sniffing</a> führen. Diese Angaben sind zudem wichtig, damit die Webseite in jedem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Browser</a> und auf jedem Computer einwandfrei dargestellt wird. Wenn ein Server ein Dokument an einen <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://de.wikipedia.org/wiki/User_Agent\">User-Agent</a> sendet (zum Beispiel zum <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Browser</a>) ist es nützlich, im Content-Type-Feld des HTTP-Headers die Art des Dateiformates zu hinterlegen. Diese Informationen deklarieren den <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://de.wikipedia.org/wiki/Internet_Media_Type\">MIME-Typ</a> und senden entsprechend die Zeichenkodierung des Dokuments wie text/html, text/plain, etc. an den Browser.\n</p>",
  'CONTENT_TYPE_TIPS'       => "<p>Fügen Sie den entsprechenden HTTP-Header oder alternativ ein &lt;meta&gt; Tag hinzu. Bitte beachten Sie, dass &lt;meta&gt; im Gegensatz zu einem HTTP-Header leichter umgangen werden kann.\n</p><p><b>text/html; charset=utf-8</b>;\n</p><p><b>--snip</b>\n</p>\n<pre>&lt;meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"&gt;</pre>\n<p><b>—snap</b>\n</p><p><br />\nWeiterhin muss der Server selber konfiguriert werden, damit die <b>richtige charset-Information</b> gesendet wird. Dazu werden entsprechende Berechtigungen benötigt, um die Änderungen am Server durchführen zu können. Weitere Informationen zu den verschiedenen Serverkonfigurationen finden Sie auf den Seiten von <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.w3.org/International/articles/http-charset/index.de\">W3.org</a>.\n</p><p>Darüber hinaus gibt es auch die Möglichkeit die <b>richtige charset-Information</b> der <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"http://httpd.apache.org/docs/2.0/howto/htaccess.html\"><b>.htaccess</b></a> zu übergeben, welche die Angaben im HTTP-Header überschreiben. <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.w3.org/International/questions/qa-htaccess-charset\">charset in .htaccess</a>\n</p><p><b>In die .htaccess eintragen:</b>\n</p>\n<pre>AddType 'text/html; charset=UTF-8' html</pre>\n<p>Hier finden Sie ein Beispiel, wie eine .htaccess-Datei aussehen kann, um einen höheren Wert beim <b>HTTP-Security-Header-Scanner</b> zu erzielen.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess/DE\" title=\"Htaccess/DE\">.htaccess-Beispiel</a>)\n</p>",
  'CONTENT_TYPE_LINK'       => "https://siwecos.de/wiki/Content-Type-Nicht-Korrekt/DE",
  //
  // PUBLIC_KEY_PINS
  'PUBLIC_KEY_PINS'            => "Überprüfung des Public Key Pinning (HPKP) - Ist aktuell deaktiviert\n",
  'PUBLIC_KEY_PINS_SUCCESS'    => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Public-Key-Pins-Deaktiviert/DE/Background\" title=\"Public-Key-Pins-Deaktiviert/DE/Background\">Public-Key-Pinning</a> ist aktiviert (HPKP wird derzeit nicht überprüft).\n",
  'PUBLIC_KEY_PINS_ERROR'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Public-Key-Pins-Deaktiviert/DE/Background\" title=\"Public-Key-Pins-Deaktiviert/DE/Background\">Public-Key-Pinning</a> nicht vorhanden. (HPKP wird derzeit nicht überprüft).\n",
  'PUBLIC_KEY_PINS_ERROR_DESC' => "<p>Mächtige Angreifer wie bspw. Geheimdienste können ggf. eine <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Digitale_Signatur\" title=\"Digitale Signatur\">Signatur</a> mit der Hilfe einer von den Benutzern akzeptierten <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifizierungsstelle\" title=\"Zertifizierungsstelle\">Zertifizierungsstelle</a> erstellen lassen. Um dies zu verhindern, kann eine Webseite definieren, dass beim ersten Aufruf des <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikats</a> das Zertifikat dauerhaft gespeichert wird (pinning). Mit der Hilfe von <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTP_Public_Key_Pinning\" title=\"HTTP Public Key Pinning\">Key-Pinning</a> wird für die von der Webseite definierten Zeit lediglich das gespeicherte <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> akzeptiert.\n</p>",
  'PUBLIC_KEY_PINS_TIPS'       => "<p>Das Setzen des <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Public-Key-Pins-Deaktiviert/DE/Background\" title=\"Public-Key-Pins-Deaktiviert/DE/Background\">Public Key Pinning</a> (HPKP) ist kein absolutes Muss und wird aktuell im Siwecos-Scanner nicht berücksichtigt.\n</p><p>Die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Browser</a> Mozilla, Firefox und Google Chrome richten sich nach dem <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://de.wikipedia.org/wiki/HTTP_Public_Key_Pinning\">RFC-7469-Standard</a> und ignorieren daher HPKP-Header. Wenn nur ein einziger Pin gesetzt ist, wird eine Fehlermeldung angezeigt. Damit die Pin-Validierung funktioniert, ist es also immer notwendig mindestens zwei gültige Public Keys bzw. einen Backup-Pin anzugeben. Interessierte sollten sich dazu an einen IT-Sicherheitsexperten oder Webentwickler wenden.\n</p><p>Weiterführende Informationen finden Sie im <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.zdnet.com/article/google-chrome-is-backing-away-from-public-key-pinning-and-heres-why/\">Artikel von ZDNET</a>\n</p><p><br />\n</p><p><br />\n</p>",
  'PUBLIC_KEY_PINS_LINK'       => "https://siwecos.de/wiki/Public-Key-Pins-Deaktiviert/DE",
  //
  // STRICT_TRANSPORT_SECURITY
  'STRICT_TRANSPORT_SECURITY'            => "Überprüfung des HSTS Schutzes\n",
  'STRICT_TRANSPORT_SECURITY_SUCCESS'    => "Ihre Webseite ist ausschließlich über das sichere <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTPS\" title=\"HTTPS\">HTTPS-Protokoll</a> erreichbar. Kommunikation zwischen Ihrer Webseite und den Besuchern kann nicht abgehört und manipuliert werden.\n",
  'STRICT_TRANSPORT_SECURITY_ERROR'      => "HSTS Schutz Fehler\n",
  'STRICT_TRANSPORT_SECURITY_ERROR_DESC' => "<p>Strict-Transport-Security (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTP_Strict_Transport_Security\" title=\"HTTP Strict Transport Security\">HSTS</a>) stellt sicher, dass die Webseite für eine bestimmte Zeit lediglich über <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a> gesicherte Verbindung aufgerufen werden kann. Der Webseitenbetreiber kann diesbezüglich u. a. definieren, wie lange der Zeitinterval ist und ob diese Regelung auch für <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Subdomains</a> gelten soll.\n</p>",
  'STRICT_TRANSPORT_SECURITY_TIPS'       => "<p>max-age=63072000; includeSubdomains;\nHTTP Strict Transport Security (HSTS) ist ein einfach zu integrierender Web-Security-Policy-Mechanismus.\n</p>\n<b>--snip</b><pre>\n# HTTP Strict Transport Security (HSTS) aktivieren\n# Pflichtangabe: \"max-age\"\n# Optional: \"includeSubDomains\"</pre>\n<pre>  <b>Header set Strict-Transport-Security \"max-age=31556926; includeSubDomains\"</b>\n</pre>\n<p><b>--snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess-Datei aussehen kann, um einen höheren Wert beim <b>HTTP-Security-Header-Scanner</b> zu erzielen.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess/DE\" title=\"Htaccess/DE\">.htaccess-Beispiel</a>)\n</p>",
  'STRICT_TRANSPORT_SECURITY_LINK'       => "https://siwecos.de/wiki/Keine-Verschluesselung-Gefunden/DE",
  //
  // X_CONTENT_TYPE_OPTIONS
  'X_CONTENT_TYPE_OPTIONS'            => "Überprüfung des X-Content-Type Headers\n",
  'X_CONTENT_TYPE_OPTIONS_SUCCESS'    => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">HTTP-Header</a> ist korrekt gesetzt.\n",
  'X_CONTENT_TYPE_OPTIONS_ERROR'      => "X-Content-Type Header fehlt.\n",
  'X_CONTENT_TYPE_OPTIONS_ERROR_DESC' => "<p>Die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/X-Content-Type-Options-Schwachstelle/DE/Background\" title=\"X-Content-Type-Options-Schwachstelle/DE/Background\">X-Content-Type-Options</a> Einstellungen im <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> verhindern, dass der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Browser</a> Dateien als etwas anderes interpretiert, als vom Inhaltstyp im <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTP\" title=\"HTTP\">HTTP-Header</a> deklariert wurde. Die Headereinstellungen sind hier nicht gesetzt.\n</p>",
  'X_CONTENT_TYPE_OPTIONS_TIPS'       => "<p>nosniff; <br /><br />\n<b>Beispielcode einer .htaccess auf einem Apache Webserver</b><br />\n</p>\n<b>--snip</b><pre>\n&lt;IfModule mod_headers.c&gt;\n   # prevent mime based attacks like drive-by download attacks, IE and Chrome\n   '''Header set X-Content-Type-Options \"nosniff\"'''\n&lt;pre&gt;&lt;/IfModule&gt;</pre>\n<p><b>—snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess-Datei aussehen kann, um einen höheren Wert beim <b>HTTP-Security-Header-Scanner</b> zu erzielen.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess/DE\" title=\"Htaccess/DE\">.htaccess-Beispiel</a>)\n</p>",
  'X_CONTENT_TYPE_OPTIONS_LINK'       => "https://siwecos.de/wiki/X-Content-Type-Options-Schwachstelle/DE",
  //
  // X_FRAME_OPTIONS
  'X_FRAME_OPTIONS'            => "Überprüfung der HTTP-Header X-Frame Optionen\n",
  'X_FRAME_OPTIONS_SUCCESS'    => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">Header</a> ist korrekt gesetzt und verbessert den Schutz Ihrer Webseite gegen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Clickjacking\" title=\"Clickjacking\">Clickjacking-Attacken</a>.\n",
  'X_FRAME_OPTIONS_ERROR'      => "HTTP-Header X-Frame Optionen nicht gesetzt.\n",
  'X_FRAME_OPTIONS_ERROR_DESC' => "<p>Das Setzen von <b>X-Frame-Options</b> hilft dabei, Angriffe über <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Framing-Mechanismen/DE\" title=\"Framing-Mechanismen/DE\">Framing-Mechanismen</a> zu unterbinden. Dies gewährleistet bspw., dass <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Clickjacking\" title=\"Clickjacking\">Clickjacking</a>-Angriffe größtenteils gemildert werden können. Darüber hinaus werden <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Downgrading_Angriffe\" title=\"Downgrading Angriffe\">Downgrading-Angriffe</a> wie etwa im Internet Explorer minimiert.\n</p>",
  'X_FRAME_OPTIONS_TIPS'       => "<p>Im <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">HTTP-Header</a> entsprechend den Bedürfnissen setzen. Die <b>X-Frame-Options</b> im <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTP\" title=\"HTTP\">HTTP</a> Header kann verwendet werden, um zu bestimmen, ob ein aufrufender <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Browser</a> die Zielseite in einem &lt;frame&gt;, &lt;iframe&gt; oder bspw. &lt;object&gt; rendern bzw. einbetten darf. Webseiten können diesen Header verwenden, um u. a. <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Clickjacking\" title=\"Clickjacking\">Clickjacking-Angriffe</a> abzuwehren, indem sie unterbinden, dass ihr Content in fremden Seiten eingebettet wird.\n</p><p>Mit dem HTTP-Header Befehl <b>X-Frame-Options</b> können moderne Webbrowser angewiesen werden, eine Seite nicht in einem Frame auf einer andere Website zu laden. Dafür muss der folgende Befehl in der htaccess-Datei gesetzt werden:\n</p><p>Header always append X-Frame-Options DENY\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options DENY\n</pre>\n<p><b>—snap</b>\n</p><p>Alternativ kann erlaubt werden, dass die Seite nur auf anderen Seiten der gleichen Domain eingebunden werden dürfen:\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options SAMEORIGIN\n</pre>\n<p><b>—snap</b>\n</p><p>Falls eine Website doch extern eingebunden werden muss, kann eine Domain angegeben werden:\n</p><p><b>--snip</b>\n</p>\n<pre>\nHeader always append X-Frame-Options ALLOW-FROM botfrei.de\n</pre>\n<p><b>—snap</b>\n</p><p><br />\nHier finden Sie ein Beispiel, wie eine .htaccess-Datei aussehen kann, um einen höheren Wert beim <b>HTTP-Security-Header-Scanner</b> zu erzielen.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess/DE\" title=\"Htaccess/DE\">.htaccess-Beispiel</a>)\n</p>",
  'X_FRAME_OPTIONS_LINK'       => "https://siwecos.de/wiki/X-Frame-Options-Schwachstelle/DE",
  //
  // X_XSS_PROTECTION
  'X_XSS_PROTECTION'            => "Überprüfung des X-XSS-Protection Headers\n",
  'X_XSS_PROTECTION_SUCCESS'    => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Cross-Site_Scripting\" title=\"Cross-Site Scripting\">Cross-Site Scripting-Schutz</a> (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/XSS-Schwachstelle/DE\" title=\"XSS-Schwachstelle/DE\">XSS</a>) des <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Webbrowsers</a> ist auf Ihrer Seite aktiviert.\n",
  'X_XSS_PROTECTION_ERROR'      => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Cross-Site_Scripting\" title=\"Cross-Site Scripting\">Cross-Site Scripting-Schutz</a> (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/XSS-Schwachstelle/DE\" title=\"XSS-Schwachstelle/DE\">XSS</a>) ist nicht aktiviert oder unzureichend konfiguriert.\n",
  'X_XSS_PROTECTION_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Header\" title=\"Header\">HTTP-Header</a> X-XSS-Protection definiert wie in <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Browsern</a> eingebaute XSS-Filter konfiguriert werden. Eine Default-Installation kann eine unzureichende Konfiguration offenbaren.\n</p>",
  'X_XSS_PROTECTION_TIPS'       => "<p>1; mode=block\n</p><p><b>Beispielcode einer .htaccess auf einem Apache Webserver</b>\n</p>\n<b>--snip</b><br /><pre>\n   # Turn on XSS prevention tools, activated by default in IE and Chrome\n   '''Header set X-XSS-Protection \"1; mode=block\"'''\n</pre>\n<p><b>—snap</b>\n</p><p>Hier finden Sie ein Beispiel, wie eine .htaccess-Datei aussehen kann, um einen höheren Wert beim <b>HTTP-Security-Header-Scanner</b> zu erzielen.\n(<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Htaccess/DE\" title=\"Htaccess/DE\">.htaccess-Beispiel</a>)\n</p>",
  'X_XSS_PROTECTION_LINK'       => "https://siwecos.de/wiki/XSS-Schwachstelle/DE",
  //
  // Category: INI_S
  //
  // MALWARE_FOUND
  'MALWARE_FOUND'            => "Ihre Domain ‘%site%’ wurde in folgenden Malware-Listen gefunden: %where%\n",
  //
  // PHISHING_FOUND
  'PHISHING_FOUND'            => "Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> ‘%site%’ wurde in folgenden <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Listen/DE\" title=\"Listen/DE\">Phishing-Listen</a> gefunden: %where%\n",
  //
  // SPAM_FOUND
  'SPAM_FOUND'            => "Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> ‘%site%’ wurde in folgenden <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Listen/DE\" title=\"Listen/DE\">Spam-Listen</a> gefunden: %where%\n",
  //
  // Category: Infoleak
  //
  // CMS_ONLY
  'CMS_ONLY'            => "Das von Ihnen verwendete Content Management System (%cms%) ist erkennbar.\n",
  //
  // CMS_VERSION
  'CMS_VERSION'            => "Das verwendete CMS %cms% und dessen Version %version% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.\n",
  //
  // CMS_VERSION_VULN
  'CMS_VERSION_VULN'            => "Das verwendete CMS %cms% der Version %version% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.\n",
  //
  // EMAIL_FOUND
  'EMAIL_FOUND'            => "Die E-Mail-Adresse %email_adress% wurde gefunden. Wollen Sie diese E-Mail-Adresse wirklich veröffentlichen? Ein Angreifer kann diese bspw. für <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Phishing\" title=\"Phishing\">Phishing</a>-Angriffe nutzen.\n",
  //
  // JS_LIB_ONLY
  'JS_LIB_ONLY'            => "Die verwendete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript-Bibliothek</a> %js_lib_name% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.\n",
  //
  // JS_LIB_VERSION
  'JS_LIB_VERSION'            => "Die verwendete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript-Bibliothek</a> %js_lib_name% mit der Version %js_lib_version% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.\n",
  //
  // JS_LIB_VULN_VERSION
  'JS_LIB_VULN_VERSION'            => "Die verwendete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript-Bibliothek</a> %js_lib_name% mit der Version %js_lib_version% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.\n",
  //
  // NUMBER_FOUND
  'NUMBER_FOUND'            => "Die Telefonnummer %number% wurde gefunden. Wollen Sie diese Telefonnummer wirklich veröffentlichen? Ein Angreifer kann diese bspw. für <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Social_engineering\" title=\"Social engineering\">Social Engineering</a> (zwischenmenschliche Beeinflussungen) Angriffe einsetzen.\n",
  //
  // PLUGIN_ONLY
  'PLUGIN_ONLY'            => "Das verwendete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">CMS</a>-<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Plugin\" title=\"Plugin\">Plugin</a> %plugin% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.\n",
  //
  // PLUGIN_VERSION
  'PLUGIN_VERSION'            => "Das verwendete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">CMS</a>-<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Plugin\" title=\"Plugin\">Plugin</a> %plugin% mit der Version %plugin_version% in DOM-Node %node% mit dem Inhalt %node_content% wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.\n",
  //
  // PLUGIN_VERSION_VULN
  'PLUGIN_VERSION_VULN'            => "Das verwendete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">CMS</a>-<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Plugin\" title=\"Plugin\">Plugin</a> %plugin% der Version %plugin_version% in DOM-node %node% mit dem Inhalt %node_content% wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.\n",
  //
  // Category: Information-Leakage-Scanner
  //
  // CMS
  'CMS'            => "Überprüfung der CMS Version\n",
  'CMS_SUCCESS'    => "Es können keine Aussagen über die Version des verwendeten <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">CMS</a> gemacht werden. Entsprechend kann nicht ermittelt werden, ob Sie eine verwundbare Version benutzen.\n",
  'CMS_ERROR'      => "Content Management System (CMS) erkennbar\n",
  'CMS_ERROR_DESC' => "<p>Das verwendete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">Content Management System</a> kann identifiziert werden. Diese Information könnte von einem Angreifer genutzt werden, um gezielt nach <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstellen</a> für dieses spezielle CMS zu suchen.\n</p>",
  'CMS_TIPS'       => "<p>Halten Sie installierte Webserver und das <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-System-Gefunden/DE\" title=\"Content-Management-System-Gefunden/DE\">Content Management System</a> immer auf dem aktuellsten Stand. Manche CMS-Systeme erlauben es, Versionsinformationen zu verstecken. Nutzen sie dieses Feature falls verfügbar, evtl. ist z. B. das WordPress Plugin \"<a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"http://wp-premiumthemes.de/hide-my-wp-tutorial-deutsch/\">Hide My WP</a>\" interessant für Sie.\n</p><p><b>Weiteres Beispiel für WordPress:</b>\nDamit Angreifer oder Hacker z. B. nicht direkt die WordPress-Version auslesen können, kann man folgende Codezeile in der Datei <b>functions.php</b> ganz am Ende einfügen:\n</p><p><b>--snip</b>\n</p><p>remove_action('wp_head','wp_generator');\n</p><p><b>--snap</b>\n</p>",
  'CMS_LINK'       => "https://siwecos.de/wiki/Content-Management-System-Gefunden/DE",
  //
  // CMS_PLUGINS
  'CMS_PLUGINS'            => "Überprüfung auf CMS-Plugins\n",
  'CMS_PLUGINS_SUCCESS'    => "Es konnten keine <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Plugin\" title=\"Plugin\">CMS-Plugins</a> erkannt werden. Angriffe mithilfe von <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstellen</a>, die in <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Plugin-Gefunden/DE/Background\" title=\"Plugin-Gefunden/DE/Background\">Plugins</a> existieren, sind somit unwahrscheinlicher.\n",
  'CMS_PLUGINS_ERROR'      => "CMS <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Plugin-Gefunden/DE/Background\" title=\"Plugin-Gefunden/DE/Background\">Plugin</a> erkannt\n",
  'CMS_PLUGINS_ERROR_DESC' => "<p>Es wurde ein von Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">CMS-System</a> genutztes <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Plugin-Gefunden/DE/Background\" title=\"Plugin-Gefunden/DE/Background\">Plugin</a> entdeckt. Ein Angreifer könnte diese Information nutzen, um gezielt nach <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstellen</a> für Ihre Website zu suchen.\n</p>",
  'CMS_PLUGINS_TIPS'       => "<p><a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Plugin-Gefunden/DE/Background\" title=\"Plugin-Gefunden/DE/Background\">Plugins</a> sollten auf jene beschränkt werden, die tatsächlich benötigt werden. Damit kann die Angriffsfläche erheblich reduziert werden. Zudem sollten installierte Plugins immer auf dem aktuellsten Stand gehalten werden.\n</p>",
  'CMS_PLUGINS_LINK'       => "https://siwecos.de/wiki/Plugin-Gefunden/DE",
  //
  // EMAIL_ADDRESS
  'EMAIL_ADDRESS'            => "Überprüfung auf vorhandene E-Mail-Adressen\n",
  'EMAIL_ADDRESS_SUCCESS'    => "Es konnten keine E-Mail-Adressen gefunden werden. <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Spam\" title=\"Spam\">Spam</a>- und <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Phishing\" title=\"Phishing\">Phishing</a>-Angriffe auf Ihre E-Mail-Adressen sind somit weniger wahrscheinlich.\n",
  'EMAIL_ADDRESS_ERROR'      => "Auslesbare E-Mail-Adresse\n",
  'EMAIL_ADDRESS_ERROR_DESC' => "<p>Ihre Webseite enthält mindestens eine maschinell auslesbare E-Mail-Adresse. Dieses ermöglicht es Dritten, die hinterlegten E-Mail-Adressen automatisiert durch WebCrawler (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Crawler\" title=\"Crawler\">auch Spider, Searchbot oder Robot</a>) zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufügen.\n</p>",
  'EMAIL_ADDRESS_TIPS'       => "<p>Hinterlegen Sie Ihre Kontaktadressen bspw. im Impressum wie folgt: <b>mail at siwecos.de</b> oder <b>mail @ siwecos.de</b>. Leider sind <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Crawler\" title=\"Crawler\">Crawler</a> größtenteils in der Lage, solche \"Tricks\" zu erkennen und auszuwerten. Unlesbar für Crawler werden E-Mail-Adressen, wenn Sie diese als Grafik hinterlegen. Das hat den Nachteil, dass sehbehinderte Besucher Ihrer Webseite sich Ihre E-Mail-Adresse nicht vorlesen lassen können.\nAlternativ können Sie ein kleines JavaScript nutzen, welches Ihre E-Mail-Adresse als verschlüsseltes, aber anklickbares <b>mailto:</b> einbindet. Ein solches Skript können Sie sich z. B. bei <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"http://www.jottings.com/obfuscator.htm\">ANTI-SPAM EMAIL LINK OBFUSCATOR</a> erstellen lassen.\nWeitere Tipps finden Sie <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.hosteurope.de/blog/15-moeglichkeiten-die-e-mail-adresse-geschuetzt-darzustellen/\">bei HostEurope</a>.\n</p>",
  'EMAIL_ADDRESS_LINK'       => "https://siwecos.de/wiki/Email-Adresse-Gefunden/DE",
  //
  // JS_LIB
  'JS_LIB'            => "Überprüfung auf JavaScript-Bibliothek\n",
  'JS_LIB_SUCCESS'    => "Die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript-Bibliotheken</a> sind nach dem aktuellen Stand nicht durch bekannte <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstellen</a> angreifbar.\n",
  'JS_LIB_ERROR'      => "Unsichere <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript-Bibliothek</a> gefunden.\n",
  'JS_LIB_ERROR_DESC' => "<p>Es wurde eine von Ihnen verwendete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript-Bibliothek</a> gefunden. Ein Angreifer könnte diese Information nutzen, um gezielt nach <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstellen</a> für Ihre Website zu suchen.\n</p>",
  'JS_LIB_TIPS'       => "<p>Aktualisieren Sie die verwendete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript-Bibliothek</a> bzw. Framework.\n</p><p><b>Anmerkung:</b> Die Sicherheitslücke der Version 1.12.4 ist den Entwicklern bekannt und sollte mit dem nächsten Update behoben werden. Eine manuelle Änderung auf die Version 3 wird von Wordpress aus Kompatibilitätsgründen nicht empfohlen. Sobald das neue Update verfügbar ist, sollten Sie es schnellstmöglich einspielen.\n</p>",
  'JS_LIB_LINK'       => "https://siwecos.de/wiki/Javascript-Schwachstelle/DE",
  //
  // PHONE_NUMBER
  'PHONE_NUMBER'            => "Überprüfung auf auslesbare Telefonnummern\n",
  'PHONE_NUMBER_SUCCESS'    => "Telefonnummern wurden nicht gefunden.\n",
  'PHONE_NUMBER_ERROR'      => "Telefonnummer gefunden.\n",
  'PHONE_NUMBER_ERROR_DESC' => "<p>Es wurde eine Telefonnummer gefunden. Ein Angreifer könnte diese Information nutzen, um Mitarbeiter zu manipulieren, und an Informationen gelangen die geheim bleiben sollten.\n</p>",
  'PHONE_NUMBER_TIPS'       => "<p>Die veröffentlichten Telefonnummern sollten auf jene beschränkt werden, die tatsächlich für die Kommunikation mit Kunden gedacht sind. Außerdem sollte der telefonierende Mitarbeiter sich der Gefahr von <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Social_engineering\" title=\"Social engineering\">Social Engineering-Angriffen</a> bewusst sein und die Vorgehensweise von Social Engineers kennen. Weitere Tipps, die auch analog auf Telefonnummer anwendbar sind, finden Sie <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.hosteurope.de/blog/15-moeglichkeiten-die-e-mail-adresse-geschuetzt-darzustellen/\">hier &gt;&gt;</a>.\n</p>",
  'PHONE_NUMBER_LINK'       => "https://siwecos.de/wiki/Telefonnummer-Gefunden/DE",
  //
  // Category: Initiative-S Scanner
  //
  // MALWARE
  'MALWARE'            => "Überprüfung auf mögliche <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Malware-Inhalte/DE\" title=\"Malware-Inhalte/DE\">MALWARE-Inhalte</a>\n",
  'MALWARE_SUCCESS'    => "Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> wurde in keiner uns bekannten <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Listen/DE\" title=\"Listen/DE\">Malware-Liste</a> gefunden.\n",
  'MALWARE_ERROR'      => "Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> wurde in <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Listen/DE\" title=\"Listen/DE\">Malware-Listen</a> gefunden.\n",
  'MALWARE_ERROR_DESC' => "<p><a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Malware\" title=\"Malware\">Malware</a> bezeichnet Software, die dem Benutzer und natürlich in erster Linie dem Computer Schaden zufügen kann. Malware bezeichnet dabei alle Arten von schädlichen Programmen wie etwa <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Virus\" title=\"Virus\">Viren</a>, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Trojaner\" title=\"Trojaner\">Trojaner</a>, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Spyware\" title=\"Spyware\">Spyware</a>, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Dialer\" title=\"Dialer\">Dialer</a>, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Rootkit\" title=\"Rootkit\">Dropper</a>, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Rootkit\" title=\"Rootkit\">Rootkits</a> und <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Keylogger\" title=\"Keylogger\">Keylogger</a>.\n</p>",
  'MALWARE_TIPS'       => "<p><b><span style=\"color:#c31622\">Nehmen Sie die Webseite offline!<span></b>\n</p><p>Bei einem Aufruf der Seite besteht die <b>Gefahr, dass Sie den aufrufenden PC mit Schadsoftware infizieren</b>. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde und Sie kommen damit einer eventuellen Sperrung Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n</p><p><b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />\n</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/IP-Adresse\" title=\"IP-Adresse\">Quell-IP-Adressen</a>. Als Ausgangspunkt Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />\n<b>- Webfrontend (Hosting-Vertrag, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">Content-Management-System</a>)</b><br />\n<b>- <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/FTP\" title=\"FTP\">FTP</a>-, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSH\" title=\"SSH\">SSH</a>-Zugänge</b><br />\n<b>- <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Datenbank\" title=\"Datenbank\">Datenbank</a>-<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Starke_Passw%C3%B6rter\" title=\"Starke Passwörter\">Passwörter</a></b><br />\n</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als \"Hintertüren\" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup \"schadcodefrei\" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel mehr Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />\n</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.botfrei.de\">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme.\nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external free\" href=\"https://www.botfrei.de/de/eucleaner/index.html\">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>\n</span>\n</p>",
  'MALWARE_LINK'       => "https://siwecos.de/wiki/Malware-Inhalte/DE",
  //
  // PHISHING
  'PHISHING'            => "Überprüfung auf mögliche <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Phishing\" title=\"Phishing\">Phishing-Inhalte</a>\n",
  'PHISHING_SUCCESS'    => "Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> wurde in keiner uns bekannten <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Listen/DE\" title=\"Listen/DE\">Phishing-Liste</a> gefunden.\n",
  'PHISHING_ERROR'      => "Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> wurde in einer <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Listen/DE\" title=\"Listen/DE\">Phishing-Liste</a> gefunden.\n",
  'PHISHING_ERROR_DESC' => "<p>Beim <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Phishing\" title=\"Phishing\">Phishing</a> wird in der Regel trickreich versucht, sensible persönliche Daten wie Passwörter, Kreditkartennummern und persönliche Daten des Besuchers der Seite zu entwenden. Dabei versenden Kriminelle üblicherweise <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Spam\" title=\"Spam\">Spam-E-Mails</a>. Diese E-Mails enthalten u. a. Links zu einer <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Phishing\" title=\"Phishing\">Phishing</a>-Seite, die sich als legitime Webseite ausgibt.\n</p>",
  'PHISHING_TIPS'       => "<p><b><span style=\"color:#c31622\"> Nehmen Sie die Webseite offline!<span></b>\n</p><p>Es ist weiterhin möglich, dass Sie mit der Webseite <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Phishing\" title=\"Phishing\">Phishing-Inhalte</a> zu Verfügung stellen und Kriminelle persönliche Daten darüber sammeln. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n</p><p><b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. </b><br />\n</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/IP-Adresse\" title=\"IP-Adresse\">Quell-IP-Adressen</a>. Als Ausgangspunkt Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />\n<b>- Webfrontend (Hosting-Vertrag, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">Content-Management-System</a> )</b><br />\n<b>- <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/FTP\" title=\"FTP\">FTP</a>-, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSH\" title=\"SSH\">SSH</a>-Zugänge</b><br />\n<b>- <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Datenbank\" title=\"Datenbank\">Datenbank</a>-<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Starke_Passw%C3%B6rter\" title=\"Starke Passwörter\">Passwörter</a></b><br />\n</p><p>Spielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als \"Hintertüren\" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup \"schadcodefrei\" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel mehr Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />\n</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.botfrei.de\">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme.\nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external free\" href=\"https://www.botfrei.de/de/eucleaner/index.html\">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>\n</span>\n</p>",
  'PHISHING_LINK'       => "https://siwecos.de/wiki/Phishing-Inhalte/DE",
  //
  // SPAM
  'SPAM'            => "Überprüfung auf mögliche <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Spam\" title=\"Spam\">Spam-Inhalte</a>\n",
  'SPAM_SUCCESS'    => "Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> wurde in keiner uns bekannten <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Listen/DE\" title=\"Listen/DE\">Spam-Liste</a> gefunden.\n",
  'SPAM_ERROR'      => "Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> wurde in <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Listen/DE\" title=\"Listen/DE\">Spam-Listen</a> gefunden.\n",
  'SPAM_ERROR_DESC' => "<p>Als <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Spam\" title=\"Spam\">Spam</a> bezeichnet man ungewollte und zum Teil unseriöse Werbung im E-Mail-Postfach (z. B. Viagra-Werbung, Medikamente, Versicherung und Kreditvergleiche). Diese Werbungen werden massenhaft verschickt bzw. können auch zielgerichtet verschickt werden. In der Regel verschleiern die Absender ihre wahre Identität in der E-Mail und versuchen Sie zu täuschen.\n</p>",
  'SPAM_TIPS'       => "<p><b><span style=\"color:#c31622\">Nehmen Sie die Webseite offline!<span></b>\n</p><p>Um Besucher vor Ihrer infizierten Webseite zu schützen und damit Google Ihre Webseite nicht aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde, <b>schalten Sie die Webseite offline</b>. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n</p><p>Um zu prüfen, ob die Seite über diverse Spam-Merkmale verfügt, rufen Sie die Seite im Browser auf, klicken über die rechte Maustaste den \"Quelltext anzeigen\". In diesem Fenster können Sie Ihren Quellcode mit Drücken der Tasten <b>Strg+f</b> (suchen) auf gängige Online-Betrügereien durch Werbung für Medikamente oder dubiose Kreditgeschäft überprüfen.\n</p><p><b>Einige Suchvorschläge</b>:<br />\n- „payday“<br />\n- „Pharma“<br />\n- „Viagra“<br />\n- „Cialis“<br /><br />\n<b>- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> zuzugreifen. </b><br />\n</p><p>Überprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/IP-Adresse\" title=\"IP-Adresse\">Quell-IP-Adressen</a>. Als Ausgangspunkt Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n</p><p><b>- Ändern Sie Ihre Zugangsdaten!</b><br />\n<b>- Webfrontend (Hosting-Vertrag, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Content-Management-Systeme\" title=\"Content-Management-Systeme\">Content-Management-System</a>)</b><br />\n<b>- <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/FTP\" title=\"FTP\">FTP</a>-, <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSH\" title=\"SSH\">SSH</a>-Zugänge</b><br />\n<b>- <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Datenbank\" title=\"Datenbank\">Datenbank</a>-<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Starke_Passw%C3%B6rter\" title=\"Starke Passwörter\">Passwörter</a></b><br />\n</p><p>Spielen Sie ein schadcodefreies <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Daten_sichern\" title=\"Daten sichern\">Backup</a> wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als \"Hintertüren\" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup \"schadcodefrei\" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n</p><p><b> - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel mehr Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.</b><br />\n</p><p>Überprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.botfrei.de\">botfrei.de</a> finden Sie dazu Hilfestellungen und Programme.\nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external free\" href=\"https://www.botfrei.de/de/eucleaner/index.html\">https://www.botfrei.de/de/eucleaner/index.html</a> )</span>\n</span>\n</p>",
  'SPAM_LINK'       => "https://siwecos.de/wiki/Spam-Inhalte/DE",
  //
  // Category: NO_CONTENT
  //
  // NO_CONTENT
  'NO_CONTENT'            => "Auf der Seite wurde kein Inhalt gefunden.\n",
  //
  // Category: NO_SCRIPT_TAGS
  //
  // NO_SCRIPT_TAGS
  'NO_SCRIPT_TAGS'            => "Der Scanner hat keine Skript-Inhalte zum Bewerten gefunden.\n",
  //
  // Category: Protokollversionen
  //
  // PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2'            => "Überprüfung auf veraltetes SSL2 Protokoll\n",
  'PROTOCOLVERSION_SSL2_SUCCESS'    => "Veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL2</a> wird nicht unterstützt.\n",
  'PROTOCOLVERSION_SSL2_ERROR'      => "Veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL2</a> wird unterstützt.\n",
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> unterstützt die veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL2</a>, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.\n</p>",
  'PROTOCOLVERSION_SSL2_TIPS'       => "<p><a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL2</a> verzichten. Weitere Informationen finden Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL</a>.\n</p>",
  'PROTOCOLVERSION_SSL2_LINK'       => "https://siwecos.de/wiki/Veraltete-Protokollversion-SSL2/DE",
  //
  // PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3'            => "Überprüfung auf veraltetes SSL3 Protokoll\n",
  'PROTOCOLVERSION_SSL3_SUCCESS'    => "Veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a> wird nicht unterstützt.\n",
  'PROTOCOLVERSION_SSL3_ERROR'      => "Veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a> wird unterstützt.\n",
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> unterstützt die veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a>, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.\n</p>",
  'PROTOCOLVERSION_SSL3_TIPS'       => "<p><a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a> verzichten. Weitere Informationen finden Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL</a>.\n</p>",
  'PROTOCOLVERSION_SSL3_LINK'       => "https://siwecos.de/wiki/Veraltete-Protokollversion-SSL3/DE",
  //
  // PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13'            => "Überprüfung auf Einsatz des <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS 1.3 Protokolls</a>\n",
  'PROTOCOLVERSION_TLS13_SUCCESS'    => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS 1.3 Protokoll</a> wird nicht unterstützt.\n",
  'PROTOCOLVERSION_TLS13_ERROR'      => "Modernes <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS 1.3 Protokoll</a> wird unterstützt.\n",
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> unterstützt die neueste <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Protokollversion 1.3</a>. Diese befindet sich noch im Standardisierungsprozess. Sollten Sie nicht wissen, was dies bedeutet, können Sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützen und TLS 1.3 sich noch in der Entwicklung befindet.\n</p>",
  'PROTOCOLVERSION_TLS13_TIPS'       => "<p>Es besteht kein Handlungsbedarf.\n</p>",
  'PROTOCOLVERSION_TLS13_LINK'       => "https://siwecos.de/wiki/Protokollversion-TLS13-Gefunden/DE",
  //
  // Category: Report Text
  //
  // REPORT_FOR
  'REPORT_FOR'            => "Report für :domain\n",
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
  'CIPHERSUITEORDER_ENFORCED_SUCCESS'    => "Verantwortungsvolle Auswahl der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Client-Verschl%C3%BCsselungsmethodik/DE\" title=\"Client-Verschlüsselungsmethodik/DE\">Client-Verschlüsselungsmethoden</a>\n",
  'CIPHERSUITEORDER_ENFORCED_ERROR'      => "Verantwortungslose Auswahl der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Client-Verschl%C3%BCsselungsmethodik/DE\" title=\"Client-Verschlüsselungsmethodik/DE\">Client-Verschlüsselungsmethoden</a>\n",
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethodik</a> des Webseiten-Besuchers bevorzugt wird, statt die Ihres Webservers. <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> sollten die Auswahl der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethoden</a> nicht ihren Kunden überlassen, sondern aktiv starke Verbindungen auswählen.\n</p>",
  'CIPHERSUITEORDER_ENFORCED_TIPS'       => "<p>Konfigurieren Sie Ihren Webserver so, dass Ihr Webserver die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethodik</a> bei der Kommunikation zwischen Ihrer Webseite und dem Webbrowser des Besuchers bestimmt.\n</p>",
  'CIPHERSUITEORDER_ENFORCED_LINK'       => "https://siwecos.de/wiki/Verschluesselungsmethode-Client/DE",
  //
  // CIPHERSUITE_ANON
  'CIPHERSUITE_ANON'            => "Überprüfung auf anonyme Verschlüsselungsmethodik\n",
  'CIPHERSUITE_ANON_SUCCESS'    => "Anonymer <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schl%C3%BCsselaustauschverfahren\" title=\"Schlüsselaustauschverfahren\">Schlüsselaustausch</a> wird nicht unterstützt\n",
  'CIPHERSUITE_ANON_ERROR'      => "Anonymer <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schl%C3%BCsselaustauschverfahren\" title=\"Schlüsselaustauschverfahren\">Schlüsselaustausch</a> wird unterstützt\n",
  'CIPHERSUITE_ANON_ERROR_DESC' => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass eine unsichere Verschlüsselungsmethode (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Cipher_Suite\" title=\"Cipher Suite\">Cipher Suite</a>) ohne Rechtekontrolle bei der Verbindung erfolgt. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>.\n</p>",
  'CIPHERSUITE_ANON_TIPS'       => "<p>Deaktivieren Sie die Unterstützung des \"Anonymen Schlüsselaustauschs\" in der  <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethodik</a>. In Konsequenz auf die bekannt gewordenen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS Schwachstellen</a> ist die wichtigste Regel, wann immer es geht, TLS 1.2 zu nutzen. SSL 3.0 sollte im Browser deaktiviert werden.\n</p>",
  'CIPHERSUITE_ANON_LINK'       => "https://siwecos.de/wiki/Schluesselaustauschverfahren/DE",
  //
  // CIPHERSUITE_DES
  'CIPHERSUITE_DES'            => "Überprüfung auf DES Verschlüsselungsmethodik\n",
  'CIPHERSUITE_DES_SUCCESS'    => "Keine veraltete DES <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethodik</a> unterstützt\n",
  'CIPHERSUITE_DES_ERROR'      => "Veraltete DES <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethodik</a> unterstützt\n",
  'CIPHERSUITE_DES_ERROR_DESC' => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Cipher Suites</a>) unterstützt. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle</a>-Attacken.\n</p>",
  'CIPHERSUITE_DES_TIPS'       => "<p>Deaktivieren Sie die Unterstützung der DES <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethodik</a> in Ihrer Webserver-Software.\n</p>",
  'CIPHERSUITE_DES_LINK'       => "https://siwecos.de/wiki/Schwaches-DES-Verschluesselungsprotokoll/DE",
  //
  // CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT'            => "Überprüfung auf schwache Verschlüsselungs-Funktionen\n",
  'CIPHERSUITE_EXPORT_SUCCESS'    => "Keine schwache <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/EXPORT-Verschl%C3%BCsselung/DE\" title=\"EXPORT-Verschlüsselung/DE\">EXPORT Verschlüsselung</a> unterstützt\n",
  'CIPHERSUITE_EXPORT_ERROR'      => "Schwache <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/EXPORT-Verschl%C3%BCsselung/DE\" title=\"EXPORT-Verschlüsselung/DE\">Export Verschlüsselung</a> unterstützt\n",
  'CIPHERSUITE_EXPORT_ERROR_DESC' => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass sich vorsätzlich unsichere <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethoden</a> nutzen lassen. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle-Attacken</a>.\n</p>",
  'CIPHERSUITE_EXPORT_TIPS'       => "<p>Deaktivieren Sie die Unterstützung von EXPORT <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethoden</a> im Webserver.\n</p>",
  'CIPHERSUITE_EXPORT_LINK'       => "https://siwecos.de/wiki/Geschwaechtes-Verschluesselungsprotokoll/DE",
  //
  // CIPHERSUITE_NULL
  'CIPHERSUITE_NULL'            => "Überprüfung auf NULL-Chiffren\n",
  'CIPHERSUITE_NULL_SUCCESS'    => "Keine unsicheren <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/NULL-Algorithmus/DE\" title=\"NULL-Algorithmus/DE\">Null Chiffren</a> unterstützt\n",
  'CIPHERSUITE_NULL_ERROR'      => "Unsichere <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/NULL-Algorithmus/DE\" title=\"NULL-Algorithmus/DE\">NULL Chiffren</a> unterstützt\n",
  'CIPHERSUITE_NULL_ERROR_DESC' => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass zugelassen wird, dass unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle-Attacken</a>.\n</p>",
  'CIPHERSUITE_NULL_TIPS'       => "<p>Deaktivieren Sie die Unterstützung von NULL <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethoden</a>.\n</p>",
  'CIPHERSUITE_NULL_LINK'       => "https://siwecos.de/wiki/Unverschluesselte-Kommunikation/DE",
  //
  // CIPHERSUITE_RC4
  'CIPHERSUITE_RC4'            => "Überprüfung auf RC4 Verschlüsselungsmethodik\n",
  'CIPHERSUITE_RC4_SUCCESS'    => "Keine veraltete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Rc4_Verschl%C3%BCsselungsmethodik\" title=\"Rc4 Verschlüsselungsmethodik\">RC4 Verschlüsselungsmethodik</a> unterstützt\n",
  'CIPHERSUITE_RC4_ERROR'      => "Veraltete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Rc4_Verschl%C3%BCsselungsmethodik\" title=\"Rc4 Verschlüsselungsmethodik\">RC4 Verschlüsselungsmethodik</a>\nunterstützt\n",
  'CIPHERSUITE_RC4_ERROR_DESC' => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass die mittlerweile als unsicher geltende Verschlüsselungsfunktion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Rc4_Verschl%C3%BCsselungsmethodik\" title=\"Rc4 Verschlüsselungsmethodik\">RC4</a> weiterhin unterstützt wird. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle-Attacken</a>.\n</p>",
  'CIPHERSUITE_RC4_TIPS'       => "<p>Deaktivieren Sie die Unterstützung der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Rc4_Verschl%C3%BCsselungsmethodik\" title=\"Rc4 Verschlüsselungsmethodik\">RC4 Verschlüsselungsmethodik</a>.\n</p>",
  'CIPHERSUITE_RC4_LINK'       => "https://siwecos.de/wiki/Unsicher Rc4 Verschlüsselungsmethodik/DE",
  //
  // Category: WS_TLS
  //
  // ANON_SUITES
  'ANON_SUITES'            => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass eine anonyme <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Verschlüsselungsmethodik</a> ohne <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Authentifizierung\" title=\"Authentifizierung\">Authentifizierung</a> bei der Verbindung erfolgt. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>.\n",
  //
  // DES_SUITES
  'DES_SUITES'            => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES  (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik/DE\" title=\"Verschlüsselungsmethodik/DE\">Cipher Suites)</a> unterstützt. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>.\n",
  //
  // EXPIRED
  'EXPIRED'            => "Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> ist am %DATE% abgelaufen. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt.\n",
  //
  // EXPORT_SUITES
  'EXPORT_SUITES'            => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass sich vorsätzlich geschwächte kryptographische Funktionen (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Cipher_Suite\" title=\"Cipher Suite\">Cipher Suites</a>) nutzen lassen. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle-Attacken</a>.\n",
  //
  // HASH_ALGO
  'HASH_ALGO'            => "Ihr Server-Zertifikat nutzt den schwachen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a> %HASH%. Das <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> kann so sehr einfach gefälscht werden. Eine Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a> jedoch nicht.\n",
  //
  // HTTPS_RESPONSE
  'HTTPS_RESPONSE'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> “%HOST%“ antwortet nicht auf verschlüsselte HTTP (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a>) Anfragen.\n",
  //
  // HTTPS_SUPPORTED
  'HTTPS_SUPPORTED'            => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> “%HOST%“ scheint kein <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS</a> zu unterstützen. Dies bedeutet, dass Sie keinerlei Verschlüsselung einsetzen, um Ihre Daten und die Ihrer Kunden zu schützen.\n",
  //
  // NOT_YET_VALID
  'NOT_YET_VALID'            => "Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> wird erst am %DATE% gültig. Ihre Webseite wird Besuchern bis dahin als unsicher bzw. nicht vertrauenswürdig angezeigt.\n",
  //
  // NULL_SUITES
  'NULL_SUITES'            => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass zugelassen wird, dass unverschlüsselt über einen eigentlich geschützten Kanal Daten übertragen werden können. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>.\n",
  //
  // RC4_SUITES
  'RC4_SUITES'            => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass die mittlerweile als unsicher geltende Verschlüsselungsfunktion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Rc4_Verschl%C3%BCsselungsmethodik\" title=\"Rc4 Verschlüsselungsmethodik\">RC4</a> weiterhin unterstützt wird. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>.\n",
  //
  // Category: XSS-Scanner
  //
  // HAS_SINKS
  'HAS_SINKS'            => "Überprüfung des JavaScript-Codes nach DOMXSS-Sinks\n",
  'HAS_SINKS_SUCCESS'    => "Automatisiert wurden keine unsicheren Codebestandteile für <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sinks\" title=\"DOMXSS-Sinks\">DOMXSS-Sinks</a> erkannt.\n",
  'HAS_SINKS_ERROR'      => "Unsicheren <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript</a>-Code verwendet <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sinks\" title=\"DOMXSS-Sinks\">Sinks</a>\n",
  'HAS_SINKS_ERROR_DESC' => "<p>Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der unter bestimmten Voraussetzungen auf eine DOM-basierende <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Cross-Site_Scripting\" title=\"Cross-Site Scripting\">Cross-Site Scripting-Anfälligkeit</a> hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen.\n</p>",
  'HAS_SINKS_TIPS'       => "<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstellen</a> auf der Webseite zu bestätigen.\n</p>",
  //
  // HAS_SOURCES
  'HAS_SOURCES'            => "Überprüfung des JavaScript-Codes nach DOMXSS-Sources\n",
  'HAS_SOURCES_SUCCESS'    => "Automatisiert wurden keine unsicheren Codebestandteile für <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sources\" title=\"DOMXSS-Sources\">DOMXSS-Sources</a> erkannt.\n",
  'HAS_SOURCES_ERROR'      => "Unsicheren <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript</a>-Code verwendet (Sources)\n",
  'HAS_SOURCES_ERROR_DESC' => "<p>Bei der Überprüfung wurde mindestens eine Schwachstelle auf der Webseite gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte.\n</p>",
  'HAS_SOURCES_TIPS'       => "<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstellen</a> auf der Webseite zu bestätigen.\n</p>",
  //
  // SINKS
  'SINKS'            => "Überprüfung des JavaScript-Codes nach DOMXSS-Sinks\n",
  'SINKS_SUCCESS'    => "Automatisiert wurden keine unsicheren Codebestandteile für <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sinks\" title=\"DOMXSS-Sinks\">DOMXSS-Sinks</a> erkannt.\n",
  'SINKS_ERROR'      => "Unsicheren <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript</a>-Code verwendet <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sinks\" title=\"DOMXSS-Sinks\">Sinks</a>.\n",
  'SINKS_ERROR_DESC' => "<p>Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der unter bestimmten Voraussetzungen auf eine DOM-basierende <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Cross-Site_Scripting\" title=\"Cross-Site Scripting\">Cross-Site Scripting-Anfälligkeit</a> hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen.\n</p>",
  'SINKS_TIPS'       => "<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstellen</a> auf der Webseite zu bestätigen.\n</p>",
  'SINKS_LINK'       => "https://siwecos.de/wiki/DOMXSS-Schwachstelle/DE",
  //
  // SOURCES
  'SOURCES'            => "Überprüfung des JavaScript-Codes nach DOMXSS-Sources\n",
  'SOURCES_SUCCESS'    => "Automatisiert wurden keine unsicheren Codebestandteile für <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/DOMXSS-Sources\" title=\"DOMXSS-Sources\">DOMXSS-Sources</a> erkannt.\n",
  'SOURCES_ERROR'      => "Unsicheren <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/JavaScript\" title=\"JavaScript\">JavaScript</a>-Code verwendet (Sources).\n",
  'SOURCES_ERROR_DESC' => "<p>Bei der Überprüfung wurde mindestens eine <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstelle</a> auf der Webseite gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte.\n</p>",
  'SOURCES_TIPS'       => "<p>Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schwachstellen/DE\" title=\"Schwachstellen/DE\">Schwachstellen</a> auf der Webseite zu bestätigen.\n</p>",
  'SOURCES_LINK'       => "https://siwecos.de/wiki/Schadcode-Ueber-Fremde-Quellen/DE",
  //
  // Category: Zertifikate
  //
  // CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED'            => "Überprüfung der Zertifikat Laufzeit\n",
  'CERTIFICATE_EXPIRED_SUCCESS'    => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> nicht abgelaufen\n",
  'CERTIFICATE_EXPIRED_ERROR'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> abgelaufen\n",
  'CERTIFICATE_EXPIRED_ERROR_DESC' => "<p>Die Meldung bedeutet, dass Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Server-Zertifikat</a> abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt. Sollte ein Nutzer Ihre Webseite über <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt, z.B. \"Ihr Zertifikat ist am (Datum) abgelaufen\".\n</p>",
  'CERTIFICATE_EXPIRED_TIPS'       => "<p>Dieses Problem lässt sich lösen, indem Sie das eingesetzte <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> erneuern. Wie Sie Zertifikate verlängern können, lesen Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE#Was_tun.2C_wenn_ein_SSL-Zertifikat_abgelaufen_ist.3F\" title=\"Zertifikate/DE\">Zertifikat abgelaufen</a>.\n</p>",
  'CERTIFICATE_EXPIRED_LINK'       => "https://siwecos.de/wiki/Zertifikat-Abgelaufen/DE",
  //
  // CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER'            => "Überprüfung der Zertifikatsübermittlung\n",
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => "Server sendet ein Zertifikat\n",
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => "Server sendet kein Zertifikat\n",
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> hat kein <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> gesendet. Dies ist ungewöhnlich und sollte nicht vorkommen. Der Server sollte seine <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Konfiguration</a> überprüfen und ggfs. <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schluesselaustauschverfahren/DE\" title=\"Schluesselaustauschverfahren/DE\">anonyme Cipher Suites</a> ausschalten.\n</p>",
  'CERTIFICATE_NOT_SENT_BY_SERVER_TIPS'       => "<p>Aktualisieren Sie dringend die von Ihnen eingesetzte <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a>. Moderne Software erlaubt diese Art der Konfiguration nicht mehr.\n</p>",
  'CERTIFICATE_NOT_SENT_BY_SERVER_LINK'       => "https://siwecos.de/wiki/Zertifikat-Nicht-Gesendet/DE",
  //
  // CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET'            => "Überprüfung der Zertifikat Gültigkeit\n",
  'CERTIFICATE_NOT_VALID_YET_SUCCESS'    => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> ist schon gültig\n",
  'CERTIFICATE_NOT_VALID_YET_ERROR'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> noch nicht gültig\n",
  'CERTIFICATE_NOT_VALID_YET_ERROR_DESC' => "<p>Die Meldung bedeutet, dass Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Server-Zertifikat</a> noch nicht gültig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt. Sollte ein Nutzer Ihre Webseite über <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.\n</p>",
  'CERTIFICATE_NOT_VALID_YET_TIPS'       => "<p>Deaktivieren Sie das <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> solange es <b>noch nicht</b> gültig ist. Ihre Webseite ist dann zwar nicht zertifiziert, jedoch erhalten Besucher zumindest keine Warnmeldung beim Aufruf Ihrer Webseite. Alternativ bietet sich die Möglichkeit an, Ihr altes <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> einzusetzen, so lange dies noch gültig ist. Wie Sie <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikate</a> verlängern können, lesen Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikat-Abgelaufen/DE\" title=\"Zertifikat-Abgelaufen/DE\">Zertifikat abgelaufen</a>.\n</p>",
  'CERTIFICATE_NOT_VALID_YET_LINK'       => "https://siwecos.de/wiki/Zertifikat-Nicht-Gueltig/DE",
  //
  // CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION'            => "Überprüfung der Verschlüsselungsstärke des Zertifikats\n",
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => "Starker <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a>\n",
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => "Schwacher <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a>\n",
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => "<p>Die Meldung bedeutet, dass Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Server-Zertifikat</a> einen schwachen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a> (Verschlüsselung) besitzt. Es stellt möglicherweise ein leichtes Ziel für Hacker-Angriffe dar.\n</p>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_TIPS'       => "<p>Um dieses Problem zu lösen, sollten Sie ein neues <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> mit einer sicheren <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Funktion</a>, also einer starken Verschlüsselung installieren. Wie Sie ein sicheres <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE\" title=\"Zertifikate/DE\">Zertifikat</a> bekommen, lesen Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate/DE#Wie_wird_ein_SSL-Zertifikat_installiert.3F\" title=\"Zertifikate/DE\">Zertifikat installieren</a>.\n</p>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_LINK'       => "https://siwecos.de/wiki/Schwache-Verschluesselung/DE",
  //
  // CERTIFICATE_WEAK_SIGN_ALGO
  'CERTIFICATE_WEAK_SIGN_ALGO'            => "Überprüfung der Zertifikat Verschlüsselung\n",
  //
  // CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS
  'CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS'            => "Überprüfung der Zertifikat Verschlüsselung\n",

];
