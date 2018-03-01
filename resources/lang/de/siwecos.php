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

  // Generell
  // Row 3
  'HTTPS_NO_RESPONSE_SUCCESS'    => 'Server antwortet',
  'HTTPS_NO_RESPONSE_ERROR'      => 'Server antwortet nicht',
  'HTTPS_NO_RESPONSE_ERROR_DESC' => 'Der Server scheint überhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?',
  // Row 4
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => 'Server spricht TLS',
  'HTTPS_NOT_SUPPORTED_ERROR'      => 'Server scheint kein TLS zu sprechen',
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => 'Der Server scheint kein TLS zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten von ihnen und die ihrer Kunden zu schützen.',
  // Zertifikate
  // Row 5
  'CERTIFICATE_EXPIRED_SUCCESS'    => 'Zertifikat nicht abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR'      => 'Zertifikat abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über HTTPS aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.',
  // Row 6
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => 'Server sendet ein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => 'Server sendet kein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => 'Der Server hat kein Zertifikat gesendet. Dies ist ungewöhnlich und sollte eigentlich nicht vorkommen. Der Server sollte seine TLS-Konfiguration überprüfen und ggf. anonyme Ciphersuites ausschalten.',
  // Row 7
  'CERTIFICATE_NOT_VALID_YET_SUCCESS'    => 'Zertifikat ist schon gültig',
  'CERTIFICATE_NOT_VALID_YET_ERROR'      => 'Zertifikat noch nicht gültig',
  'CERTIFICATE_NOT_VALID_YET_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat noch nicht gültig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über HTTPS aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.',
  // Row 8
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => 'Starker Hash-Algorithmus',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => 'Schwacher Hash-Algorithmus',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat einen schwachen Hash-Algorithmus besitzt. Es stellt möglicherweise ein leichtes Ziel für Hacker-Angriffe dar. Ein Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen Hash-Algorithmus jedoch nicht.',
  // Verschlüsselungsmethode
  // Row 9
  'CIPHERSUITE_ANON_SUCCESS'    => 'Kein Anonymer Schlüsselaustausch unterstützt',
  'CIPHERSUITE_ANON_ERROR'      => 'Anonymer Schlüsselaustausch unterstützt',
  'CIPHERSUITE_ANON_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass eine anonyme Verschlüsselungsmethodik (Ciphersuites) ohne Authentikation bei der Verbindung erfolgt. Dies ermöglicht Man-in-the-Middle Attacken.',
  // Row 10
  'CIPHERSUITE_EXPORT_SUCCESS'    => 'Keine schwache EXPORT Verschlüsselung unterstützt',
  'CIPHERSUITE_EXPORT_ERROR'      => 'Schwache Export Verschlüsselung unterstützt',
  'CIPHERSUITE_EXPORT_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass sich vorsätzlich geschwächte kryptographische Funktionen (Ciphersuites) nutzen lassen. Dies ermöglicht Man-in-the-Middle Attacken.',
  // Row 11
  'CIPHERSUITE_NULL_SUCCESS'    => 'Keine unsicheren Null Chiffren unterstützt',
  'CIPHERSUITE_NULL_ERROR'      => 'Unsichere NULL Chiffren unterstützt',
  'CIPHERSUITE_NULL_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass er zulässt das keine Verschlüsselung eingesetzt wird obwohl TLS gesprochen wird. Dies ermöglicht Man-in-the-Middle Attacken.',
  // Row 12
  'CIPHERSUITE_RC4_SUCCESS'    => 'Keine veraltete RC4 Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_RC4_ERROR'      => 'Veraltete RC4 Verschlüsselungsmethodik
