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

  // Source . . . .: siwecos_scanner_beschreibung-2018-03-02.xlsx
  // Translations .: 72
  // 2: Generell
  // 2: HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE_SUCCESS'    => 'Server antwortet',
  'HTTPS_NO_RESPONSE_ERROR'      => 'Server antwortet nicht',
  'HTTPS_NO_RESPONSE_ERROR_DESC' => 'Der Server scheint Ã¼berhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?',
  'HTTPS_NO_RESPONSE_TIPS'       => '** missing Solution/Tips for HTTPS_NO_RESPONSE **',
  // 3: HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => 'Server spricht TLS',
  'HTTPS_NOT_SUPPORTED_ERROR'      => 'Server scheint kein TLS zu sprechen',
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => 'Der Server scheint kein TLS zu unterstÃ¼tzen. Dies bedeutet das sie keinerlei VerschlÃ¼sselung einsetzen um ihre Daten von ihnen und die ihrer Kunden zu schÃ¼tzen.',
  'HTTPS_NOT_SUPPORTED_TIPS'       => 'Aktivieren sie TLS.',
  // 4: Zertifikate
  // 4: CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED_SUCCESS'    => 'Zertifikat nicht abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR'      => 'Zertifikat abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswÃ¼rdig angezeigt wird. Sollte ein Nutzer Ihre Webseite Ã¼ber HTTPS aufrufen, wird ihm mÃ¶glicherweise eine Fehlermeldung angezeigt.',
  'CERTIFICATE_EXPIRED_TIPS'       => 'Dieses Problem lÃ¤sst sich lÃ¶sen, indem Sie das eingesetzte Zertifikat erneuern oder ein neues Zertifikat installieren. Wie Sie Zertifikate verlÃ¤ngern kÃ¶nnen, lesen Sie hier:Â Zertifikat abgelaufen',
  // 5: CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => 'Server sendet ein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => 'Server sendet kein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => 'Der Server hat kein Zertifikat gesendet. Dies ist ungewÃ¶hnlich und sollte eigentlich nicht vorkommen. Der Server sollte seine TLS-Konfiguration Ã¼berprÃ¼fen und ggf. anonyme Ciphersuites ausschalten.',
  'CERTIFICATE_NOT_SENT_BY_SERVER_TIPS'       => 'Aktuallisieren sie dringend die von ihnen eingesetzte TLS-Implementierungen. Moderne Software erlaubt diese Art der Konfiguration nicht mehr.',
  // 6: CERTIFICATE_NOT_VALID_YET&#10;
  'CERTIFICATE_NOT_VALID_YET&#10;_SUCCESS'    => 'Zertifikat ist schon gÃ¼ltig',
  'CERTIFICATE_NOT_VALID_YET&#10;_ERROR'      => 'Zertifikat noch nicht gÃ¼ltig',
  'CERTIFICATE_NOT_VALID_YET&#10;_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat noch nicht gÃ¼ltig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswÃ¼rdig angezeigt wird. Sollte ein Nutzer Ihre Webseite Ã¼ber HTTPS aufrufen, wird ihm mÃ¶glicherweise eine Fehlermeldung angezeigt.',
  'CERTIFICATE_NOT_VALID_YET&#10;_TIPS'       => 'Deaktivieren Sie das Zertifikat solange es noch nicht gÃ¼ltig ist. Ihre Webseite ist dann zwar nicht zertifiziert, jedoch erhalten Besucher zumindest keine Warnmeldung beim Aufruf Ihrer Webseite. Alternativ bietet sich die MÃ¶glichkeit an, ihr altes Zertifikat einzusetzen, so lange dies noch gÃ¼ltig ist. Wie Sie Zertifikate verlÃ¤ngern kÃ¶nnen, lesen Sie hier: Zertifikat abgelaufen&#10;',
  // 7: CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => 'Starker Hash-Algorithmus',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => 'Schwacher Hash-Algorithmus&#10;',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat einen schwachen Hash-Algorithmus besitzt. Es stellt mÃ¶glicherweise ein leichtes Ziel fÃ¼r Hacker-Angriffe dar. Ein Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen Hash-Algorithmus jedoch nicht.&#10;',
  'CERTIFICATE_WEAK_HASH_FUNCTION_TIPS'       => 'Um dieses Problem zu lÃ¶sen sollten sie ein neues Zertifikat mit einer sicheren Hash-Funktion installieren. Wie Sie ein sicheres Zertifikat bekommen, lesen Sie hier: Zertifikat installieren&#10;',
  // 8: VerschlÃ¼sselungsmethode
  // 8: CIPHERSUITE_ANON
  'CIPHERSUITE_ANON_SUCCESS'    => 'Kein Anonymer SchlÃ¼sselaustausch unterstÃ¼tzt',
  'CIPHERSUITE_ANON_ERROR'      => 'Anonymer SchlÃ¼sselaustausch unterstÃ¼tzt',
  'CIPHERSUITE_ANON_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass eine anonyme VerschlÃ¼sselungsmethodik (Ciphersuites) ohne Authentikation bei der Verbindung erfolgt. Dies ermÃ¶glicht Man-in-the-Middle Attacken.&#10;',
  'CIPHERSUITE_ANON_TIPS'       => 'Deaktivieren Sie die UnterstÃ¼tzung des Anonymen SchlÃ¼sselaustauschs in der  VerschlÃ¼sselungsmethodik.&#10;',
  // 9: CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT_SUCCESS'    => 'Keine schwache EXPORT VerschlÃ¼sselung unterstÃ¼tzt',
  'CIPHERSUITE_EXPORT_ERROR'      => 'Schwache Export VerschlÃ¼sselung unterstÃ¼tzt',
  'CIPHERSUITE_EXPORT_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass sich vorsÃ¤tzlich geschwÃ¤chte kryptographische Funktionen (Ciphersuites) nutzen lassen. Dies ermÃ¶glicht Man-in-the-Middle Attacken.&#10;',
  'CIPHERSUITE_EXPORT_TIPS'       => 'Deaktivieren Sie die UnterstÃ¼tzung von EXPORT VerschlÃ¼sselungsmethoden.&#10;',
  // 10: CIPHERSUITE_NULL
  'CIPHERSUITE_NULL_SUCCESS'    => 'Keine unsicheren Null Chiffren unterstÃ¼tzt',
  'CIPHERSUITE_NULL_ERROR'      => 'Unsichere NULL Chiffren unterstÃ¼tzt',
  'CIPHERSUITE_NULL_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass er zulÃ¤sst das keine VerschlÃ¼sselung eingesetzt wird obwohl TLS gesprochen wird. Dies ermÃ¶glicht Man-in-the-Middle Attacken.&#10;',
  'CIPHERSUITE_NULL_TIPS'       => 'Deaktivieren Sie die UnterstÃ¼tzung von NULL VerschlÃ¼sselungsmethoden.&#10;',
  // 11: CIPHERSUITE_RC4
  'CIPHERSUITE_RC4_SUCCESS'    => 'Keine veraltete RC4 VerschlÃ¼sselungsmethodik unterstÃ¼tzt',
  'CIPHERSUITE_RC4_ERROR'      => 'Veraltete RC4 VerschlÃ¼sselungsmethodik&#10;unterstÃ¼tzt',
  'CIPHERSUITE_RC4_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende VerschlÃ¼sselungsfunktion RC4 VerschlÃ¼sselungsmethodik (Ciphersuites) weiterhin unterstÃ¼tzt. Dies ermÃ¶glicht Man-in-the-Middle Attacken.&#10;',
  'CIPHERSUITE_RC4_TIPS'       => 'Deaktivieren Sie die UnterstÃ¼tzung der RC4 VerschlÃ¼sselungsmethodik.&#10;',
  // 12: CIPHERSUITE_DES
  'CIPHERSUITE_DES_SUCCESS'    => 'Keine veraltete DES VerschlÃ¼sselungsmethodik unterstÃ¼tzt',
  'CIPHERSUITE_DES_ERROR'      => 'Veraltete DES VerschlÃ¼sselungsmethodik unterstÃ¼tzt',
  'CIPHERSUITE_DES_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende VerschlÃ¼sselungsfunktion DES  (Ciphersuites) unterstÃ¼tzt. Dies ermÃ¶glicht Man-in-the-Middle Attacken.&#10;',
  'CIPHERSUITE_DES_TIPS'       => 'Deaktivieren Sie die UnterstÃ¼tzung der DES VerschlÃ¼sselungsmethodik',
  // 13: CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED_SUCCESS'    => 'Verantwortungsvolle Auswahl der VerschlÃ¼sselungsmethoden',
  'CIPHERSUITEORDER_ENFORCED_ERROR'      => 'Verantwortungslose Auswahl der VerschlÃ¼sselungsmethoden',
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass die VerschlÃ¼sselungsmethodik des Clients (Webseiten-Besuchers) bevorzugt wird, statt die Ihres Webservers. Server sollten die Auswahl der VerschlÃ¼sselungsmethoden nicht ihren Kunden Ã¼berlassen, sondern aktiv starke Verbindungen auswÃ¤hlen.',
  'CIPHERSUITEORDER_ENFORCED_TIPS'       => 'Konfigurieren Sie Ihren Webservern so, dass der Webserver die VerschlÃ¼sselungsmethodik bei der Kommunikation zwischen Ihrer Webseite und dem Webbrowser des Besuchers bestimmt Mehr Infos:&#10;',
  // 14: Protokollversionen
  // 14: PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2_SUCCESS'    => 'Veraltete Protokollversion SSL2 nicht unterstÃ¼tzt&#10;',
  'PROTOCOLVERSION_SSL2_ERROR'      => 'Veraltete Protokollversion SSL2 unterstÃ¼tzt&#10;',
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => 'Der Server unterstÃ¼tzt die veraltete Protokollversion SSL2, welche als hÃ¶chst unsicher gilt. Sie gefÃ¤hrden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und mÃ¶glicherweise Ihres gesamten Unternehmensnetzwerks.&#10;',
  'PROTOCOLVERSION_SSL2_TIPS'       => 'TLS-VerschlÃ¼sselung gilt heute als Standard fÃ¼r den Einsatz bei HTTPS eingesetzt, Sie sollten deshalb auf den Einsatz von SSL2 verzichten. Weitere Informationen finden Sie hier: SSL&#10;',
  // 15: PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3_SUCCESS'    => 'Veraltete Protokollversion SSL3 nicht unterstÃ¼tzt&#10;',
  'PROTOCOLVERSION_SSL3_ERROR'      => 'Veraltete Protokollversion SSL3 unterstÃ¼tzt&#10;',
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => 'Der Server unterstÃ¼tzt die veraltete Protokollversion SSL3, welche als hÃ¶chst unsicher gilt. Sie gefÃ¤hren mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und mÃ¶glicherweise Ihres gesamten Unternehmensnetzwerks.',
  'PROTOCOLVERSION_SSL3_TIPS'       => 'TLS-VerschlÃ¼sselung gilt heute als Standard fÃ¼r den Einsatz bei HTTPS eingesetzt, Sie sollten deshalb auf den Einsatz von SSL3 verzichten. Weitere Informationen finden Sie hier: SSL&#10;',
  // 16: PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13_SUCCESS'    => 'TLS 1.3 nicht unterstÃ¼tzt',
  'PROTOCOLVERSION_TLS13_ERROR'      => 'Moderne TLS 1.3 unterstÃ¼tzt',
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => 'Der Server unterstÃ¼tzt die neueste TLS Protokollversion. Diese befindet sich noch im Standartisierungsprozess. Sollten sie nicht wissen was dies bedeutet, kÃ¶nnen sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstÃ¼tzten und TLS 1.3 sich noch in der Entwicklung befindet.',
  'PROTOCOLVERSION_TLS13_TIPS'       => 'Es besteht kein Handlungsbedarf.',
  // 17: Angriffe
  // 17: BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR'      => 'Verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Bleichenbacher Angriff(ROBOT), welche es einem Angreifer erlaubt die Kommunikation zu entschlÃ¼sseln.',
  'BLEICHENBACHER_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update fÃ¼r ihre TLS Implementierung auf ihren Server ein.',
  // 18: CRIME_VULNERABLE
  'CRIME_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR'      => 'Verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch CRIME. Ein Angriff welcher es einem Angreifer erlaubt die Kommunikation zu entschlÃ¼sseln.',
  'CRIME_VULNERABLE_TIPS'       => 'Deaktivieren sie TLS-Compression auf ihrem Server',
  // 19: HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR'      => 'Verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch Heartbleed. Dadurch kann ein Angreifer sensible Daten aus dem Arbeisspeicher des Servers auslesen, wie z.B. geheime SchlÃ¼ssel und Kundendaten.',
  'HEARTBLEED_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update fÃ¼r ihre TLS Implementierung auf ihren Server ein.',
  // 20: INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => 'Verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Ephemeral Invalid Curve Angriff. Dadurch kann ein Angreifer Verbindungen angreifen.',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update fÃ¼r ihre TLS Implementierung auf ihren Server ein.',
  // 21: INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR'      => 'Verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Invalid Curve Angriff. Dadurch kann ein Angreifer den geheimen SchlÃ¼ssel ihres Zertifikats stehlen.',
  'INVALID_CURVE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update fÃ¼r ihre TLS Implementierung auf ihren Server ein.',
  // 22: PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR'      => 'Verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Padding-Oracle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlÃ¼sseln.',
  'PADDING_ORACLE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update fÃ¼r ihre TLS Implementierung auf ihren Server ein.',
  // 23: POODLE_VULNERABLE
  'POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Poodle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlÃ¼sseln.',
  'POODLE_VULNERABLE_TIPS'       => 'Deaktivieren Sie umgehend SSL3 auf ihrem Server!',
  // 24: TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch eine Variante des Poodle Angriffs auf TLS, welcher es einem Angreifer erlaubt die Kommunikation zu entschlÃ¼sseln.',
  'TLS_POODLE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update fÃ¼r ihre TLS Implementierung auf ihren Server ein.',
  // 25: SWEET32_VULNERABLE
  'SWEET32_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR'      => 'Verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch SWEET32, welcher es einem Angreifer erlaubt teile der Kommunikation zu entschlÃ¼sseln falls Ã¼ber eine Verbindung groÃe Mengen Daten transferiert werden.',
  'SWEET32_VULNERABLE_TIPS'       => 'Deaktivieren sie Blockchiffren mit einer LÃ¤nge von 64Bit.',
  // 26: XSS-Scanner
  // 26: HAS_SINKS
  'HAS_SINKS'            => 'HAS_SINKS',
  // 27: HAS_SOURCES
  'HAS_SOURCES'            => 'HAS_SOURCES',
  // 28: HAS_SINKS
  'HAS_SINKS_SUCCESS'    => 'Es wurden automatisiert keine unsicheren Codestellen gefunden, die auf eine Verwundbarkeit Ihrer Webseite hindeuten.',
  'HAS_SINKS_ERROR'      => 'Unsichere JavaScript-Methoden',
  'HAS_SINKS_ERROR_DESC' => 'Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der  unter bestimmten Voraussetzungen auf eine DOM-basierende Cross-Site Scripting AnfÃ¤lligkeit hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen und es Hackern ermÃ¶glichen, z.B. Viren oder Trojaner unbemerkt dort zu hinterlegen.&#10;&#10;&#10;',
  'HAS_SINKS_TIPS'       => 'Das Ergebnis der Untersuchung kann nur als Hinweis auf SicherheitslÃ¼cken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestÃ¤tigen.&#10;',
  // 29: HAS_SOURCES
  'HAS_SOURCES_SUCCESS'    => 'Es wurden automatisiert keine unsicheren EingabemÃ¶glichkeiten gefunden, die auf einer Verwundbarkeit Ihrer Webseite hindeuten.',
  'HAS_SOURCES_ERROR'      => 'Unsichere Quelle',
  'HAS_SOURCES_ERROR_DESC' => 'Es wurde eine EingabemÃ¶glichkeit gefunden, die von einer externen, mÃ¶glicherweise nicht vertrauenswÃ¼rdigen Quelle gesteuert werden kÃ¶nnte. Mindestens eine potentielle Quelle wurde auf der gescannten URL gefunden.&#10;',
  'HAS_SOURCES_TIPS'       => 'Das Ergebnis der Untersuchung kann nur als Hinweis auf SicherheitslÃ¼cken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestÃ¤tigen.&#10;',
  // 30: HTTP-Security-Header-Scanner
  // 30: CONTENT_SECURITY_POLICY
  'CONTENT_SECURITY_POLICY'            => 'CONTENT_SECURITY_POLICY',
  // 31: CONTENT_TYPE
  'CONTENT_TYPE'            => 'CONTENT_TYPE',
  // 32: PUBLIC_KEY_PINS
  'PUBLIC_KEY_PINS'            => 'PUBLIC_KEY_PINS',
  // 33: STRICT_TRANSPORT_SECURITY
  'STRICT_TRANSPORT_SECURITY'            => 'STRICT_TRANSPORT_SECURITY',
  // 34: X_CONTENT_TYPE_OPTIONS
  'X_CONTENT_TYPE_OPTIONS'            => 'X_CONTENT_TYPE_OPTIONS',
  // 35: X_FRAME_OPTIONS
  'X_FRAME_OPTIONS'            => 'X_FRAME_OPTIONS',
  // 36: X_XSS_PROTECTION
  'X_XSS_PROTECTION'            => 'X_XSS_PROTECTION',
  // 37: CONTENT_SECURITY_POLICY&#10;
  'CONTENT_SECURITY_POLICY&#10;_SUCCESS'    => 'Eine sichere Konfiguration der Content Security Policy (CSP) wurde gefunden.',
  'CONTENT_SECURITY_POLICY&#10;_ERROR'      => 'Content Security Policy Inaktiv&#10;',
  'CONTENT_SECURITY_POLICY&#10;_ERROR_DESC' => 'Content Security Policy (CSP) erfordert eine sorgfÃ¤ltige Abstimmung und genaue Definition der Policy. Wenn diese Option aktiviert wurde, hat CSP eine erhebliche Auswirkungen auf die Art und Weise wie der Browser die Seiten rendert (zum Beispiel Inline JavaScript ist standardmÃ¤Ãig deaktiviert und muss explizit in der Policy erlaubt werden). CSP kann eine Reihe Angriffe wie Cross-Site-Scripting und Cross-Site-Injektion effektiv verhindern.&#10;',
  'CONTENT_SECURITY_POLICY&#10;_TIPS'       => 'Verwenden Sie den CSP mit default-src &apos;none&apos; und ohne unsicher-eval oder unsicher-inline-Richtlinien. Mehr zu Content Security Policy (zu deutsch etwa &quot;Richtlinie fÃ¼r die Sicherheit der Inhalte&quot;) finden Sie bei SELFHTML&gt;&gt;   Beispiel:&#10;&#10;--snip&#10;# Download / Lade Inhalte nur von Seiten die explizit erlaubt sind&#10;# Beispiel das alles von der eigenen Domain erlaubt allerdings keinerlei Externas:&#10;Header set Content-Security-Policy &quot;default-src &apos;none&apos;; script-src &apos;self&apos;; connect-src &apos;self&apos;; img-src &apos;self&apos;; style-src &apos;self&apos;;&quot; &#10;--snap',
  // 38: CONTENT_TYPE&#10;
  'CONTENT_TYPE&#10;_SUCCESS'    => 'Die Content Type Angabe ist korrekt konfiguriert.',
  'CONTENT_TYPE&#10;_ERROR'      => 'Fehlende HTTP-Header Konfiguration&#10;',
  'CONTENT_TYPE&#10;_ERROR_DESC' => 'Der Content-Type ist eine Metaangabe, die im Kopfbereich der Website, dem sogenannten Head untergebracht wird. Durch diese Angabe wird der Zeichensatz und der Typ des Inhalts der Seite definiert. Diese Angaben sind wichtig, damit die Website in jedem Browser und auf jedem Computer einwandfrei dargestellt wird. Wenn ein Server ein Dokument an einen User-Agent sendet (zum Beispiel zum Browser) ist es nÃ¼tzlich, im Content-Type-Feld des HTTP-Header die Art des Dateiformates zu hinterlegen. Diese Informationen deklarieren den MIME-Typ und senden entsprechend die Zeichenkodierung des Dokuments wie text/html, text/plain, etc. an den Browser.&#10;',
  'CONTENT_TYPE&#10;_TIPS'       => 'FÃ¼gen sie den entsprechenden &lt;meta&gt; Tag hinzu.                                     Text/html; charset=utf-8;&#10;--snip&#10;&#10;&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot;&gt;&#10;--snap',
  // 39: PUBLIC_KEY_PINS&#10;
  'PUBLIC_KEY_PINS&#10;_SUCCESS'    => 'Public-Key-Pins sind aktiviert',
  'PUBLIC_KEY_PINS&#10;_ERROR'      => 'Public-Key-Pins Inaktiv / Ãffentliche Key-Pin deaktiviert&#10;',
  'PUBLIC_KEY_PINS&#10;_ERROR_DESC' => 'HTTP Public Key Pinning (HPKP) ist ein Sicherheitsmechanismus, der es HTTPS Webseiten ermÃ¶glicht, IdentitÃ¤tswechsel durch Angreifer zu widerstehen, die falsch ausgegebene oder anderweitig betrÃ¼gerische Zertifikate verwenden. (Zum Beispiel kÃ¶nnen manchmal Angreifer die Zertifizierungsstellen beeintrÃ¤chtigen und kÃ¶nnen dann Zertifikate fÃ¼r eine Domain falsch ausstellen.).&#10;',
  'PUBLIC_KEY_PINS&#10;_TIPS'       => 'pin-sha256=&quot;&lt;HASH&gt;&quot;; pin-sha256=&quot;&lt;HASH&gt;&quot;; max-age=2592000; includeSubDomains;&#10;HPKP aktivieren - Dieses Feature kann einfach aktiviert werden indem ein Public-Key-Pins HTTP-Header beim Aufruf der Seite Ã¼ber HTTPS zurÃ¼ckgegeben wird (weitere Infos):&#10;&#10;--snip&#10;&#10;Public-Key-Pins: pin-sha256=&quot;base64==&quot;; max-age=expireTime [; includeSubdomains][; report-uri=&quot;reportURI&quot;]&#10;--snap',
  // 40: STRICT_TRANSPORT_SECURITY&#10;
  'STRICT_TRANSPORT_SECURITY&#10;_SUCCESS'    => 'Ihre Webseite ist ausschlieÃlich Ã¼ber das sichere HTTPS-Protokoll erreichbar. Kommunikation zwischen Ihrer Webseite und den Besuchern kann nicht abgehÃ¶rt und manipuliert werden.',
  'STRICT_TRANSPORT_SECURITY&#10;_ERROR'      => 'HSTS Schutz Fehler&#10;',
  'STRICT_TRANSPORT_SECURITY&#10;_ERROR_DESC' => 'Der HSTS Schutz ist inaktiv, die Kommunikation zwischen Ihrer Webseite und den Besuchern kann abgehÃ¶rt und manipuliert werden.&#10;',
  'STRICT_TRANSPORT_SECURITY&#10;_TIPS'       => 'max-age=63072000; includeSubdomains;&#10;HTTP Strict Transport Security (HSTS) ist ein einfach zu integrierender Web-Security-Policy-Mechanismus.&#10;&#10;--snip&#10;# HTTP Strict Transport Security (HSTS) aktivieren&#10;# Pflichtangabe: âmax-ageâ&#10;# Optional: âincludeSubDomainsâ&#10;Header set Strict-Transport-Security âmax-age=31556926, includeSubDomainsâ&#10;--snap',
  // 41: X_CONTENT_TYPE_OPTIONS
  'X_CONTENT_TYPE_OPTIONS_SUCCESS'    => 'Der Header ist korrekt gesetzt.',
  'X_CONTENT_TYPE_OPTIONS_ERROR'      => 'X-Content-Type Header fehlt&#10;',
  'X_CONTENT_TYPE_OPTIONS_ERROR_DESC' => 'Die Einstellung dieses Headers verhindert, dass der Browser Dateien als etwas anderes interpretieren wird, als vom Inhaltstyp im HTTP-Headern deklariert wurde. Der Header ist nicht gesetzt.&#10;',
  'X_CONTENT_TYPE_OPTIONS_TIPS'       => 'nosniff; &#10;&#10;Beispielcode einer .htaccess auf einem Apache Webserver.&#10;--snip&#10;&lt;IfModule mod_headers.c&gt;&#10;# HTTP Strict Transport Security (HSTS) aktivieren&#10;Header set Strict-Transport-Security âmax-age=31556926, includeSubDomainsâ&#10;# Avoid Clickjacking, Seite darf nur in frame oder iframe geÃ¶ffnet werden auf eigener Domain&#10;Header append X-Frame-Options âSAMEORIGINâ&#10;# Turn on XSS prevention tools, activated by default in IE and Chrome&#10;Header set X-XSS-Protection â1; mode=blockâ&#10;# prevent mime based attacks like drive-by download attacks, IE and Chrome&#10;Header set X-Content-Type-Options ânosniffâ&#10;&lt;/IfModule&gt;&#10;--snap',
  // 42: X_FRAME_OPTIONS
  'X_FRAME_OPTIONS_SUCCESS'    => 'Der Header ist korrekt gesetzt und verbessert den Schutz Ihrer Webseite gegen Clickjacking-Angriffe.',
  'X_FRAME_OPTIONS_ERROR'      => 'X-Frame Optionen nicht gesetzt / Clickjacking Schutz&#10;',
  'X_FRAME_OPTIONS_ERROR_DESC' => 'Gesetzte X-Frame Optionen im Header verbessern den Schutz von Web-Anwendungen gegen Clickjacking. Durch setzen dieser Option wird dem Browser mitgeteilt, ob Inhalte von anderen Webseiten in Frames auf der Seite dargestellt werden dÃ¼rfen. oder anderen Webseiten anzeigt werden darf. Der Header ist nicht gesetzt oder enthÃ¤lt Platzhalter.&#10;',
  'X_FRAME_OPTIONS_TIPS'       => 'Im Header entsprechend den BedÃ¼rfnissen setzen. Verwenden sie keine &quot;allow-from: * &quot;; Die X-Frame-Options im HTTP Header kann verwendet werden, um zu bestimmen, ob ein aufrufender Browser die Zielseite in einem &lt;frame&gt;, &lt;iframe&gt; oder &lt;object&gt; rendern bzw. einbetten darf. Webseiten kÃ¶nnen diesen Header verwenden, um Clickjacking Attacken abzuwehren, indem sie unterbinden, dass ihr Content in fremden Seiten eingebettet wird.&#10;Beispielcode einer .htaccess auf einem Apache Webserver.&#10;&#10;--snip&#10;&lt;IfModule mod_headers.c&gt;&#10;# HTTP Strict Transport Security (HSTS) aktivieren&#10;Header set Strict-Transport-Security âmax-age=31556926, includeSubDomainsâ&#10;# Avoid Clickjacking, Seite darf nur in frame oder iframe geÃ¶ffnet werden auf eigener Domain&#10;Header append X-Frame-Options âSAMEORIGINâ&#10;# Turn on XSS prevention tools, activated by default in IE and Chrome&#10;Header set X-XSS-Protection â1; mode=blockâ&#10;# prevent mime based attacks like drive-by download attacks, IE and Chrome&#10;Header set X-Content-Type-Options ânosniffâ&#10;&lt;/IfModule&gt;&lt;br&gt;&#10;--snap',
  // 43: X_XSS_PROTECTION
  'X_XSS_PROTECTION_SUCCESS'    => 'Der Cross-Site-Scripting (XSS) -Schutz des Webbrowsers ist auf Ihrer Seite aktiviert.',
  'X_XSS_PROTECTION_ERROR'      => 'Cross-Site-Scripting Schutz Header inaktiv&#10;',
  'X_XSS_PROTECTION_ERROR_DESC' => 'Dieser Header konfiguriert den Cross-Site-Scripting (XSS) -Filter im Browser. Der Header ist nicht gesetzt.&#10;',
  'X_XSS_PROTECTION_TIPS'       => '1; mode=block&#10;Beispielcode einer .htaccess auf einem Apache Webserver.&#10;&#10;--snip&#10;&lt;IfModule mod_headers.c&gt;&#10;# HTTP Strict Transport Security (HSTS) aktivieren&#10;Header set Strict-Transport-Security âmax-age=31556926, includeSubDomainsâ&#10;# Avoid Clickjacking, Seite darf nur in frame oder iframe geÃ¶ffnet werden auf eigener Domain&#10;Header append X-Frame-Options âSAMEORIGINâ&#10;# Turn on XSS prevention tools, activated by default in IE and Chrome&#10;Header set X-XSS-Protection â1; mode=blockâ&#10;# prevent mime based attacks like drive-by download attacks, IE and Chrome&#10;Header set X-Content-Type-Options ânosniffâ&#10;&lt;/IfModule&gt;&#10;--snap',
  // 44: Information-Leakage-Scanner &#10;
  // 44: CMS
  'CMS'            => 'CMS',
  // 45: SCORE_warning
  'SCORE_warning'            => 'SCORE_warning',
  // 46: CMS_PLUGINS
  'CMS_PLUGINS'            => 'CMS_PLUGINS',
  // 47: JS_LIB
  'JS_LIB'            => 'JS_LIB',
  // 48: EMAIL_ADDRESS
  'EMAIL_ADDRESS'            => 'EMAIL_ADDRESS',
  // 49: PHONE_NUMBER
  'PHONE_NUMBER'            => 'PHONE_NUMBER',
  // 50: CMS
  'CMS_SUCCESS'    => 'Das verwendete CMS kann nicht detektiert werden.',
  'CMS_ERROR'      => 'Content Management System (CMS)- erkennbar',
  'CMS_ERROR_DESC' => 'Das Verwendete Content Management System kann identifiziert werden. Diese Information kÃ¶nnte von einem Angreifer genutzt werden um gezielt nach Schwachstellen fÃ¼r dieses spezielle CMS zu suchen.',
  'CMS_TIPS'       => 'Halten Sie installierte Webserver und Content Management System immer auf dem aktuellsten Stand. Manche CMS-System erlauben es Version Informationen zu verstecken. Nutzen sie dieses Feature falls verfÃ¼gbar.&#10;',
  // 51: EMAIL
  'EMAIL_SUCCESS'    => 'Keine Email-Adresse gefunden.',
  'EMAIL_ERROR'      => 'Auslesbare Email-Adresse&#10;',
  'EMAIL_ERROR_DESC' => 'Ihre Webseite enthÃ¤lt mindestens eine maschinell auslesbare Email-Adresse. Dieses ermÃ¶glicht es Dritten, die hinterlegten Email-Adressen automatisiert durch WebCrawler zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufÃ¼gen.&#10;',
  'EMAIL_TIPS'       => 'Hinterlegen Sie ihre Kontaktadressen, z.B. im Impressum wie folgt: mail at siwecos.de / mail @ siwecos.de oder hinterlegen Sie die Information in einer Grafik-Datei.&#10;',
  // 52: JAVASCRIPT
  'JAVASCRIPT_SUCCESS'    => 'Die JavaScript-Bibliotheken sind nach dem aktuellen Stand voraussichtlich nicht verwundbar.',
  'JAVASCRIPT_ERROR'      => 'Unsichere JavaScript-Bibliothek&#10;',
  'JAVASCRIPT_ERROR_DESC' => 'Es wurde eine JavaScript-Bibliothek gefunden fÃ¼r dessen Version eine Schwachstelle existiert&#10;',
  'JAVASCRIPT_TIPS'       => 'Updaten sie ihre verwendeten Javascript Bibliotheken.&#10;',
  // 53: PLUGIN
  'PLUGIN_SUCCESS'    => 'CMS-Plugins werden erfolgreich verborgen.',
  'PLUGIN_ERROR'      => 'CMS Plugin detektiert&#10;',
  'PLUGIN_ERROR_DESC' => 'Es wurde ein von ihrem CMS-System genutztes Plugin entdeckt. Ein Angreifer kÃ¶nnte diese Information nutzen um gezielt nach Schwachstellen fÃ¼r ihre Website zu nutzen.',
  'PLUGIN_TIPS'       => 'Plugins sollten auf jene beschrÃ¤nkt werden, die tatsÃ¤chlich benÃ¶tigt werden. Damit kann die AngriffsflÃ¤che erheblich reduzieren werden. Zudem sollten installierte Plugins immer auf dem aktuellsten Stand gehalten werden.&#10;',
  // 54: Initiative-S Scanner
  // 54: PHISHING
  'PHISHING'            => 'PHISHING',
  // 55: SPAM
  'SPAM'            => 'SPAM',
  // 56: MALWARE
  'MALWARE'            => 'MALWARE',
  // 57: TLS Scanner
  // 57: HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE'            => 'HTTPS_NO_RESPONSE',
  // 58: CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED'            => 'CERTIFICATE_EXPIRED',
  // 59: CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET'            => 'CERTIFICATE_NOT_VALID_YET',
  // 60: CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION'            => 'CERTIFICATE_WEAK_HASH_FUNCTION',
  // 61: CIPHERSUITE_ANON
  'CIPHERSUITE_ANON'            => 'CIPHERSUITE_ANON',
  // 62: CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT'            => 'CIPHERSUITE_EXPORT',
  // 63: CIPHERSUITE_NULL
  'CIPHERSUITE_NULL'            => 'CIPHERSUITE_NULL',
  // 64: CIPHERSUITE_RC4
  'CIPHERSUITE_RC4'            => 'CIPHERSUITE_RC4',
  // 65: CIPHERSUITE_DES
  'CIPHERSUITE_DES'            => 'CIPHERSUITE_DES',
  // 66: SWEET32_VULNERABLE
  'SWEET32_VULNERABLE'            => 'SWEET32_VULNERABLE',
  // 67: CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED'            => 'CIPHERSUITEORDER_ENFORCED',
  // 68: PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2'            => 'PROTOCOLVERSION_SSL2',
  // 69: PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3'            => 'PROTOCOLVERSION_SSL3',
  // 70: SCORE_bonus
  'SCORE_bonus'            => 'SCORE_bonus',
  // 71: PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13'            => 'PROTOCOLVERSION_TLS13',
  // 72: CRIME_VULNERABLE
  'CRIME_VULNERABLE'            => 'CRIME_VULNERABLE',
  // 73: POODLE_VULNERABLE
  'POODLE_VULNERABLE'            => 'POODLE_VULNERABLE',

];
