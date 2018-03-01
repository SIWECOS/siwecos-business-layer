<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Authentication Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines are used during authentication for various
	| messages that we need to display to the user. You are free to modify
	| these language lines according to your application's requirements.
	|
	*/

	'SCANNER_NAME_INI_S'    => 'Initiative-S Scanner',
	'SCANNER_NAME_DOMXSS'   => 'DOMXSS Scanner',
	'SCANNER_NAME_INFOLEAK' => 'Info Leak Scanner',
	'SCANNER_NAME_HEADER'   => 'Header Scanner',
	'SCANNER_NAME_WS_TLS'   => 'TLS Scaner',

	'SCORE_success'                => 'Erfolgreich',
	'SCORE_critical'               => 'Critical',
	'SCORE_info'                   => 'Info',

  // Source . . . .: siwecos_scanner_beschreibung_2018_02.26-prefinal.xls
  // Translations .: 37
  // 3: Generell
  // 3: HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE_SUCCESS'    => 'Server antwortet',
  'HTTPS_NO_RESPONSE_ERROR'      => 'Server antwortet nicht',
  'HTTPS_NO_RESPONSE_ERROR_DESC' => 'Der Server scheint überhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?',
  'HTTPS_NO_RESPONSE_TIPS'       => '',
  // 4: HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => 'Server spricht TLS',
  'HTTPS_NOT_SUPPORTED_ERROR'      => 'Server scheint kein TLS zu sprechen',
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => 'Der Server scheint kein TLS zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten von ihnen und die ihrer Kunden zu schützen.',
  'HTTPS_NOT_SUPPORTED_TIPS'       => 'Aktivieren sie TLS.',
  // 5: Zertifikate
  // 5: CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED_SUCCESS'    => 'Zertifikat nicht abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR'      => 'Zertifikat abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über HTTPS aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.',
  'CERTIFICATE_EXPIRED_TIPS'       => 'Dieses Problem lässt sich lösen, indem Sie das eingesetzte Zertifikat erneuern oder ein neues Zertifikat installieren. Wie Sie Zertifikate verlängern können, lesen Sie hier: Zertifikat abgelaufen',
  // 6: CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => 'Server sendet ein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => 'Server sendet kein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => 'Der Server hat kein Zertifikat gesendet. Dies ist ungewöhnlich und sollte eigentlich nicht vorkommen. Der Server sollte seine TLS-Konfiguration überprüfen und ggf. anonyme Ciphersuites ausschalten.',
  'CERTIFICATE_NOT_SENT_BY_SERVER_TIPS'       => 'Aktuallisieren sie dringend die von ihnen eingesetzte TLS-Implementierungen. Moderne Software erlaubt diese Art der Konfiguration nicht mehr.',
  // 7: CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET_SUCCESS'    => 'Zertifikat ist schon gültig',
  'CERTIFICATE_NOT_VALID_YET_ERROR'      => 'Zertifikat noch nicht gültig',
  'CERTIFICATE_NOT_VALID_YET_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat noch nicht gültig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über HTTPS aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.',
  'CERTIFICATE_NOT_VALID_YET_TIPS'       => 'Deaktivieren Sie das Zertifikat solange es noch nicht gültig ist. Ihre Webseite ist dann zwar nicht zertifiziert, jedoch erhalten Besucher zumindest keine Warnmeldung beim Aufruf Ihrer Webseite. Alternativ bietet sich die Möglichkeit an, ihr altes Zertifikat einzusetzen, so lange dies noch gültig ist. Wie Sie Zertifikate verlängern können, lesen Sie hier: Zertifikat abgelaufen',
  // 8: CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => 'Starker Hash-Algorithmus',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => 'Schwacher Hash-Algorithmus',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat einen schwachen Hash-Algorithmus besitzt. Es stellt möglicherweise ein leichtes Ziel für Hacker-Angriffe dar. Ein Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen Hash-Algorithmus jedoch nicht.',
  'CERTIFICATE_WEAK_HASH_FUNCTION_TIPS'       => 'Um dieses Problem zu lösen sollten sie ein neues Zertifikat mit einer sicheren Hash-Funktion installieren. Wie Sie ein sicheres Zertifikat bekommen, lesen Sie hier: Zertifikat installieren',
  // 9: Verschlüsselungsmethode
  // 9: CIPHERSUITE_ANON
  'CIPHERSUITE_ANON_SUCCESS'    => 'Kein Anonymer Schlüsselaustausch unterstützt',
  'CIPHERSUITE_ANON_ERROR'      => 'Anonymer Schlüsselaustausch unterstützt',
  'CIPHERSUITE_ANON_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass eine anonyme Verschlüsselungsmethodik (Ciphersuites) ohne Authentikation bei der Verbindung erfolgt. Dies ermöglicht Man-in-the-Middle Attacken.',
  'CIPHERSUITE_ANON_TIPS'       => 'Deaktivieren Sie die Unterstützung des Anonymen Schlüsselaustauschs in der  Verschlüsselungsmethodik.',
  // 10: CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT_SUCCESS'    => 'Keine schwache EXPORT Verschlüsselung unterstützt',
  'CIPHERSUITE_EXPORT_ERROR'      => 'Schwache Export Verschlüsselung unterstützt',
  'CIPHERSUITE_EXPORT_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass sich vorsätzlich geschwächte kryptographische Funktionen (Ciphersuites) nutzen lassen. Dies ermöglicht Man-in-the-Middle Attacken.',
  'CIPHERSUITE_EXPORT_TIPS'       => 'Deaktivieren Sie die Unterstützung von EXPORT Verschlüsselungsmethoden.',
  // 11: CIPHERSUITE_NULL
  'CIPHERSUITE_NULL_SUCCESS'    => 'Keine unsicheren Null Chiffren unterstützt',
  'CIPHERSUITE_NULL_ERROR'      => 'Unsichere NULL Chiffren unterstützt',
  'CIPHERSUITE_NULL_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass er zulässt das keine Verschlüsselung eingesetzt wird obwohl TLS gesprochen wird. Dies ermöglicht Man-in-the-Middle Attacken.',
  'CIPHERSUITE_NULL_TIPS'       => 'Deaktivieren Sie die Unterstützung von NULL Verschlüsselungsmethoden.',
  // 12: CIPHERSUITE_RC4
  'CIPHERSUITE_RC4_SUCCESS'    => 'Keine veraltete RC4 Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_RC4_ERROR'      => 'Veraltete RC4 Verschlüsselungsmethodik\nunterstützt',
  'CIPHERSUITE_RC4_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 Verschlüsselungsmethodik (Ciphersuites) weiterhin unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.',
  'CIPHERSUITE_RC4_TIPS'       => 'Deaktivieren Sie die Unterstützung der RC4 Verschlüsselungsmethodik.',
  // 13: CIPHERSUITE_DES
  'CIPHERSUITE_DES_SUCCESS'    => 'Keine veraltete DES Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_DES_ERROR'      => 'Veraltete DES Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_DES_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES  (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.',
  'CIPHERSUITE_DES_TIPS'       => 'Deaktivieren Sie die Unterstützung der DES Verschlüsselungsmethodik',
  // 14: CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED_SUCCESS'    => 'Verantwortungsvolle Auswahl der Verschlüsselungsmethoden',
  'CIPHERSUITEORDER_ENFORCED_ERROR'      => 'Verantwortungslose Auswahl der Verschlüsselungsmethoden',
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass die Verschlüsselungsmethodik des Clients (Webseiten-Besuchers) bevorzugt wird, statt die Ihres Webservers. Server sollten die Auswahl der Verschlüsselungsmethoden nicht ihren Kunden überlassen, sondern aktiv starke Verbindungen auswählen.',
  'CIPHERSUITEORDER_ENFORCED_TIPS'       => 'Konfigurieren Sie Ihren Webservern so, dass der Webserver die Verschlüsselungsmethodik bei der Kommunikation zwischen Ihrer Webseite und dem Webbrowser des Besuchers bestimmt Mehr Infos:',
  // 15: Protokollversionen
  // 15: PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2_SUCCESS'    => 'Veraltete Protokollversion SSL2 nicht unterstützt',
  'PROTOCOLVERSION_SSL2_ERROR'      => 'Veraltete Protokollversion SSL2 unterstützt',
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => 'Der Server unterstützt die veraltete Protokollversion SSL2, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.',
  'PROTOCOLVERSION_SSL2_TIPS'       => 'TLS-Verschlüsselung gilt heute als Standard für den Einsatz bei HTTPS eingesetzt, Sie sollten deshalb auf den Einsatz von SSL2 verzichten. Weitere Informationen finden Sie hier: SSL',
  // 16: PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3_SUCCESS'    => 'Veraltete Protokollversion SSL3 nicht unterstützt',
  'PROTOCOLVERSION_SSL3_ERROR'      => 'Veraltete Protokollversion SSL3 unterstützt',
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => 'Der Server unterstützt die veraltete Protokollversion SSL3, welche als höchst unsicher gilt. Sie gefähren mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.',
  'PROTOCOLVERSION_SSL3_TIPS'       => 'TLS-Verschlüsselung gilt heute als Standard für den Einsatz bei HTTPS eingesetzt, Sie sollten deshalb auf den Einsatz von SSL3 verzichten. Weitere Informationen finden Sie hier: SSL',
  // 17: PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13_SUCCESS'    => 'TLS 1.3 nicht unterstützt',
  'PROTOCOLVERSION_TLS13_ERROR'      => 'Moderne TLS 1.3 unterstützt',
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => 'Der Server unterstützt die neueste TLS Protokollversion. Diese befindet sich noch im Standartisierungsprozess. Sollten sie nicht wissen was dies bedeutet, können sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützten und TLS 1.3 sich noch in der Entwicklung befindet.',
  'PROTOCOLVERSION_TLS13_TIPS'       => 'Es besteht kein Handlungsbedarf.',
  // 18: Angriffe
  // 18: BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR'      => 'Verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Bleichenbacher Angriff(ROBOT), welche es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'BLEICHENBACHER_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  // 19: CRIME_VULNERABLE
  'CRIME_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR'      => 'Verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch CRIME. Ein Angriff welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'CRIME_VULNERABLE_TIPS'       => 'Deaktivieren sie TLS-Compression auf ihrem Server',
  // 20: HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR'      => 'Verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch Heartbleed. Dadurch kann ein Angreifer sensible Daten aus dem Arbeisspeicher des Servers auslesen, wie z.B. geheime Schlüssel und Kundendaten.',
  'HEARTBLEED_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  // 21: INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => 'Verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Ephemeral Invalid Curve Angriff. Dadurch kann ein Angreifer Verbindungen angreifen.',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  // 22: INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR'      => 'Verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Invalid Curve Angriff. Dadurch kann ein Angreifer den geheimen Schlüssel ihres Zertifikats stehlen.',
  'INVALID_CURVE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  // 23: PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR'      => 'Verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Padding-Oracle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'PADDING_ORACLE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  // 24: POODLE_VULNERABLE
  'POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Poodle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'POODLE_VULNERABLE_TIPS'       => 'Deaktivieren Sie umgehend SSL3 auf ihrem Server!',
  // 25: TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch eine Variante des Poodle Angriffs auf TLS, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'TLS_POODLE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  // 26: SWEET32_VULNERABLE
  'SWEET32_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR'      => 'Verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch SWEET32, welcher es einem Angreifer erlaubt teile der Kommunikation zu entschlüsseln falls über eine Verbindung große Mengen Daten transferiert werden.',
  'SWEET32_VULNERABLE_TIPS'       => 'Deaktivieren sie Blockchiffren mit einer Länge von 64Bit.',
  // 27: XSS-Scanner
  // 27: Sinks
  'Sinks_SUCCESS'    => 'Es wurden automatisiert keine unsicheren Codestellen gefunden, die auf eine Verwundbarkeit Ihrer Webseite hindeuten.',
  'Sinks_ERROR'      => 'Unsichere JavaScript-Methoden',
  'Sinks_ERROR_DESC' => 'Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der  unter bestimmten Voraussetzungen auf eine DOM-basierende Cross-Site Scripting Anfälligkeit hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen und es Hackern ermöglichen, z.B. Viren oder Trojaner unbemerkt dort zu hinterlegen.',
  'Sinks_TIPS'       => 'Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.',
  // 28: Sources
  'Sources_SUCCESS'    => 'Es wurden automatisiert keine unsicheren Eingabemöglichkeiten gefunden, die auf einer Verwundbarkeit Ihrer Webseite hindeuten.',
  'Sources_ERROR'      => 'Unsichere Quelle',
  'Sources_ERROR_DESC' => 'Es wurde eine Eingabemöglichkeit gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte. Mindestens eine potentielle Quelle wurde auf der gescannten URL gefunden.',
  'Sources_TIPS'       => 'Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.',
  // 29: HTTP-Security-Header-Scanner
  // 29: Content-Security-Policy
  'Content-Security-Policy_SUCCESS'    => 'Eine sichere Konfiguration der Content Security Policy (CSP) wurde gefunden.',
  'Content-Security-Policy_ERROR'      => 'Content Security Policy Inaktiv',
  'Content-Security-Policy_ERROR_DESC' => 'Content Security Policy (CSP) erfordert eine sorgfältige Abstimmung und genaue Definition der Policy. Wenn diese Option aktiviert wurde, hat CSP eine erhebliche Auswirkungen auf die Art und Weise wie der Browser die Seiten rendert (zum Beispiel Inline JavaScript ist standardmäßig deaktiviert und muss explizit in der Policy erlaubt werden). CSP kann eine Reihe Angriffe wie Cross-Site-Scripting und Cross-Site-Injektion effektiv verhindern.',
  'Content-Security-Policy_TIPS'       => 'Verwenden Sie den CSP mit default-src \'none\' und ohne unsicher-eval oder unsicher-inline-Richtlinien. Mehr zu Content Security Policy (zu deutsch etwa "Richtlinie für die Sicherheit der Inhalte") finden Sie bei SELFHTML>>   Beispiel:\n\n--snip\n# Download / Lade Inhalte nur von Seiten die explizit erlaubt sind\n# Beispiel das alles von der eigenen Domain erlaubt allerdings keinerlei Externas:\nHeader set Content-Security-Policy "default-src \'none\'; script-src \'self\'; connect-src \'self\'; img-src \'self\'; style-src \'self\';" \n--snap',
  // 30: Content-Type
  'Content-Type_SUCCESS'    => 'Die Content Type Angabe ist korrekt konfiguriert.',
  'Content-Type_ERROR'      => 'Fehlende HTTP-Header Konfiguration',
  'Content-Type_ERROR_DESC' => 'Der Content-Type ist eine Metaangabe, die im Kopfbereich der Website, dem sogenannten Head untergebracht wird. Durch diese Angabe wird der Zeichensatz und der Typ des Inhalts der Seite definiert. Diese Angaben sind wichtig, damit die Website in jedem Browser und auf jedem Computer einwandfrei dargestellt wird. Wenn ein Server ein Dokument an einen User-Agent sendet (zum Beispiel zum Browser) ist es nützlich, im Content-Type-Feld des HTTP-Header die Art des Dateiformates zu hinterlegen. Diese Informationen deklarieren den MIME-Typ und senden entsprechend die Zeichenkodierung des Dokuments wie text/html, text/plain, etc. an den Browser.',
  'Content-Type_TIPS'       => 'Fügen sie den entsprechenden <meta> Tag hinzu.                                     Text/html; charset=utf-8;\n--snip\n\n<meta http-equiv="Content-Type" content="text/html; charset=utf-8">\n--snap',
  // 31: Public-Key-Pins
  'Public-Key-Pins_SUCCESS'    => 'Public-Key-Pins sind aktiviert',
  'Public-Key-Pins_ERROR'      => 'Public-Key-Pins Inaktiv / Öffentliche Key-Pin deaktiviert',
  'Public-Key-Pins_ERROR_DESC' => 'HTTP Public Key Pinning (HPKP) ist ein Sicherheitsmechanismus, der es HTTPS Webseiten ermöglicht, Identitätswechsel durch Angreifer zu widerstehen, die falsch ausgegebene oder anderweitig betrügerische Zertifikate verwenden. (Zum Beispiel können manchmal Angreifer die Zertifizierungsstellen beeinträchtigen und können dann Zertifikate für eine Domain falsch ausstellen.).',
  'Public-Key-Pins_TIPS'       => 'pin-sha256="<HASH>"; pin-sha256="<HASH>"; max-age=2592000; includeSubDomains;\nHPKP aktivieren - Dieses Feature kann einfach aktiviert werden indem ein Public-Key-Pins HTTP-Header beim Aufruf der Seite über HTTPS zurückgegeben wird (weitere Infos):\n\n--snip\n\nPublic-Key-Pins: pin-sha256="base64=="; max-age=expireTime [; includeSubdomains][; report-uri="reportURI"]\n--snap',
  // 32: Strict-Transport-Security
  'Strict-Transport-Security_SUCCESS'    => 'Ihre Webseite ist ausschließlich über das sichere HTTPS-Protokoll erreichbar. Kommunikation zwischen Ihrer Webseite und den Besuchern kann nicht abgehört und manipuliert werden.',
  'Strict-Transport-Security_ERROR'      => 'HSTS Schutz Fehler',
  'Strict-Transport-Security_ERROR_DESC' => 'Der HSTS Schutz ist inaktiv, die Kommunikation zwischen Ihrer Webseite und den Besuchern kann abgehört und manipuliert werden.',
  'Strict-Transport-Security_TIPS'       => 'max-age=63072000; includeSubdomains;\nHTTP Strict Transport Security (HSTS) ist ein einfach zu integrierender Web-Security-Policy-Mechanismus.\n\n--snip\n# HTTP Strict Transport Security (HSTS) aktivieren\n# Pflichtangabe: „max-age“\n# Optional: „includeSubDomains“\nHeader set Strict-Transport-Security „max-age=31556926, includeSubDomains“\n--snap',
  // 33: X-Content-Type-Options
  'X-Content-Type-Options_SUCCESS'    => 'Der Header ist korrekt gesetzt.',
  'X-Content-Type-Options_ERROR'      => 'X-Content-Type Header fehlt',
  'X-Content-Type-Options_ERROR_DESC' => 'Die Einstellung dieses Headers verhindert, dass der Browser Dateien als etwas anderes interpretieren wird, als vom Inhaltstyp im HTTP-Headern deklariert wurde. Der Header ist nicht gesetzt.',
  'X-Content-Type-Options_TIPS'       => 'nosniff; \n\nBeispielcode einer .htaccess auf einem Apache Webserver.\n--snip\n<IfModule mod_headers.c>\n# HTTP Strict Transport Security (HSTS) aktivieren\nHeader set Strict-Transport-Security „max-age=31556926, includeSubDomains“\n# Avoid Clickjacking, Seite darf nur in frame oder iframe geöffnet werden auf eigener Domain\nHeader append X-Frame-Options „SAMEORIGIN“\n# Turn on XSS prevention tools, activated by default in IE and Chrome\nHeader set X-XSS-Protection „1; mode=block“\n# prevent mime based attacks like drive-by download attacks, IE and Chrome\nHeader set X-Content-Type-Options „nosniff“\n</IfModule>\n--snap',
  // 34: X-Frame-Options
  'X-Frame-Options_SUCCESS'    => 'Der Header ist korrekt gesetzt und verbessert den Schutz Ihrer Webseite gegen Clickjacking-Angriffe.',
  'X-Frame-Options_ERROR'      => 'X-Frame Optionen nicht gesetzt / Clickjacking Schutz',
  'X-Frame-Options_ERROR_DESC' => 'Gesetzte X-Frame Optionen im Header verbessern den Schutz von Web-Anwendungen gegen Clickjacking. Durch setzen dieser Option wird dem Browser mitgeteilt, ob Inhalte von anderen Webseiten in Frames auf der Seite dargestellt werden dürfen. oder anderen Webseiten anzeigt werden darf. Der Header ist nicht gesetzt oder enthält Platzhalter.',
  'X-Frame-Options_TIPS'       => 'Im Header entsprechend den Bedürfnissen setzen. Verwenden sie keine "allow-from: * "; Die X-Frame-Options im HTTP Header kann verwendet werden, um zu bestimmen, ob ein aufrufender Browser die Zielseite in einem <frame>, <iframe> oder <object> rendern bzw. einbetten darf. Webseiten können diesen Header verwenden, um Clickjacking Attacken abzuwehren, indem sie unterbinden, dass ihr Content in fremden Seiten eingebettet wird.\nBeispielcode einer .htaccess auf einem Apache Webserver.\n\n--snip\n<IfModule mod_headers.c>\n# HTTP Strict Transport Security (HSTS) aktivieren\nHeader set Strict-Transport-Security „max-age=31556926, includeSubDomains“\n# Avoid Clickjacking, Seite darf nur in frame oder iframe geöffnet werden auf eigener Domain\nHeader append X-Frame-Options „SAMEORIGIN“\n# Turn on XSS prevention tools, activated by default in IE and Chrome\nHeader set X-XSS-Protection „1; mode=block“\n# prevent mime based attacks like drive-by download attacks, IE and Chrome\nHeader set X-Content-Type-Options „nosniff“\n</IfModule><br>\n--snap',
  // 35: X-Xss-Protection
  'X-Xss-Protection_SUCCESS'    => 'Der Cross-Site-Scripting (XSS) -Schutz des Webbrowsers ist auf Ihrer Seite aktiviert.',
  'X-Xss-Protection_ERROR'      => 'Cross-Site-Scripting Schutz Header inaktiv',
  'X-Xss-Protection_ERROR_DESC' => 'Dieser Header konfiguriert den Cross-Site-Scripting (XSS) -Filter im Browser. Der Header ist nicht gesetzt.',
  'X-Xss-Protection_TIPS'       => '1; mode=block\nBeispielcode einer .htaccess auf einem Apache Webserver.\n\n--snip\n<IfModule mod_headers.c>\n# HTTP Strict Transport Security (HSTS) aktivieren\nHeader set Strict-Transport-Security „max-age=31556926, includeSubDomains“\n# Avoid Clickjacking, Seite darf nur in frame oder iframe geöffnet werden auf eigener Domain\nHeader append X-Frame-Options „SAMEORIGIN“\n# Turn on XSS prevention tools, activated by default in IE and Chrome\nHeader set X-XSS-Protection „1; mode=block“\n# prevent mime based attacks like drive-by download attacks, IE and Chrome\nHeader set X-Content-Type-Options „nosniff“\n</IfModule>\n--snap',
  // 36: Information-Leakage-Scanner
  // 36: cms
  'cms_SUCCESS'    => 'Das verwendete CMS kann nicht detektiert werden.',
  'cms_ERROR'      => 'Content Management System (CMS)- erkennbar',
  'cms_ERROR_DESC' => 'Das Verwendete Content Management System kann identifiziert werden. Diese Information könnte von einem Angreifer genutzt werden um gezielt nach Schwachstellen für dieses spezielle CMS zu suchen.',
  'cms_TIPS'       => 'Halten Sie installierte Webserver und Content Management System immer auf dem aktuellsten Stand. Manche CMS-System erlauben es Version Informationen zu verstecken. Nutzen sie dieses Feature falls verfügbar.',
  // 37: email
  'email_SUCCESS'    => 'Keine Email-Adresse gefunden.',
  'email_ERROR'      => 'Auslesbare Email-Adresse',
  'email_ERROR_DESC' => 'Ihre Webseite enthält mindestens eine maschinell auslesbare Email-Adresse. Dieses ermöglicht es Dritten, die hinterlegten Email-Adressen automatisiert durch WebCrawler zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufügen.',
  'email_TIPS'       => 'Hinterlegen Sie ihre Kontaktadressen, z.B. im Impressum wie folgt: mail at siwecos.de / mail @ siwecos.de oder hinterlegen Sie die Information in einer Grafik-Datei.',
  // 38: javascript
  'javascript_SUCCESS'    => 'Die JavaScript-Bibliotheken sind nach dem aktuellen Stand voraussichtlich nicht verwundbar.',
  'javascript_ERROR'      => 'Unsichere JavaScript-Bibliothek',
  'javascript_ERROR_DESC' => 'Es wurde eine JavaScript-Bibliothek gefunden für dessen Version eine Schwachstelle existiert',
  'javascript_TIPS'       => 'Updaten sie ihre verwendeten Javascript Bibliotheken.',
  // 39: plugin
  'plugin_SUCCESS'    => 'CMS-Plugins werden erfolgreich verborgen.',
  'plugin_ERROR'      => 'CMS Plugin detektiert',
  'plugin_ERROR_DESC' => 'Es wurde ein von ihrem CMS-System genutztes Plugin entdeckt. Ein Angreifer könnte diese Information nutzen um gezielt nach Schwachstellen für ihre Website zu nutzen.',
  'plugin_TIPS'       => 'Plugins sollten auf jene beschränkt werden, die tatsächlich benötigt werden. Damit kann die Angriffsfläche erheblich reduzieren werden. Zudem sollten installierte Plugins immer auf dem aktuellsten Stand gehalten werden.',

];