unterstützt',
  'CIPHERSUITE_RC4_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 Verschlüsselungsmethodik (Ciphersuites) weiterhin unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.',
  // Row 13
  'CIPHERSUITE_DES_SUCCESS'    => 'Keine veraltete DES Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_DES_ERROR'      => 'Veraltete DES Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_DES_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES  (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.',
  // Row 14
  'CIPHERSUITEORDER_ENFORCED_SUCCESS'    => 'Verantwortungsvolle Auswahl der Verschlüsselungsmethoden',
  'CIPHERSUITEORDER_ENFORCED_ERROR'      => 'Verantwortungslose Auswahl der Verschlüsselungsmethoden',
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass die Verschlüsselungsmethodik des Clients (Webseiten-Besuchers) bevorzugt wird, statt die Ihres Webservers. Server sollten die Auswahl der Verschlüsselungsmethoden nicht ihren Kunden überlassen, sondern aktiv starke Verbindungen auswählen.',
  // Protokollversionen
  // Row 15
  'PROTOCOLVERSION_SSL2_SUCCESS'    => 'Veraltete Protokollversion SSL2 nicht unterstützt',
  'PROTOCOLVERSION_SSL2_ERROR'      => 'Veraltete Protokollversion SSL2 unterstützt',
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => 'Der Server unterstützt die veraltete Protokollversion SSL2, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.',
  // Row 16
  'PROTOCOLVERSION_SSL3_SUCCESS'    => 'Veraltete Protokollversion SSL3 nicht unterstützt',
  'PROTOCOLVERSION_SSL3_ERROR'      => 'Veraltete Protokollversion SSL3 unterstützt',
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => 'Der Server unterstützt die veraltete Protokollversion SSL3, welche als höchst unsicher gilt. Sie gefähren mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.',
  // Row 17
  'PROTOCOLVERSION_TLS13_SUCCESS'    => 'TLS 1.3 nicht unterstützt',
  'PROTOCOLVERSION_TLS13_ERROR'      => 'Moderne TLS 1.3 unterstützt',
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => 'Der Server unterstützt die neueste TLS Protokollversion. Diese befindet sich noch im Standartisierungsprozess. Sollten sie nicht wissen was dies bedeutet, können sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützten und TLS 1.3 sich noch in der Entwicklung befindet.',
  // Angriffe
  // Row 18
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR'      => 'Verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Bleichenbacher Angriff(ROBOT), welche es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  // Row 19
  'CRIME_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR'      => 'Verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch CRIME. Ein Angriff welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  // Row 20
  'HEARTBLEED_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR'      => 'Verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch Heartbleed. Dadurch kann ein Angreifer sensible Daten aus dem Arbeisspeicher des Servers auslesen, wie z.B. geheime Schlüssel und Kundendaten.',
  // Row 21
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => 'Verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Ephemeral Invalid Curve Angriff. Dadurch kann ein Angreifer Verbindungen angreifen.',
  // Row 22
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR'      => 'Verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Invalid Curve Angriff. Dadurch kann ein Angreifer den geheimen Schlüssel ihres Zertifikats stehlen.',
  // Row 23
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR'      => 'Verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Padding-Oracle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  // Row 24
  'POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Poodle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  // Row 25
  'TLS_POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch eine Variante des Poodle Angriffs auf TLS, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  // Row 26
  'SWEET32_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR'      => 'Verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch SWEET32, welcher es einem Angreifer erlaubt teile der Kommunikation zu entschlüsseln falls über eine Verbindung große Mengen Daten transferiert werden.',
  // XSS-Scanner
  // Row 27
  'Sinks_SUCCESS'    => 'Es wurden automatisiert keine unsicheren Codestellen gefunden, die auf eine Verwundbarkeit Ihrer Webseite hindeuten.',
  'Sinks_ERROR'      => 'Unsichere JavaScript-Methoden',
  'Sinks_ERROR_DESC' => 'Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der  unter bestimmten Voraussetzungen auf eine DOM-basierende Cross-Site Scripting Anfälligkeit hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen und es Hackern ermöglichen, z.B. Viren oder Trojaner unbemerkt dort zu hinterlegen.',
  // Row 28
  'Sources_SUCCESS'    => 'Es wurden automatisiert keine unsicheren Eingabemöglichkeiten gefunden, die auf einer Verwundbarkeit Ihrer Webseite hindeuten.',
  'Sources_ERROR'      => 'Unsichere Quelle',
  'Sources_ERROR_DESC' => 'Es wurde eine Eingabemöglichkeit gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte. Mindestens eine potentielle Quelle wurde auf der gescannten URL gefunden.',
  // HTTP-Security-Header-Scanner
  // Row 29
  'Content-Security-Policy_SUCCESS'    => 'Eine sichere Konfiguration der Content Security Policy (CSP) wurde gefunden.',
  'Content-Security-Policy_ERROR'      => 'Content Security Policy Inaktiv',
  'Content-Security-Policy_ERROR_DESC' => 'Content Security Policy (CSP) erfordert eine sorgfältige Abstimmung und genaue Definition der Policy. Wenn diese Option aktiviert wurde, hat CSP eine erhebliche Auswirkungen auf die Art und Weise wie der Browser die Seiten rendert (zum Beispiel Inline JavaScript ist standardmäßig deaktiviert und muss explizit in der Policy erlaubt werden). CSP kann eine Reihe Angriffe wie Cross-Site-Scripting und Cross-Site-Injektion effektiv verhindern.',
  // Row 30
  'Content-Type_SUCCESS'    => 'Die Content Type Angabe ist korrekt konfiguriert.',
  'Content-Type_ERROR'      => 'Fehlende HTTP-Header Konfiguration',
  'Content-Type_ERROR_DESC' => 'Der Content-Type ist eine Metaangabe, die im Kopfbereich der Website, dem sogenannten Head untergebracht wird. Durch diese Angabe wird der Zeichensatz und der Typ des Inhalts der Seite definiert. Diese Angaben sind wichtig, damit die Website in jedem Browser und auf jedem Computer einwandfrei dargestellt wird. Wenn ein Server ein Dokument an einen User-Agent sendet (zum Beispiel zum Browser) ist es nützlich, im Content-Type-Feld des HTTP-Header die Art des Dateiformates zu hinterlegen. Diese Informationen deklarieren den MIME-Typ und senden entsprechend die Zeichenkodierung des Dokuments wie text/html, text/plain, etc. an den Browser.',
  // Row 31
  'Public-Key-Pins_SUCCESS'    => 'Public-Key-Pins sind aktiviert',
  'Public-Key-Pins_ERROR'      => 'Public-Key-Pins Inaktiv / Öffentliche Key-Pin deaktiviert',
  'Public-Key-Pins_ERROR_DESC' => 'HTTP Public Key Pinning (HPKP) ist ein Sicherheitsmechanismus, der es HTTPS Webseiten ermöglicht, Identitätswechsel durch Angreifer zu widerstehen, die falsch ausgegebene oder anderweitig betrügerische Zertifikate verwenden. (Zum Beispiel können manchmal Angreifer die Zertifizierungsstellen beeinträchtigen und können dann Zertifikate für eine Domain falsch ausstellen.).',
  // Row 32
  'Strict-Transport-Security_SUCCESS'    => 'Ihre Webseite ist ausschließlich über das sichere HTTPS-Protokoll erreichbar. Kommunikation zwischen Ihrer Webseite und den Besuchern kann nicht abgehört und manipuliert werden.',
  'Strict-Transport-Security_ERROR'      => 'HSTS Schutz Fehler',
  'Strict-Transport-Security_ERROR_DESC' => 'Der HSTS Schutz ist inaktiv, die Kommunikation zwischen Ihrer Webseite und den Besuchern kann abgehört und manipuliert werden.',
  // Row 33
  'X-Content-Type-Options_SUCCESS'    => 'Der Header ist korrekt gesetzt.',
  'X-Content-Type-Options_ERROR'      => 'X-Content-Type Header fehlt',
  'X-Content-Type-Options_ERROR_DESC' => 'Die Einstellung dieses Headers verhindert, dass der Browser Dateien als etwas anderes interpretieren wird, als vom Inhaltstyp im HTTP-Headern deklariert wurde. Der Header ist nicht gesetzt.',
  // Row 34
  'X-Frame-Options_SUCCESS'    => 'Der Header ist korrekt gesetzt und verbessert den Schutz Ihrer Webseite gegen Clickjacking-Angriffe.',
  'X-Frame-Options_ERROR'      => 'X-Frame Optionen nicht gesetzt / Clickjacking Schutz',
  'X-Frame-Options_ERROR_DESC' => 'Gesetzte X-Frame Optionen im Header verbessern den Schutz von Web-Anwendungen gegen Clickjacking. Durch setzen dieser Option wird dem Browser mitgeteilt, ob Inhalte von anderen Webseiten in Frames auf der Seite dargestellt werden dürfen. oder anderen Webseiten anzeigt werden darf. Der Header ist nicht gesetzt oder enthält Platzhalter.',
  // Row 35
  'X-Xss-Protection_SUCCESS'    => 'Der Cross-Site-Scripting (XSS) -Schutz des Webbrowsers ist auf Ihrer Seite aktiviert.',
  'X-Xss-Protection_ERROR'      => 'Cross-Site-Scripting Schutz Header inaktiv',
  'X-Xss-Protection_ERROR_DESC' => 'Dieser Header konfiguriert den Cross-Site-Scripting (XSS) -Filter im Browser. Der Header ist nicht gesetzt.',
  // Information-Leakage-Scanner
  // Row 36
  'cms_SUCCESS'    => 'Das verwendete CMS kann nicht detektiert werden.',
  'cms_ERROR'      => 'Content Management System (CMS)- erkennbar',
  'cms_ERROR_DESC' => 'Das Verwendete Content Management System kann identifiziert werden. Diese Information könnte von einem Angreifer genutzt werden um gezielt nach Schwachstellen für dieses spezielle CMS zu suchen.',
  // Row 37
  'email_SUCCESS'    => 'Keine Email-Adresse gefunden.',
  'email_ERROR'      => 'Auslesbare Email-Adresse',
  'email_ERROR_DESC' => 'Ihre Webseite enthält mindestens eine maschinell auslesbare Email-Adresse. Dieses ermöglicht es Dritten, die hinterlegten Email-Adressen automatisiert durch WebCrawler zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufügen.',
  // Row 38
  'javascript_SUCCESS'    => 'Die JavaScript-Bibliotheken sind nach dem aktuellen Stand voraussichtlich nicht verwundbar.',
  'javascript_ERROR'      => 'Unsichere JavaScript-Bibliothek',
  'javascript_ERROR_DESC' => 'Es wurde eine JavaScript-Bibliothek gefunden für dessen Version eine Schwachstelle existiert',
  // Row 39
  'plugin_SUCCESS'    => 'CMS-Plugins werden erfolgreich verborgen.',
  'plugin_ERROR'      => 'CMS Plugin detektiert',
  'plugin_ERROR_DESC' => 'Es wurde ein von ihrem CMS-System genutztes Plugin entdeckt. Ein Angreifer könnte diese Information nutzen um gezielt nach Schwachstellen für ihre Website zu nutzen.',

];
