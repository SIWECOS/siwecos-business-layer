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

  // Commit . . . .: 2a85175ba1c4fa22eadfb9688bc8838541ce3fb3
  //
  // Category: Angriffe
  //
  // BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR'      => 'Verwundbar durch Bleichenbacher (ROBOT)',
  'BLEICHENBACHER_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Bleichenbacher Angriff(ROBOT), welche es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'BLEICHENBACHER_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  'BLEICHENBACHER_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/BLEICHENBACHER-VULNERABLE',
  //
  // CRIME_VULNERABLE
  'CRIME_VULNERABLE'            => 'Überprüfung auf die CRIME Schwachstelle',
  'CRIME_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR'      => 'Verwundbar durch CRIME',
  'CRIME_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch CRIME. Ein Angriff welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'CRIME_VULNERABLE_TIPS'       => 'Deaktivieren sie TLS-Compression auf ihrem Server',
  'CRIME_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/CRIME-VULNERABLE',
  //
  // HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR'      => 'Verwundbar durch Heartbleed',
  'HEARTBLEED_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch Heartbleed. Dadurch kann ein Angreifer sensible Daten aus dem Arbeisspeicher des Servers auslesen, wie z.B. geheime Schlüssel und Kundendaten.',
  'HEARTBLEED_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  'HEARTBLEED_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/HEARTBLEED-VULNERABLE',
  //
  // INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR'      => 'Verwundbar durch Ephemeral Invalid Curve Angriffe',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Ephemeral Invalid Curve Angriff. Dadurch kann ein Angreifer Verbindungen angreifen.',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/INVALID_CURVE_EPHEMERAL_VULNERABLE',
  //
  // INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR'      => 'Verwundbar durch Invalid Curve Angriffe',
  'INVALID_CURVE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Invalid Curve Angriff. Dadurch kann ein Angreifer den geheimen Schlüssel ihres Zertifikats stehlen.',
  'INVALID_CURVE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  'INVALID_CURVE_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/INVALID_CURVE_VULNERABLE',
  //
  // PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR'      => 'Verwundbar durch Padding Oracle Angriffe',
  'PADDING_ORACLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Padding-Oracle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'PADDING_ORACLE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  'PADDING_ORACLE_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/PADDING_ORACLE_VULNERABLE',
  //
  // POODLE_VULNERABLE
  'POODLE_VULNERABLE'            => 'Überprüfung auf die POODLE Schwachstelle',
  'POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch Poodle',
  'POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch einen Poodle Angriff, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'POODLE_VULNERABLE_TIPS'       => 'Deaktivieren Sie umgehend SSL3 auf ihrem Server!',
  'POODLE_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/POODLE_VULNERABLE',
  //
  // SWEET32_VULNERABLE
  'SWEET32_VULNERABLE'            => 'Überprüfung auf SWEET32 Schwachstelle',
  'SWEET32_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR'      => 'Verwundbar durch SWEET32',
  'SWEET32_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch SWEET32, welcher es einem Angreifer erlaubt teile der Kommunikation zu entschlüsseln falls über eine Verbindung große Mengen Daten transferiert werden.',
  'SWEET32_VULNERABLE_TIPS'       => 'Deaktivieren sie Blockchiffren mit einer Länge von 64Bit.',
  'SWEET32_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/SWEET32_VULNERABLE',
  //
  // TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE_SUCCESS'    => 'Nicht verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR'      => 'Verwundbar durch TLS-Poodle',
  'TLS_POODLE_VULNERABLE_ERROR_DESC' => 'Der Server ist verwundbar durch eine Variante des Poodle Angriffs auf TLS, welcher es einem Angreifer erlaubt die Kommunikation zu entschlüsseln.',
  'TLS_POODLE_VULNERABLE_TIPS'       => 'Spielen sie umgehend ein Update für ihre TLS Implementierung auf ihren Server ein.',
  'TLS_POODLE_VULNERABLE_LINK'       => 'https://siwecos.de/wiki/TLS_POODLE_VULNERABLE',
  //
  // Category: Generell
  //
  // HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED'            => 'Überprüfung auf HTTPS Unterstützung',
  'HTTPS_NOT_SUPPORTED_SUCCESS'    => 'Server spricht TLS',
  'HTTPS_NOT_SUPPORTED_ERROR'      => 'Server scheint kein TLS zu sprechen',
  'HTTPS_NOT_SUPPORTED_ERROR_DESC' => 'Der Server scheint kein TLS zu unterstützen. Dies bedeutet das sie keinerlei Verschlüsselung einsetzen um ihre Daten von ihnen und die ihrer Kunden zu schützen.',
  'HTTPS_NOT_SUPPORTED_TIPS'       => 'Aktivieren sie TLS.',
  'HTTPS_NOT_SUPPORTED_LINK'       => 'https://siwecos.de/wiki/HTTPS_NOT_SUPPORTED',
  //
  // HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE'            => 'Überprüfung der Reaktionszeit des Headers',
  'HTTPS_NO_RESPONSE_SUCCESS'    => 'Server antwortet',
  'HTTPS_NO_RESPONSE_ERROR'      => 'Server antwortet nicht',
  'HTTPS_NO_RESPONSE_ERROR_DESC' => 'Der Server scheint überhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?',
  'HTTPS_NO_RESPONSE_LINK'       => 'https://siwecos.de/wiki/HTTPS_NO_RESPONSE',
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
  // SCORE_info
  'SCORE_info'            => 'Info',
  'SCORE_info_SUCCESS'    => 'Server antwortet',
  'SCORE_info_ERROR'      => 'Server antwortet nicht',
  'SCORE_info_ERROR_DESC' => 'Der Server scheint überhaupt nicht zu antworten. Haben sie die Domain richtig eingegeben?',
  'SCORE_info_LINK'       => 'https://siwecos.de/wiki/HTTPS_NO_RESPONSE',
  //
  // SCORE_success
  'SCORE_success'            => 'Erfolgreich',
  //
  // SCORE_warning
  'SCORE_warning'            => 'Warnung',
  //
  // Category: HTTP-Security-Header-Scanner
  //
  // CONTENT_SECURITY_POLICY
  'CONTENT_SECURITY_POLICY'            => 'Überprüfung der Content Security Policy (CSP)',
  'CONTENT_SECURITY_POLICY_SUCCESS'    => 'Eine sichere Konfiguration der Content Security Policy (CSP) wurde gefunden.',
  'CONTENT_SECURITY_POLICY_ERROR'      => 'Content Security Policy Inaktiv',
  'CONTENT_SECURITY_POLICY_ERROR_DESC' => 'Test1 Die Content-Security-Policy ist ein Sicherheitskonzept, das primär das Einschleusen von Dateien unterbinden soll, aber noch einiges mehr kann. Es stellt quasi die Whitelist (Liste erlaubter Quellen) dar, von welchen [[Quellen]] Javascripte, Bilder, Schriftarten und andere Inhalte auf Ihrer Seite eingebunden werden dürfen.',
  'CONTENT_SECURITY_POLICY_TIPS'       => 'Verwenden Sie den CSP mit default-src \'none\' und ohne unsicher-eval oder unsicher-inline-Richtlinien. Mehr zu \'\'\'Content Security Policy\'\'\' (zu deutsch etwa "Richtlinie für die Sicherheit der Inhalte") finden Sie bei \'\'\'[https://wiki.selfhtml.org/wiki/Sicherheit/Content_Security_Policy SELFHTML>>]\'\'\'\n\n\'\'\'Beispiel:\'\'\'\n\n--snip\n<pre>\n# Download / Lade Inhalte nur von Seiten die explizit erlaubt sind\n# Beispiel das alles von der eigenen Domain erlaubt allerdings keinerlei Externas:\nHeader set Content-Security-Policy "default-src \'none\'; script-src \'self\'; connect-src \'self\'; img-src \'self\'; style-src \'self\';" </pre>\n--snap',
  'CONTENT_SECURITY_POLICY_LINK'       => 'https://siwecos.de/wiki/Content-Security-Policy',
  //
  // CONTENT_TYPE
  'CONTENT_TYPE'            => 'Überprüfung des Content-Header',
  'CONTENT_TYPE_SUCCESS'    => 'Die Content Type Angabe ist korrekt konfiguriert.',
  'CONTENT_TYPE_ERROR'      => 'Fehlende HTTP-Header Konfiguration',
  'CONTENT_TYPE_ERROR_DESC' => 'Der Content-Type ist eine Metaangabe, die im Kopfbereich der Webseite, dem sogenannten Header untergebracht wird. Durch diese Angaben im Metabereich wird der Zeichensatz und der Typ des Inhalts der Seite definiert. Diese Angaben sind wichtig, damit die Webseite in jedem [[Browser]] und auf jedem Computer einwandfrei dargestellt wird. Wenn ein Server ein Dokument an einen [https://de.wikipedia.org/wiki/User_Agent User-Agent] sendet (zum Beispiel zum [[Browser]]) ist es nützlich, im Content-Type-Feld des HTTP-Header die Art des Dateiformates zu hinterlegen. Diese Informationen deklarieren den [https://de.wikipedia.org/wiki/Internet_Media_Type MIME-Typ] und senden entsprechend die Zeichenkodierung des Dokuments wie text/html, text/plain, etc. an den Browser.',
  'CONTENT_TYPE_TIPS'       => 'Fügen sie den entsprechenden <meta> Tag hinzu.\n\n\'\'\'text/html; charset=utf-8\'\'\';\n\n\'\'\'--snip\'\'\'\n\n<pre><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></pre>\n\n\'\'\'—snap\'\'\'',
  'CONTENT_TYPE_LINK'       => 'https://siwecos.de/wiki/Content-Type',
  //
  // PUBLIC_KEY_PINS
  'PUBLIC_KEY_PINS'            => 'Überprüfung des Public Key Pinning (HPKP)',
  'PUBLIC_KEY_PINS_SUCCESS'    => 'Public-Key-Pins sind aktiviert',
  'PUBLIC_KEY_PINS_ERROR'      => 'Public-Key-Pins Inaktiv / Öffentliche Key-Pin deaktiviert',
  'PUBLIC_KEY_PINS_ERROR_DESC' => 'HTTP Public Key Pinning (HPKP) ist ein Sicherheitsmechanismus, der es über [[HTTPS]] gesicherte Webseiten ermöglicht, Identitätswechsel durch Angreifer zu widerstehen, die falsch ausgegebene oder anderweitig betrügerische [[Zertifikate]] verwenden. (Zum Beispiel können manchmal Angreifer die Zertifizierungsstellen beeinträchtigen und können dann Zertifikate für einen Web-Ursprung falsch ausstellen).',
  'PUBLIC_KEY_PINS_TIPS'       => 'pin-sha256="<HASH>"; pin-sha256="<HASH>"; max-age=2592000; includeSubDomains;\n\'\'\'HPKP aktivieren\'\'\' - Dieses Feature kann einfach aktiviert werden indem ein Public-Key-Pins HTTP-Header beim Aufruf der Seite über [[HTTPS]] zurückgegeben wird. ([https://developer.mozilla.org/de/docs/Web/Security/Public_Key_Pinning Weitere Infos]).\n\n\'\'\'--snip\'\'\'\n\n<pre>Public-Key-Pins: pin-sha256="base64=="; max-age=expireTime [; includeSubdomains][; report-uri="reportURI"]</pre>\n\n\'\'\'--snap\'\'\'',
  'PUBLIC_KEY_PINS_LINK'       => 'https://siwecos.de/wiki/Public-Key-Pins',
  //
  // STRICT_TRANSPORT_SECURITY
  'STRICT_TRANSPORT_SECURITY'            => 'Überprüfung des HSTS Schutzes',
  'STRICT_TRANSPORT_SECURITY_SUCCESS'    => 'Ihre Webseite ist ausschließlich über das sichere HTTPS-Protokoll erreichbar. Kommunikation zwischen Ihrer Webseite und den Besuchern kann nicht abgehört und manipuliert werden.',
  'STRICT_TRANSPORT_SECURITY_ERROR'      => 'HSTS Schutz Fehler',
  'STRICT_TRANSPORT_SECURITY_ERROR_DESC' => 'Die HSTS Header-Einstellung garantiert, dass der Verkehr zwischen Server und Client stets für die Kommunikation verschlüsselt werden muss. Sie teilt Webseiten-Besuchern mit, dass Ihre Webseite nur über eine verschlüsselte Verbindung ([[HTTPS]]) erreichbar ist und der [[Browser]] diese Einstellung für längere Zeit zwischenspeichern kann. Die Verbindung findet somit immer nur über eine sichere [[HTTPS|HTTPS-Verbindung]] und nie über das unsichere [[HTTP|HTTP-Protokoll]] statt.',
  'STRICT_TRANSPORT_SECURITY_TIPS'       => 'max-age=63072000; includeSubdomains;\nHTTP Strict Transport Security (HSTS) ist ein einfach zu integrierender Web-Security-Policy-Mechanismus.\n\n\'\'\'--snip\'\'\'<pre>\n# HTTP Strict Transport Security (HSTS) aktivieren\n# Pflichtangabe: „max-age“\n# Optional: „includeSubDomains“</pre>\n   \'\'\'Header set Strict-Transport-Security „max-age=31556926, includeSubDomains“\'\'\'\n\'\'\'--snap\'\'\'',
  'STRICT_TRANSPORT_SECURITY_LINK'       => 'https://siwecos.de/wiki/Strict-Transport-Security',
  //
  // X_CONTENT_TYPE_OPTIONS
  'X_CONTENT_TYPE_OPTIONS'            => 'Überprüfung des X-Content-Type Headers',
  'X_CONTENT_TYPE_OPTIONS_SUCCESS'    => 'Der Header ist korrekt gesetzt.',
  'X_CONTENT_TYPE_OPTIONS_ERROR'      => 'X-Content-Type Header fehlt',
  'X_CONTENT_TYPE_OPTIONS_ERROR_DESC' => 'Die X-Content-Type Einstellungen im Header verhindern, dass der [[Browser]] Dateien als etwas anderes interpretiert, als vom Inhaltstyp im [[HTTP|HTTP-Header]] deklariert wurde. Dabei wird die Belastung durch sog. Drive-by-Download-Attacken reduziert. Die Headereinstellungen sind hier nicht gesetzt.',
  'X_CONTENT_TYPE_OPTIONS_TIPS'       => 'nosniff; <br><br>\n\'\'\'Beispielcode einer .htaccess auf einem Apache Webserver.\'\'\'<br>\n\'\'\'--snip\'\'\'<pre>\n<IfModule mod_headers.c>\n   # HTTP Strict Transport Security (HSTS) aktivieren\n   Header set Strict-Transport-Security „max-age=31556926, includeSubDomains“\n   # Avoid Clickjacking, Seite darf nur in frame oder iframe geöffnet werden auf eigener Domain\n   Header append X-Frame-Options „SAMEORIGIN“\n   # Turn on XSS prevention tools, activated by default in IE and Chrome\n   Header set X-XSS-Protection „1; mode=block“</pre>\n   # prevent mime based attacks like drive-by download attacks, IE and Chrome\n   \'\'\'Header set X-Content-Type-Options „nosniff“\'\'\'\n<pre></IfModule></pre>',
  'X_CONTENT_TYPE_OPTIONS_LINK'       => 'https://siwecos.de/wiki/X-Content-Type-Options',
  //
  // X_FRAME_OPTIONS
  'X_FRAME_OPTIONS'            => 'Überprüfung der X-Frame Optionen',
  'X_FRAME_OPTIONS_SUCCESS'    => 'Der Header ist korrekt gesetzt und verbessert den Schutz Ihrer Webseite gegen Clickjacking-Angriffe.',
  'X_FRAME_OPTIONS_ERROR'      => 'X-Frame Optionen nicht gesetzt / Clickjacking Schutz',
  'X_FRAME_OPTIONS_ERROR_DESC' => 'Die gesetzten X-Frame Optionen im Header der Webseite verbessern den Schutz von Web-Anwendungen gegen [https://de.wikipedia.org/wiki/Clickjacking Clickjacking]. Durch Setzen dieser Option wird dem [[Browser]] mitgeteilt, ob Inhalte von anderen Webseiten in \'\'frames\'\' (im eingebetteten Rahmen) auf der Seite dargestellt werden dürfen, oder anderen Webseiten anzeigt werden darf. Der Header ist nicht gesetzt oder enthält Platzhalter.',
  'X_FRAME_OPTIONS_TIPS'       => 'Im Header entsprechend den Bedürfnissen setzen. Verwenden Sie keine "allow-from: * "; Die \'\'\'X-Frame-Options\'\'\' im [[HTTP]] Header kann verwendet werden, um zu bestimmen, ob ein aufrufender [[Browser]] die Zielseite in einem <frame>, <iframe> oder <object> rendern bzw. einbetten darf. Webseiten können diesen Header verwenden, um Clickjacking Attacken abzuwehren, indem sie unterbinden, dass ihr Content in fremden Seiten eingebettet wird.\n\n\'\'\'Beispielcode einer .htaccess auf einem Apache Webserver.\'\'\'\n\n\'\'\'--snip\'\'\'<pre>\n<IfModule mod_headers.c>\n   # HTTP Strict Transport Security (HSTS) aktivieren\n   Header set Strict-Transport-Security „max-age=31556926, includeSubDomains“\n   # Avoid Clickjacking, Seite darf nur in frame oder iframe geöffnet werden auf eigener Domain</pre>\n   \'\'\'Header append X-Frame-Options „SAMEORIGIN“\'\'\'\n   <pre># Turn on XSS prevention tools, activated by default in IE and Chrome\n   Header set X-XSS-Protection „1; mode=block“\n   # prevent mime based attacks like drive-by download attacks, IE and Chrome\n   Header set X-Content-Type-Options „nosniff“\n</IfModule><br></pre>\n\'\'\'--snap\'\'\'',
  'X_FRAME_OPTIONS_LINK'       => 'https://siwecos.de/wiki/X-Frame-Options',
  //
  // X_XSS_PROTECTION
  'X_XSS_PROTECTION'            => 'Überprüfung des Cross-Site-Scripting Filters',
  'X_XSS_PROTECTION_SUCCESS'    => 'Der Cross-Site-Scripting (XSS) -Schutz des Webbrowsers ist auf Ihrer Seite aktiviert.',
  'X_XSS_PROTECTION_ERROR'      => 'Cross-Site-Scripting Schutz Header inaktiv',
  'X_XSS_PROTECTION_ERROR_DESC' => 'Dieser Header konfiguriert den [[Cross-Site-Scripting]] integrierten XSS-Schutz in den meisten aktuellen Browsern (Internet Explorer, Chrome und Safari). Der Header ist nicht gesetzt.',
  'X_XSS_PROTECTION_TIPS'       => '1; mode=block\n\n\'\'\'Beispielcode einer .htaccess auf einem Apache Webserver.\'\'\'\n\n\'\'\'--snip\'\'\'<br><pre>\n<IfModule mod_headers.c>\n   # HTTP Strict Transport Security (HSTS) aktivieren\n   Header set Strict-Transport-Security „max-age=31556926, includeSubDomains“\n   # Avoid Clickjacking, Seite darf nur in frame oder iframe geöffnet werden auf eigener Domain\n   Header append X-Frame-Options „SAMEORIGIN“</pre>\n   # Turn on XSS prevention tools, activated by default in IE and Chrome\n   \'\'\'Header set X-XSS-Protection „1; mode=block“\'\'\'\n   <pre># prevent mime based attacks like drive-by download attacks, IE and Chrome\n   Header set X-Content-Type-Options „nosniff“\n</IfModule></pre>\n\'\'\'--snap\'\'\'',
  'X_XSS_PROTECTION_LINK'       => 'https://siwecos.de/wiki/X-Xss-Protection',
  //
  // Category: Information-Leakage-Scanner
  //
  // CMS
  'CMS'            => 'Überprüfung auf Offenlegung der verwendeten CMS',
  'CMS_SUCCESS'    => 'Das verwendete CMS kann nicht detektiert werden.',
  'CMS_ERROR'      => 'Content Management System (CMS)- erkennbar',
  'CMS_ERROR_DESC' => 'Das Verwendete Content Management System kann identifiziert werden. Diese Information könnte von einem Angreifer genutzt werden um gezielt nach Schwachstellen für dieses spezielle CMS zu suchen.',
  'CMS_TIPS'       => 'Halten Sie installierte Webserver und Content Management System immer auf dem aktuellsten Stand. Manche CMS-System erlauben es Version Informationen zu verstecken. Nutzen sie dieses Feature falls verfügbar.',
  'CMS_LINK'       => 'https://siwecos.de/wiki/Cms',
  //
  // CMS_PLUGINS
  'CMS_PLUGINS'            => 'Überprüfung auf unsichere CMS-Plugins',
  'CMS_PLUGINS_SUCCESS'    => 'CMS-Plugins werden erfolgreich verborgen.',
  'CMS_PLUGINS_ERROR'      => 'CMS Plugin detektiert',
  'CMS_PLUGINS_ERROR_DESC' => 'Es wurde ein von ihrem CMS-System genutztes Plugin entdeckt. Ein Angreifer könnte diese Information nutzen um gezielt nach Schwachstellen für ihre Website zu nutzen.',
  'CMS_PLUGINS_TIPS'       => 'Plugins sollten auf jene beschränkt werden, die tatsächlich benötigt werden. Damit kann die Angriffsfläche erheblich reduzieren werden. Zudem sollten installierte Plugins immer auf dem aktuellsten Stand gehalten werden.',
  'CMS_PLUGINS_LINK'       => 'https://siwecos.de/wiki/Plugin',
  //
  // EMAIL_ADDRESS
  'EMAIL_ADDRESS'            => 'Überprüfung auf auslesbare Email-Daten',
  'EMAIL_ADDRESS_SUCCESS'    => 'Keine Email-Adresse gefunden.',
  'EMAIL_ADDRESS_ERROR'      => 'Auslesbare Email-Adresse',
  'EMAIL_ADDRESS_ERROR_DESC' => 'Ihre Webseite enthält mindestens eine maschinell auslesbare Email-Adresse. Dieses ermöglicht es Dritten, die hinterlegten Email-Adressen automatisiert durch WebCrawler zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufügen.',
  'EMAIL_ADDRESS_TIPS'       => 'Hinterlegen Sie Ihre Kontaktadressen, z.B. im Impressum wie folgt: mail at siwecos.de / mail @ siwecos.de oder hinterlegen Sie die Information in einer Grafik-Datei.',
  'EMAIL_ADDRESS_LINK'       => 'https://siwecos.de/wiki/Email',
  //
  // JS_LIB
  'JS_LIB'            => 'Überprüfung auf unsichere JavaScript-Bibliotheken',
  'JS_LIB_SUCCESS'    => 'Die JavaScript-Bibliotheken sind nach dem aktuellen Stand nicht verwundbar.',
  'JS_LIB_ERROR'      => 'Unsichere JavaScript-Bibliothek gefunden.',
  'JS_LIB_ERROR_DESC' => 'Es wurde eine JavaScript-Bibliothek gefunden für dessen Version eine Schwachstelle existiert',
  'JS_LIB_TIPS'       => 'Updaten sie ihre verwendeten Javascript Bibliotheken.',
  'JS_LIB_LINK'       => 'https://siwecos.de/wiki/Javascript',
  //
  // PHONE_NUMBER
  'PHONE_NUMBER'            => 'Überprüfung auf auslesbare Telefonnummern',
  'PHONE_NUMBER_SUCCESS'    => 'Telefonnummern wurden nicht gefunden.',
  'PHONE_NUMBER_ERROR'      => 'Telefonnummer detektiert',
  'PHONE_NUMBER_ERROR_DESC' => 'Es wurde eine Telefonnummer gefunden. Ein Angreifer könnte diese Information nutzen, um Mitarbeiter zu manipulieren und an Informationen gelangen die Geheim bleiben sollten.',
  'PHONE_NUMBER_TIPS'       => 'Die veröffentlichten Telefonnummern sollten auf jene beschränkt werden, die auch tatsächlich für die Kommunikation mit Kunden gedacht sind. Außerdem sollte der telefonierende Mitarbeiter sich der Gefahr von Social Engineering Angriffen bewusst sein und die Vorgehensweise von Social Engineers kennen.',
  'PHONE_NUMBER_LINK'       => 'https://siwecos.de/wiki/Plugin',
  //
  // Category: Initiative-S Scanner
  //
  // MALWARE
  'MALWARE'            => 'Überprüfung auf mögliche Malware',
  'MALWARE_SUCCESS'    => 'Ihre Domain wurde in keiner uns bekannten Malware Liste gefunden.',
  'MALWARE_ERROR'      => 'Ihre Domain wurde in Malware Listen gefunden',
  'MALWARE_ERROR_DESC' => 'Malware bezeichnet Software, die dem Benutzer und natürlich in erster Linie dem Computer Schaden zufügen kann. Malware bezeichnet dabei alle Arten von schadhaften Programmen wie etwa Viren, Trojaner, Spyware, Dialer, Dropper, Rootkits und Keylogger.',
  'MALWARE_TIPS'       => '\'\'\'<span style="color:#c31622"> Nehmen Sie die Webseite offline!<span>\'\'\'\n\nBei einem Aufruf der Seite besteht die Gefahr, dass Sie den aufrufenden PC mit Schadsoftware infizieren. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. Sie kommen auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n\n\'\'\'- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. \'\'\'<br>\n\nÜberprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n\n\'\'\'- Ändern Sie Ihre Zugangsdaten!\'\'\'<br>\n\'\'\'- Webfrontend (Hosting-Vertrag, Content-Management-System)\'\'\'<br>\n\'\'\'- FTP-, SSH-Zugänge\'\'\'<br>\n\'\'\'- Datenbank-Passwörter\'\'\'<br>\n\nSpielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n\n\'\'\' - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.\'\'\'<br>\n\nÜberprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite [https://www.botfrei.de botfrei.de] finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( https://www.botfrei.de/de/eucleaner/index.html )',
  'MALWARE_LINK'       => 'https://siwecos.de/wiki/Malware-Inhalte',
  //
  // PHISHING
  'PHISHING'            => 'Überprüfung auf mögliche Phishing-Inhalte',
  'PHISHING_SUCCESS'    => 'Ihre Domain wurde in keiner uns bekannten Phising Liste gefunden.',
  'PHISHING_ERROR'      => 'Ihre Domain wurde in Phising Listen gefunden',
  'PHISHING_ERROR_DESC' => 'Beim Phishing wird in der Regel trickreich versucht, sensible persönliche Daten wie Passwörter, Kreditkartennummern und persönliche Daten des Besuchers der Seite zu entwenden. Dabei versenden Kriminelle üblicherweise Spam-E-Mails. Diese E-Mails enthalten u.a. Links zu einer Phishing-Seite, die sich als legitime Webseite ausgibt.',
  'PHISHING_TIPS'       => '\'\'\'<span style="color:#c31622"> Nehmen Sie die Webseite offline!<span>\'\'\'\n\nEs ist weiterhin möglich, dass Sie mit der Webseite Phishing-Inhalte zu Verfügung stellen und Kriminelle persönliche Daten darüber sammeln. Auch vermeiden Sie damit, dass Google Ihre Webseite aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n\n\'\'\'- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. \'\'\'<br>\n\nÜberprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n\n\'\'\'- Ändern Sie Ihre Zugangsdaten!\'\'\'<br>\n\'\'\'- Webfrontend (Hosting-Vertrag, Content-Management-System)\'\'\'<br>\n\'\'\'- FTP-, SSH-Zugänge\'\'\'<br>\n\'\'\'- Datenbank-Passwörter\'\'\'<br>\n\nSpielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n\n\'\'\' - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.\'\'\'<br>\n\nÜberprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite [https://www.botfrei.de botfrei.de] finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( https://www.botfrei.de/de/eucleaner/index.html )',
  'PHISHING_LINK'       => 'https://siwecos.de/wiki/Phishing-Inhalte',
  //
  // SPAM
  'SPAM'            => 'Überprüfung auf mögliche Spam-Inhalte',
  'SPAM_SUCCESS'    => 'Ihre Domain wurde in keiner uns bekannten Spam Liste gefunden.',
  'SPAM_ERROR'      => 'Ihre Domain wurde in Spam Listen gefunden',
  'SPAM_ERROR_DESC' => 'Als Spam bezeichnet man ungewollte und zum Teil unseriöse Werbung im E-Mail Postfach (z.B. Viagra-Werbung, Medikamente, Versicherung und Kreditvergleiche). Diese Werbungen werden massenhaft verschickt bzw. können aber auch zielgerichtet verschickt werden. In der Regel verschleiern die Absender ihre wahre Identität in der E-Mail und versuchen Sie zu täuschen.',
  'SPAM_TIPS'       => '\'\'\'<span style="color:#c31622"> Nehmen Sie die Webseite offline!<span>\'\'\'\n\nUm den Besuch Ihrer infizierten Webseite zu vermeiden bzw. damit Google Ihre Webseite nicht aus dem Index nimmt, was ein eventuelles positives Ranking annullieren würde, schalten Sie die Webseite offline. So kommen Sie auch einer eventuellen Sperre Ihrer Webseite seitens Ihres Providers/Hosters zuvor.\n\nUm zu prüfen ob die Seite über diverse Spam-Merkmale verfügt, rufen Sie die Seite im Browser auf, klicken über die rechte Maustaste den "Quelltext anzeigen". In diesem Fenster können Sie Ihren Quellcode mit Drücken der Tasten \'\'\'Strg+f\'\'\' (suchen) auf gängige Online-Betrügereien durch Werbung für Medikamente oder dubiose Kreditgeschäft überprüfen.\n\n\'\'\'Einige Suchvorschläge\'\'\':<br>\n- „payday“<br>\n- „Pharma“<br>\n- „Viagra“<br>\n- „Cialis“<br><br>\n\'\'\'- Stellen Sie fest, wie und wann es Fremden möglich war, auf Ihre Domain zuzugreifen. \'\'\'<br>\n\nÜberprüfen Sie Ihre Logdateien auf unberechtigte Zugriffe von unbekannten Quell-IP-Adressen. Als Ausgangspunkt  Ihrer Recherche könnte Ihnen der Zeitstempel der manipulierten, bzw. hochgeladenen Datei dienen und einen Hinweis auf den Zeitpunkt der Attacke und das sogenannte Einfallstor geben.\n\n\'\'\'- Ändern Sie Ihre Zugangsdaten!\'\'\'<br>\n\'\'\'- Webfrontend (Hosting-Vertrag, Content-Management-System)\'\'\'<br>\n\'\'\'- FTP-, SSH-Zugänge\'\'\'<br>\n\'\'\'- Datenbank-Passwörter\'\'\'<br>\n\nSpielen Sie ein schadcodefreies Backup wieder ein!\nLöschen Sie hierzu sämtliche Dateien auf Ihrem Webspace. Damit stellen Sie sicher, dass Sie keine Fremddateien, die den Angreifern als "Hintertüren" dienen aus der vormals kompromittierten Umgebung übernehmen.\nÜberprüfen Sie vor der Wiederherstellung, ob Ihr Backup bereits den von uns gefundenen Schadcode beinhaltet und greifen Sie bei Bedarf auf eine noch ältere Sicherung zurück.\nSollte das Backup "schadcodefrei" sein, stellen Sie dieses wieder her und führen danach die Updates im System durch. Erst dann stellen Sie die Webseite wieder online.\n\n\'\'\' - Sollten Sie keine Sicherung Ihres Internetauftrittes besitzen, ziehen Sie eine komplette Neuinstallation in Betracht. Manuelle Bereinigungen nehmen in der Regel sehr viel Zeit in Anspruch und sollten nur von Fachpersonal durchgeführt werden.\'\'\'<br>\n\nÜberprüfen Sie Ihre lokalen Rechner auf Schadsoftware! Unter der Webseite [https://www.botfrei.de botfrei.de] finden Sie dazu Hilfestellungen und Programme. \nMit Hilfe des DE-Cleaners können Sie Ihren PC von verschiedenen Schadprogrammen säubern. ( https://www.botfrei.de/de/eucleaner/index.html )',
  'SPAM_LINK'       => 'https://siwecos.de/wiki/Spam-Inhalte',
  //
  // Category: Protokollversionen
  //
  // PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2'            => 'Überprüfung auf veraltetes SSL2 Protokoll',
  'PROTOCOLVERSION_SSL2_SUCCESS'    => 'Veraltete Protokollversion SSL2 nicht unterstützt',
  'PROTOCOLVERSION_SSL2_ERROR'      => 'Veraltete Protokollversion SSL2 unterstützt',
  'PROTOCOLVERSION_SSL2_ERROR_DESC' => 'Der Server unterstützt die veraltete Protokollversion SSL2, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.',
  'PROTOCOLVERSION_SSL2_TIPS'       => '[[Transport Layer Security|TLS-Verschlüsselung]] gilt heute als Standard für den Einsatz bei [[HTTPS]] eingesetzt, Sie sollten deshalb auf den Einsatz von [[SSL|SSL2]] verzichten. Weitere Informationen finden Sie hier: [https://www.siwecos.de/wiki/SSL SSL]',
  'PROTOCOLVERSION_SSL2_LINK'       => 'https://siwecos.de/wiki/PROTOCOLVERSION_SSL2',
  //
  // PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3'            => 'Überprüfung auf veraltetes SSL3 Protokoll',
  'PROTOCOLVERSION_SSL3_SUCCESS'    => 'Veraltete Protokollversion SSL3 nicht unterstützt',
  'PROTOCOLVERSION_SSL3_ERROR'      => 'Veraltete Protokollversion SSL3 unterstützt',
  'PROTOCOLVERSION_SSL3_ERROR_DESC' => 'Der Server unterstützt die veraltete Protokollversion SSL3, welche als höchst unsicher gilt. Sie gefähren mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks.',
  'PROTOCOLVERSION_SSL3_TIPS'       => 'TLS-Verschlüsselung gilt heute als Standard für den Einsatz bei HTTPS eingesetzt, Sie sollten deshalb auf den Einsatz von SSL3 verzichten. Weitere Informationen finden Sie hier: [https://www.siwecos.de/wiki/SSL SSL]',
  'PROTOCOLVERSION_SSL3_LINK'       => 'https://siwecos.de/wiki/PROTOCOLVERSION_SSL3',
  //
  // PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13'            => 'Überprüfung auf Einsatz  des TLS1.3 Protokoll',
  'PROTOCOLVERSION_TLS13_SUCCESS'    => 'TLS 1.3 nicht unterstützt',
  'PROTOCOLVERSION_TLS13_ERROR'      => 'Moderne TLS 1.3 unterstützt',
  'PROTOCOLVERSION_TLS13_ERROR_DESC' => 'Der Server unterstützt die neueste TLS Protokollversion. Diese befindet sich noch im Standartisierungsprozess. Sollten sie nicht wissen was dies bedeutet, können sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützten und TLS 1.3 sich noch in der Entwicklung befindet.',
  'PROTOCOLVERSION_TLS13_TIPS'       => 'Es besteht kein Handlungsbedarf.',
  'PROTOCOLVERSION_TLS13_LINK'       => 'https://siwecos.de/wiki/PROTOCOLVERSION_TLS13',
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
  'CIPHERSUITEORDER_ENFORCED_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass die Verschlüsselungsmethodik des Clients (Webseiten-Besuchers) bevorzugt wird, statt die Ihres Webservers. Server sollten die Auswahl der Verschlüsselungsmethoden nicht ihren Kunden überlassen, sondern aktiv starke Verbindungen auswählen.',
  'CIPHERSUITEORDER_ENFORCED_TIPS'       => 'Konfigurieren Sie Ihren Webservern so, dass der Webserver die Verschlüsselungsmethodik bei der Kommunikation zwischen Ihrer Webseite und dem Webbrowser des Besuchers bestimmt Mehr Infos:',
  'CIPHERSUITEORDER_ENFORCED_LINK'       => 'https://siwecos.de/wiki/CIPHERSUITEORDER_ENFORCED',
  //
  // CIPHERSUITE_ANON
  'CIPHERSUITE_ANON'            => 'Überprüfung auf anonyme Verschlüsselungsmethodik',
  'CIPHERSUITE_ANON_SUCCESS'    => 'Kein Anonymer Schlüsselaustausch unterstützt',
  'CIPHERSUITE_ANON_ERROR'      => 'Anonymer Schlüsselaustausch unterstützt',
  'CIPHERSUITE_ANON_ERROR_DESC' => 'Ihr Webserver/Ihre Webseite ist so konfiguriert, dass eine anonyme Verschlüsselungsmethodik ([[Cipher Suite]]) ohne Authentikation bei der Verbindung erfolgt. Dies ermöglicht [[Man-in-the-middle|Man-in-the-Middle Attacken]].',
  'CIPHERSUITE_ANON_TIPS'       => 'Deaktivieren Sie die Unterstützung des Anonymen Schlüsselaustauschs in der  Verschlüsselungsmethodik.',
  'CIPHERSUITE_ANON_LINK'       => 'https://siwecos.de/wiki/CIPHERSUITE_ANON',
  //
  // CIPHERSUITE_DES
  'CIPHERSUITE_DES'            => 'Überprüfung auf DES Verschlüsselungsmethodik',
  'CIPHERSUITE_DES_SUCCESS'    => 'Keine veraltete DES Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_DES_ERROR'      => 'Veraltete DES Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_DES_ERROR_DESC' => 'Ihr Webserver / Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES  (Ciphersuites) unterstützt. Dies ermöglicht Man-in-the-Middle Attacken.',
  'CIPHERSUITE_DES_TIPS'       => 'Deaktivieren Sie die Unterstützung der DES Verschlüsselungsmethodik',
  'CIPHERSUITE_DES_LINK'       => 'https://siwecos.de/wiki/CIPHERSUITE_DES',
  //
  // CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT'            => 'Überprüfung auf geschwächte kryptographische Funktionen',
  'CIPHERSUITE_EXPORT_SUCCESS'    => 'Keine schwache EXPORT Verschlüsselung unterstützt',
  'CIPHERSUITE_EXPORT_ERROR'      => 'Schwache Export Verschlüsselung unterstützt',
  'CIPHERSUITE_EXPORT_ERROR_DESC' => 'Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass sich vorsätzlich geschwächte kryptographische Funktionen ([[Cipher Suite|Cipher Suites]]) nutzen lassen. Dies ermöglicht [[Man-in-the-Middle|Man-in-the-Middle Attacken]].',
  'CIPHERSUITE_EXPORT_TIPS'       => 'Deaktivieren Sie die Unterstützung von EXPORT Verschlüsselungsmethoden.',
  'CIPHERSUITE_EXPORT_LINK'       => 'https://siwecos.de/wiki/CIPHERSUITE_EXPORT',
  //
  // CIPHERSUITE_NULL
  'CIPHERSUITE_NULL'            => 'Überprüfung auf NULL-Chiffren',
  'CIPHERSUITE_NULL_SUCCESS'    => 'Keine unsicheren Null Chiffren unterstützt',
  'CIPHERSUITE_NULL_ERROR'      => 'Unsichere NULL Chiffren unterstützt',
  'CIPHERSUITE_NULL_ERROR_DESC' => 'Ihr Webserver/ Ihre Webseite ist so konfiguriert, dass keine Verschlüsselungsmethodik ([[Cipher Suite]]) unterstützt wird. Dies ermöglicht [[Man-in-the-middle|Man-in-the-Middle Attacken]].',
  'CIPHERSUITE_NULL_TIPS'       => 'Deaktivieren Sie die Unterstützung von NULL Verschlüsselungsmethoden.',
  'CIPHERSUITE_NULL_LINK'       => 'https://siwecos.de/wiki/CIPHERSUITE_NULL',
  //
  // CIPHERSUITE_RC4
  'CIPHERSUITE_RC4'            => 'Überprüfung auf RC4 Verschlüsselungsmethodik',
  'CIPHERSUITE_RC4_SUCCESS'    => 'Keine veraltete RC4 Verschlüsselungsmethodik unterstützt',
  'CIPHERSUITE_RC4_ERROR'      => 'Veraltete RC4 Verschlüsselungsmethodik\nunterstützt',
  'CIPHERSUITE_RC4_ERROR_DESC' => 'Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion RC4 Verschlüsselungsmethodik ([[Ciper Suite|Cipher Suites]]) weiterhin unterstützt. Dies ermöglicht [[Man-in-the-Middle|Man-in-the-Middle Attacken]].',
  'CIPHERSUITE_RC4_TIPS'       => 'Deaktivieren Sie die Unterstützung der RC4 Verschlüsselungsmethodik.',
  'CIPHERSUITE_RC4_LINK'       => 'https://siwecos.de/wiki/CIPHERSUITE_RC4',
  //
  // Category: XSS-Scanner
  //
  // HAS_SINKS
  'HAS_SINKS'            => 'Überprüfung des JavaScripts',
  'HAS_SINKS_SUCCESS'    => 'Es wurden automatisiert keine unsicheren Codestellen gefunden, die auf eine Verwundbarkeit Ihrer Webseite hindeuten.',
  'HAS_SINKS_ERROR'      => 'Unsichere JavaScript-Methoden',
  'HAS_SINKS_ERROR_DESC' => 'Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der  unter bestimmten Voraussetzungen auf eine DOM-basierende Cross-Site Scripting Anfälligkeit hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen und es Hackern ermöglichen, z.B. Viren oder Trojaner unbemerkt dort zu hinterlegen.',
  'HAS_SINKS_TIPS'       => 'Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.',
  'HAS_SINKS_LINK'       => 'https://siwecos.de/wiki/Sinks',
  //
  // HAS_SOURCES
  'HAS_SOURCES'            => 'Überprüfung der Eingabe-Einstellung der Webseite',
  'HAS_SOURCES_SUCCESS'    => 'Es wurden automatisiert keine unsicheren Eingabemöglichkeiten gefunden, die auf einer Verwundbarkeit Ihrer Webseite hindeuten.',
  'HAS_SOURCES_ERROR'      => 'Unsichere Quelle',
  'HAS_SOURCES_ERROR_DESC' => 'Es wurde eine Eingabemöglichkeit gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte. Mindestens eine potentielle Quelle wurde auf der gescannten URL gefunden.',
  'HAS_SOURCES_TIPS'       => 'Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die Schwachstellen auf der Webseite zu bestätigen.',
  'HAS_SOURCES_LINK'       => 'https://siwecos.de/wiki/Sources',
  //
  // Category: Zertifikate
  //
  // CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED'            => 'Überprüfung der Zertifikat Laufzeit',
  'CERTIFICATE_EXPIRED_SUCCESS'    => 'Zertifikat nicht abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR'      => 'Zertifikat abgelaufen',
  'CERTIFICATE_EXPIRED_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr [[Zertifikate|Server-Zertifikat]] abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über [[HTTPS]] aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.',
  'CERTIFICATE_EXPIRED_TIPS'       => 'Dieses Problem lässt sich lösen, indem Sie das eingesetzte [[Zertifikate|Zertifikat]] erneuern oder ein neues [[Zertifikate|Zertifikat]] installieren. Wie Sie Zertifikate verlängern können, lesen Sie hier: [https://www.siwecos.de/wiki/Zertifikate#Was_tun.2C_wenn_ein_SSL-Zertifikat_abgelaufen_ist.3F Zertifikat abgelaufen]',
  'CERTIFICATE_EXPIRED_LINK'       => 'https://siwecos.de/wiki/CERTIFICATE_EXPIRED',
  //
  // CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER'            => 'Überprüfung der Zertifikats Übermittlung',
  'CERTIFICATE_NOT_SENT_BY_SERVER_SUCCESS'    => 'Server sendet ein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR'      => 'Server sendet kein Zertifikat',
  'CERTIFICATE_NOT_SENT_BY_SERVER_ERROR_DESC' => 'Der Server hat kein [[Zertifikate|Zertifikat]] gesendet. Dies ist ungewöhnlich und sollte eigentlich nicht vorkommen. Der Server sollte seine [[Transport_Layer_Security|TLS-Konfiguration]] überprüfen und ggfs. [[CIPHERSUITE_ANON|anonyme Ciphersuites]] ausschalten.',
  'CERTIFICATE_NOT_SENT_BY_SERVER_TIPS'       => 'Aktualisieren Sie dringend die von Ihnen eingesetzte [[Transport_Layer_Security|TLS-Implementierung]]. Moderne Software erlaubt diese Art der Konfiguration nicht mehr.',
  'CERTIFICATE_NOT_SENT_BY_SERVER_LINK'       => 'https://siwecos.de/wiki/CERTIFICATE_NOT_SENT_BY_SERVER',
  //
  // CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET'            => 'Überprüfung der Zertifikat Gültigkeit',
  'CERTIFICATE_NOT_VALID_YET_SUCCESS'    => 'Zertifikat ist schon gültig',
  'CERTIFICATE_NOT_VALID_YET_ERROR'      => 'Zertifikat noch nicht gültig',
  'CERTIFICATE_NOT_VALID_YET_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr [[Zertifikate|Server-Zertifikat]] noch nicht gültig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt wird. Sollte ein Nutzer Ihre Webseite über [[HTTPS]] aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt.',
  'CERTIFICATE_NOT_VALID_YET_TIPS'       => 'Deaktivieren Sie das [[Zertifikate|Zertifikat]] solange es \'\'\'noch nicht\'\'\' gültig ist. Ihre Webseite ist dann zwar nicht zertifiziert, jedoch erhalten Besucher zumindest keine Warnmeldung beim Aufruf Ihrer Webseite. Alternativ bietet sich die Möglichkeit an, Ihr altes [[Zertifikate|Zertifikat]] einzusetzen, so lange dies noch gültig ist. Wie Sie [[Zertifikate|Zertifikate]] verlängern können, lesen Sie hier: [[CERTIFICATE_EXPIRED|Zertifikat abgelaufen]].',
  'CERTIFICATE_NOT_VALID_YET_LINK'       => 'https://siwecos.de/wiki/CERTIFICATE_NOT_VALID_YET',
  //
  // CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION'            => 'Überprüfung der Zertifikat Verschlüsselungsstärke',
  'CERTIFICATE_WEAK_HASH_FUNCTION_SUCCESS'    => 'Starker Hash-Algorithmus',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR'      => 'Schwacher Hash-Algorithmus',
  'CERTIFICATE_WEAK_HASH_FUNCTION_ERROR_DESC' => 'Die Meldung bedeutet, dass Ihr Server-Zertifikat einen schwachen Hash-Algorithmus besitzt. Es stellt möglicherweise ein leichtes Ziel für Hacker-Angriffe dar. Ein Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen Hash-Algorithmus jedoch nicht.',
  'CERTIFICATE_WEAK_HASH_FUNCTION_TIPS'       => 'Um dieses Problem zu lösen sollten sie ein neues Zertifikat mit einer sicheren Hash-Funktion installieren. Wie Sie ein sicheres Zertifikat bekommen, lesen Sie hier: [[Zertifikate#Wie_wird_ein_SSL-Zertifikat_installiert.3F|Zertifikat installieren]].',
  'CERTIFICATE_WEAK_HASH_FUNCTION_LINK'       => 'https://siwecos.de/wiki/CERTIFICATE_WEAK_HASH_FUNCTION',
  //
  // CERTIFICATE_WEAK_SIGN_ALGO
  'CERTIFICATE_WEAK_SIGN_ALGO'            => 'Überprüfung der Zertifikat Verschlüsselung',
  //
  // CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS
  'CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS'            => 'Überprüfung der Zertifikat Verschlüsselung',

];
