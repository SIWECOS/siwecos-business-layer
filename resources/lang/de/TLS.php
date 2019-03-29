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

  // These are the de texts for
  'SCANNER_NAME' => "TLS Scanner",

  // Test: BLEICHENBACHER_VULNERABLE
  'BLEICHENBACHER_VULNERABLE_HEADLINE'      => "Überprüfung auf Bleichenbacher Schwachstelle <span class=\"promarker\"></span>",
  'BLEICHENBACHER_VULNERABLE_POSITIVE'      => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Bleichenbacher-Schwachstelle/DE\" title=\"Bleichenbacher-Schwachstelle/DE\">Bleichenbacher</a>.",
  'BLEICHENBACHER_VULNERABLE_NEGATIVE'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Bleichenbacher-Schwachstelle/DE\" title=\"Bleichenbacher-Schwachstelle/DE\">Bleichenbacher</a>.",
  'BLEICHENBACHER_VULNERABLE_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Bleichenbacher-Schwachstelle/DE\" title=\"Bleichenbacher-Schwachstelle/DE\">Bleichenbacher</a> Angriff. Hierbei kann die Kommunikation entschlüsselt und bei der Übertragung können Nutzereingaben wie Passwörter im Klartext gelesen werden. </p>",
  'BLEICHENBACHER_VULNERABLE_SOLUTION_TIPS' => "<p>Überprüfen Sie Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> bzw. spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein. </p>",
  'BLEICHENBACHER_VULNERABLE_LINK'          => "https://siwecos.de/wiki/Bleichenbacher-Schwachstelle/DE",

  // Test: CERTIFICATE_EXPIRED
  'CERTIFICATE_EXPIRED_HEADLINE'      => "Überprüfung der Zertifikat Laufzeit",
  'CERTIFICATE_EXPIRED_POSITIVE'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> nicht abgelaufen",
  'CERTIFICATE_EXPIRED_NEGATIVE'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> abgelaufen",
  'CERTIFICATE_EXPIRED_DESCRIPTION'   => "<p>Die Meldung bedeutet, dass Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Server-Zertifikat</a> abgelaufen ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt. Sollte ein Nutzer Ihre Webseite über <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt, z. B. \"Ihr Zertifikat ist am (Datum) abgelaufen\". </p>",
  'CERTIFICATE_EXPIRED_SOLUTION_TIPS' => "<p>Dieses Problem lässt sich lösen, indem Sie das eingesetzte <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> erneuern. Wie Sie Zertifikate verlängern können, lesen Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate#Was_tun.2C_wenn_ein_SSL-Zertifikat_abgelaufen_ist.3F\" title=\"Zertifikate\">Zertifikat abgelaufen</a>. </p>",
  'CERTIFICATE_EXPIRED_LINK'          => "https://siwecos.de/wiki/Zertifikat-Abgelaufen/DE",

  // Test: CERTIFICATE_NOT_SENT_BY_SERVER
  'CERTIFICATE_NOT_SENT_BY_SERVER_HEADLINE'      => "Überprüfung der Zertifikatsübermittlung",
  'CERTIFICATE_NOT_SENT_BY_SERVER_POSITIVE'      => "Server sendet ein Zertifikat",
  'CERTIFICATE_NOT_SENT_BY_SERVER_NEGATIVE'      => "Server sendet kein Zertifikat",
  'CERTIFICATE_NOT_SENT_BY_SERVER_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> hat kein <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> gesendet. Dies ist ungewöhnlich und sollte nicht vorkommen. Der Server sollte seine <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Konfiguration</a> überprüfen und ggfs. <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schluesselaustauschverfahren/DE\" title=\"Schluesselaustauschverfahren/DE\">anonyme Cipher Suites</a> ausschalten. </p>",
  'CERTIFICATE_NOT_SENT_BY_SERVER_SOLUTION_TIPS' => "<p>Aktualisieren Sie dringend die von Ihnen eingesetzte <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a>. Moderne Software erlaubt diese Art der Konfiguration nicht mehr. </p>",
  'CERTIFICATE_NOT_SENT_BY_SERVER_LINK'          => "https://siwecos.de/wiki/Zertifikat-Nicht-Gesendet/DE",

  // Test: CERTIFICATE_NOT_VALID_YET
  'CERTIFICATE_NOT_VALID_YET_HEADLINE'      => "Überprüfung der Zertifikat Gültigkeit",
  'CERTIFICATE_NOT_VALID_YET_POSITIVE'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> ist schon gültig",
  'CERTIFICATE_NOT_VALID_YET_NEGATIVE'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> noch nicht gültig",
  'CERTIFICATE_NOT_VALID_YET_DESCRIPTION'   => "<p>Die Meldung bedeutet, dass Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Server-Zertifikat</a> noch nicht gültig ist. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt. Sollte ein Nutzer Ihre Webseite über <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a> aufrufen, wird ihm möglicherweise eine Fehlermeldung angezeigt. </p>",
  'CERTIFICATE_NOT_VALID_YET_SOLUTION_TIPS' => "<p>Deaktivieren Sie das <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> solange es <b>noch nicht</b> gültig ist. Ihre Webseite ist dann zwar nicht zertifiziert, jedoch erhalten Besucher zumindest keine Warnmeldung beim Aufruf Ihrer Webseite. Alternativ bietet sich die Möglichkeit an, Ihr altes <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> einzusetzen, so lange dies noch gültig ist. Wie Sie <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikate</a> verlängern können, lesen Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikat-Abgelaufen/DE\" title=\"Zertifikat-Abgelaufen/DE\">Zertifikat abgelaufen</a>. </p>",
  'CERTIFICATE_NOT_VALID_YET_LINK'          => "https://siwecos.de/wiki/Zertifikat-Nicht-Gueltig/DE",

  // Test: CERTIFICATE_WEAK_HASH_FUNCTION
  'CERTIFICATE_WEAK_HASH_FUNCTION_HEADLINE'      => "Überprüfung der Verschlüsselungsstärke des Zertifikats",
  'CERTIFICATE_WEAK_HASH_FUNCTION_POSITIVE'      => "Starker <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_NEGATIVE'      => "Schwacher <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_DESCRIPTION'   => "<p>Die Meldung bedeutet, dass Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Server-Zertifikat</a> einen schwachen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a> (Verschlüsselung) besitzt. Es stellt möglicherweise ein leichtes Ziel für Hacker-Angriffe dar. </p>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_SOLUTION_TIPS' => "<p>Um dieses Problem zu lösen, sollten Sie ein neues <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> mit einer sicheren <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Funktion</a>, also einer starken Verschlüsselung installieren. Wie Sie ein sicheres <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> bekommen, lesen Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate#Wie_wird_ein_SSL-Zertifikat_installiert.3F\" title=\"Zertifikate\">Zertifikat installieren</a>. </p>",
  'CERTIFICATE_WEAK_HASH_FUNCTION_LINK'          => "https://siwecos.de/wiki/Schwache-Verschluesselung/DE",

  // Test: CIPHERSUITEORDER_ENFORCED
  'CIPHERSUITEORDER_ENFORCED_HEADLINE'      => "Überprüfung der Client-Verschlüsselungsmethodik",
  'CIPHERSUITEORDER_ENFORCED_POSITIVE'      => "Verantwortungsvolle Auswahl der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Client-Verschl%C3%BCsselungsmethodik\" title=\"Client-Verschlüsselungsmethodik\">Client-Verschlüsselungsmethoden</a>",
  'CIPHERSUITEORDER_ENFORCED_NEGATIVE'      => "Verantwortungslose Auswahl der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Client-Verschl%C3%BCsselungsmethodik\" title=\"Client-Verschlüsselungsmethodik\">Client-Verschlüsselungsmethoden</a>",
  'CIPHERSUITEORDER_ENFORCED_DESCRIPTION'   => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethodik</a> des Webseiten-Besuchers bevorzugt wird, statt die Ihres Webservers. <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> sollten die Auswahl der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethoden</a> nicht ihren Kunden überlassen, sondern aktiv starke Verbindungen auswählen. </p>",
  'CIPHERSUITEORDER_ENFORCED_SOLUTION_TIPS' => "<p>Konfigurieren Sie Ihren Webserver so, dass Ihr Webserver die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethodik</a> bei der Kommunikation zwischen Ihrer Webseite und dem Webbrowser des Besuchers bestimmt. </p>",
  'CIPHERSUITEORDER_ENFORCED_LINK'          => "https://siwecos.de/wiki/Verschluesselungsmethode-Client/DE",

  // Test: CIPHERSUITE_ANON
  'CIPHERSUITE_ANON_HEADLINE'      => "Überprüfung auf anonyme Verschlüsselungsmethodik",
  'CIPHERSUITE_ANON_POSITIVE'      => "Anonymer <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schl%C3%BCsselaustauschverfahren\" title=\"Schlüsselaustauschverfahren\">Schlüsselaustausch</a> wird nicht unterstützt",
  'CIPHERSUITE_ANON_NEGATIVE'      => "Anonymer <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Schl%C3%BCsselaustauschverfahren\" title=\"Schlüsselaustauschverfahren\">Schlüsselaustausch</a> wird unterstützt",
  'CIPHERSUITE_ANON_DESCRIPTION'   => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass eine unsichere Verschlüsselungsmethode (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Cipher_Suite\" title=\"Cipher Suite\">Cipher Suite</a>) ohne Rechtekontrolle bei der Verbindung erfolgt. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>. </p>",
  'CIPHERSUITE_ANON_SOLUTION_TIPS' => "<p>Deaktivieren Sie die Unterstützung des \"Anonymen Schlüsselaustauschs\" in der  <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethodik</a>. In Konsequenz auf die bekannt gewordenen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS Schwachstellen</a> ist die wichtigste Regel, wann immer es geht, TLS 1.2 zu nutzen. SSL 3.0 sollte im Browser deaktiviert werden. </p>",
  'CIPHERSUITE_ANON_LINK'          => "https://siwecos.de/wiki/Schluesselaustauschverfahren/DE",

  // Test: CIPHERSUITE_DES
  'CIPHERSUITE_DES_HEADLINE'      => "Überprüfung auf DES Verschlüsselungsmethodik",
  'CIPHERSUITE_DES_POSITIVE'      => "Keine veraltete DES <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethodik</a> unterstützt",
  'CIPHERSUITE_DES_NEGATIVE'      => "Veraltete DES <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethodik</a> unterstützt",
  'CIPHERSUITE_DES_DESCRIPTION'   => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Cipher Suites</a>) unterstützt. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle</a>-Attacken. </p>",
  'CIPHERSUITE_DES_SOLUTION_TIPS' => "<p>Deaktivieren Sie die Unterstützung der DES <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethodik</a> in Ihrer Webserver-Software. </p>",
  'CIPHERSUITE_DES_LINK'          => "https://siwecos.de/wiki/Schwaches-DES-Verschluesselungsprotokoll/DE",

  // Test: CIPHERSUITE_EXPORT
  'CIPHERSUITE_EXPORT_HEADLINE'      => "Überprüfung auf schwache Verschlüsselungs-Funktionen",
  'CIPHERSUITE_EXPORT_POSITIVE'      => "Keine schwache <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/EXPORT-Verschl%C3%BCsselung\" title=\"EXPORT-Verschlüsselung\">EXPORT Verschlüsselung</a> unterstützt",
  'CIPHERSUITE_EXPORT_NEGATIVE'      => "Schwache <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/EXPORT-Verschl%C3%BCsselung\" title=\"EXPORT-Verschlüsselung\">Export Verschlüsselung</a> unterstützt",
  'CIPHERSUITE_EXPORT_DESCRIPTION'   => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass sich vorsätzlich unsichere <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethoden</a> nutzen lassen. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle-Attacken</a>. </p>",
  'CIPHERSUITE_EXPORT_SOLUTION_TIPS' => "<p>Deaktivieren Sie die Unterstützung von EXPORT <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethoden</a> im Webserver. </p>",
  'CIPHERSUITE_EXPORT_LINK'          => "https://siwecos.de/wiki/Geschwaechtes-Verschluesselungsprotokoll/DE",

  // Test: CIPHERSUITE_NULL
  'CIPHERSUITE_NULL_HEADLINE'      => "Überprüfung auf NULL-Chiffren",
  'CIPHERSUITE_NULL_POSITIVE'      => "Keine unsicheren <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/NULL-Algorithmus\" title=\"NULL-Algorithmus\">Null Chiffren</a> unterstützt",
  'CIPHERSUITE_NULL_NEGATIVE'      => "Unsichere <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/NULL-Algorithmus\" title=\"NULL-Algorithmus\">NULL Chiffren</a> unterstützt",
  'CIPHERSUITE_NULL_DESCRIPTION'   => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass zugelassen wird, dass unverschlüsselt über einen geschützten Kanal gesprochen werden kann. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle-Attacken</a>. </p>",
  'CIPHERSUITE_NULL_SOLUTION_TIPS' => "<p>Deaktivieren Sie die Unterstützung von NULL <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethoden</a>. </p>",
  'CIPHERSUITE_NULL_LINK'          => "https://siwecos.de/wiki/Unverschluesselte-Kommunikation/DE",

  // Test: CIPHERSUITE_RC4
  'CIPHERSUITE_RC4_HEADLINE'      => "Überprüfung auf RC4 Verschlüsselungsmethodik",
  'CIPHERSUITE_RC4_POSITIVE'      => "Keine veraltete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/RC4_Verschl%C3%BCsselungsmethodik\" title=\"RC4 Verschlüsselungsmethodik\">RC4 Verschlüsselungsmethodik</a> unterstützt",
  'CIPHERSUITE_RC4_NEGATIVE'      => "Veraltete <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/RC4_Verschl%C3%BCsselungsmethodik\" title=\"RC4 Verschlüsselungsmethodik\">RC4 Verschlüsselungsmethodik</a> unterstützt",
  'CIPHERSUITE_RC4_DESCRIPTION'   => "<p>Ihr Webserver/Ihre Webseite ist so konfiguriert, dass die mittlerweile als unsicher geltende Verschlüsselungsfunktion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/RC4_Verschl%C3%BCsselungsmethodik\" title=\"RC4 Verschlüsselungsmethodik\">RC4</a> weiterhin unterstützt wird. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle-Attacken</a>. </p>",
  'CIPHERSUITE_RC4_SOLUTION_TIPS' => "<p>Deaktivieren Sie die Unterstützung der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/RC4_Verschl%C3%BCsselungsmethodik\" title=\"RC4 Verschlüsselungsmethodik\">RC4 Verschlüsselungsmethodik</a>. </p>",
  'CIPHERSUITE_RC4_LINK'          => "https://siwecos.de/wiki/Unsichere-RC4-Verschluesselungsmethodik/DE",

  // Test: CRIME_VULNERABLE
  'CRIME_VULNERABLE_HEADLINE'      => "Überprüfung auf die CRIME Schwachstelle",
  'CRIME_VULNERABLE_POSITIVE'      => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Crime-Schwachstelle/DE/Background\" title=\"Crime-Schwachstelle/DE/Background\">CRIME</a>",
  'CRIME_VULNERABLE_NEGATIVE'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Crime-Schwachstelle/DE/Background\" title=\"Crime-Schwachstelle/DE/Background\">CRIME</a>",
  'CRIME_VULNERABLE_DESCRIPTION'   => "<p>Der Server ist verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Crime-Schwachstelle/DE/Background\" title=\"Crime-Schwachstelle/DE/Background\">CRIME</a>. Eine Schwachstelle, welche es einem Angreifer erlaubt, die Kommunikation zu entschlüsseln. </p>",
  'CRIME_VULNERABLE_SOLUTION_TIPS' => "<p>CRIME kann besiegt werden, indem die Verwendung von Komprimierung verhindert wird. Entweder auf der Client-Seite, indem der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Browser\" title=\"Browser\">Browser</a> die Komprimierung von SPDY-Anfragen deaktiviert, oder indem die Webseite die Verwendung von Datenkompression bei solchen Transaktionen unter Verwendung der Protokollaushandlungsmerkmale des TLS-Protokolls verhindert. Deaktivieren sie <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Compression</a> auf Ihrem Server. </p>",
  'CRIME_VULNERABLE_LINK'          => "https://siwecos.de/wiki/Crime-Schwachstelle/DE",

  // Test: HEARTBLEED_VULNERABLE
  'HEARTBLEED_VULNERABLE_HEADLINE'      => "Überprüfung auf die Heartbleed Schwachstelle <span class=\"promarker\"></span>",
  'HEARTBLEED_VULNERABLE_POSITIVE'      => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE/Background\" title=\"Heartbleed-Schwachstelle/DE/Background\">Heartbleed</a>",
  'HEARTBLEED_VULNERABLE_NEGATIVE'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE/Background\" title=\"Heartbleed-Schwachstelle/DE/Background\">Heartbleed</a>",
  'HEARTBLEED_VULNERABLE_DESCRIPTION'   => "<p>Der Server ist verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE/Background\" title=\"Heartbleed-Schwachstelle/DE/Background\">Heartbleed</a>. Dadurch kann ein Angreifer sensible Daten aus dem Arbeitsspeicher des Servers auslesen, wie z. B. geheime Schlüssel und Kundendaten. </p>",
  'HEARTBLEED_VULNERABLE_SOLUTION_TIPS' => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein. </p>",
  'HEARTBLEED_VULNERABLE_LINK'          => "https://siwecos.de/wiki/Heartbleed-Schwachstelle/DE",

  // Test: HTTPS_NOT_SUPPORTED
  'HTTPS_NOT_SUPPORTED_HEADLINE'      => "Überprüfung der Reaktionszeit des HTTPS-Headers",
  'HTTPS_NOT_SUPPORTED_POSITIVE'      => "Server unterstützt <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS</a>.",
  'HTTPS_NOT_SUPPORTED_NEGATIVE'      => "Server scheint kein <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS</a> zu unterstützen.",
  'HTTPS_NOT_SUPPORTED_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> scheint kein TLS (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">Transportschichtsicherheit</a>) zu unterstützen. Dies bedeutet, dass Sie keinerlei Verschlüsselung einsetzen, um Ihre Daten und die Ihrer Kunden zu schützen. </p>",
  'HTTPS_NOT_SUPPORTED_SOLUTION_TIPS' => "<p>Aktivieren Sie TLS (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">Transportschichtsicherheit</a>) </p>",
  'HTTPS_NOT_SUPPORTED_LINK'          => "https://siwecos.de/wiki/Keine-TLS-Unterstuetzung/DE",

  // Test: HTTPS_NO_RESPONSE
  'HTTPS_NO_RESPONSE_HEADLINE'      => "Überprüfung der Reaktionszeit des Headers",
  'HTTPS_NO_RESPONSE_POSITIVE'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> antwortet.",
  'HTTPS_NO_RESPONSE_NEGATIVE'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> antwortet nicht.",
  'HTTPS_NO_RESPONSE_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> scheint überhaupt nicht zu antworten. Haben sie die <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Domain\" title=\"Domain\">Domain</a> richtig eingegeben? </p>",
  'HTTPS_NO_RESPONSE_SOLUTION_TIPS' => "<p>Bitte überprüfen Sie Ihre Eingabe auf Eingabefehler. </p>",
  'HTTPS_NO_RESPONSE_LINK'          => "https://siwecos.de/wiki/Reaktionszeit-Ueberschritten/DE",

  // Test: INVALID_CURVE_EPHEMERAL_VULNERABLE
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_HEADLINE'      => "Überprüfung auf die Ephemeral Invalid Curve Schwachstelle <span class=\"promarker\"></span>",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_POSITIVE'      => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\">Ephemeral Invalid Curve Angriff</a> Angriffe.",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_NEGATIVE'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\">Ephemeral Invalid Curve Angriff</a> Angriffe.",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Ephemeral-Schwachstelle/DE/Background\">Ephemeral Invalid Curve Angriff</a>. Dadurch kann ein Angreifer die Verbindungen angreifen. </p>",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_SOLUTION_TIPS' => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein. </p>",
  'INVALID_CURVE_EPHEMERAL_VULNERABLE_LINK'          => "https://siwecos.de/wiki/Invalid-Curve-Ephemeral-Schwachstelle/DE",

  // Test: INVALID_CURVE_VULNERABLE
  'INVALID_CURVE_VULNERABLE_HEADLINE'      => "Überprüfung auf die Invalid Curve Schwachstelle <span class=\"promarker\"></span>",
  'INVALID_CURVE_VULNERABLE_POSITIVE'      => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Schwachstelle/DE/Background\">Invalid Curve Angriffe</a>.",
  'INVALID_CURVE_VULNERABLE_NEGATIVE'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Invalid-Curve-Schwachstelle/DE/Background\" title=\"Invalid-Curve-Schwachstelle/DE/Background\">Invalid Curve Angriffe</a>.",
  'INVALID_CURVE_VULNERABLE_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.golem.de/news/verschluesselung-punkte-auf-der-falschen-elliptischen-kurve-1511-117643.html\">Invalid Curve Angriff</a>. Dadurch kann ein Angreifer den geheimen Schlüssel Ihres <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikats</a> stehlen. </p>",
  'INVALID_CURVE_VULNERABLE_SOLUTION_TIPS' => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein. </p>",
  'INVALID_CURVE_VULNERABLE_LINK'          => "https://siwecos.de/wiki/Invalid-Curve-Schwachstelle/DE",

  // Test: PADDING_ORACLE_VULNERABLE
  'PADDING_ORACLE_VULNERABLE_HEADLINE'      => "Überprüfung auf die Padding-Oracle Schwachstelle <span class=\"promarker\"></span>",
  'PADDING_ORACLE_VULNERABLE_POSITIVE'      => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/PADDING-ORACLE-Schwachstelle/DE/Background\" title=\"PADDING-ORACLE-Schwachstelle/DE/Background\">Padding</a> Oracle Angriffe.",
  'PADDING_ORACLE_VULNERABLE_NEGATIVE'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/PADDING-ORACLE-Schwachstelle/DE/Background\" title=\"PADDING-ORACLE-Schwachstelle/DE/Background\">Padding Oracle Angriffe</a>.",
  'PADDING_ORACLE_VULNERABLE_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.heise.de/security/artikel/Poodle-So-funktioniert-der-Angriff-auf-die-Verschluesselung-2425250.html\">Padding-Oracle Angriff</a>, welcher es einem Angreifer erlaubt, die Kommunikation zu entschlüsseln. </p>",
  'PADDING_ORACLE_VULNERABLE_SOLUTION_TIPS' => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein. </p>",
  'PADDING_ORACLE_VULNERABLE_LINK'          => "https://siwecos.de/wiki/PADDING-ORACLE-Schwachstelle/DE",

  // Test: POODLE_VULNERABLE
  'POODLE_VULNERABLE_HEADLINE'      => "Überprüfung auf die Poodle Schwachstelle",
  'POODLE_VULNERABLE_POSITIVE'      => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Poodle\" title=\"Poodle\">POODLE</a>",
  'POODLE_VULNERABLE_NEGATIVE'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Poodle\" title=\"Poodle\">POODLE</a>",
  'POODLE_VULNERABLE_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch einen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Poodle\" title=\"Poodle\">POODLE-Angriff</a>, welcher es einem Angreifer erlaubt, die Kommunikation zu entschlüsseln. </p>",
  'POODLE_VULNERABLE_SOLUTION_TIPS' => "<p>Deaktivieren Sie umgehend das veraltete Verschlüsselungsprotokoll <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a> auf Ihrem Server! </p>",
  'POODLE_VULNERABLE_LINK'          => "https://siwecos.de/wiki/POODLE-Schwachstelle/DE",

  // Test: PROTOCOLVERSION_SSL2
  'PROTOCOLVERSION_SSL2_HEADLINE'      => "Überprüfung auf veraltetes SSL2 Protokoll",
  'PROTOCOLVERSION_SSL2_POSITIVE'      => "Veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL2</a> wird nicht unterstützt.",
  'PROTOCOLVERSION_SSL2_NEGATIVE'      => "Veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL2</a> wird unterstützt.",
  'PROTOCOLVERSION_SSL2_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> unterstützt die veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL2</a>, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks. </p>",
  'PROTOCOLVERSION_SSL2_SOLUTION_TIPS' => "<p><a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL2</a> verzichten. Weitere Informationen finden Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL</a>. </p>",
  'PROTOCOLVERSION_SSL2_LINK'          => "https://siwecos.de/wiki/Veraltete-Protokollversion-SSL2/DE",

  // Test: PROTOCOLVERSION_SSL3
  'PROTOCOLVERSION_SSL3_HEADLINE'      => "Überprüfung auf veraltetes SSL3 Protokoll",
  'PROTOCOLVERSION_SSL3_POSITIVE'      => "Veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a> wird nicht unterstützt.",
  'PROTOCOLVERSION_SSL3_NEGATIVE'      => "Veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a> wird unterstützt.",
  'PROTOCOLVERSION_SSL3_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> unterstützt die veraltete Protokollversion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a>, welche als höchst unsicher gilt. Sie gefährden mit dem Einsatz der Version massiv die Sicherheit des ganzen Servers und möglicherweise Ihres gesamten Unternehmensnetzwerks. </p>",
  'PROTOCOLVERSION_SSL3_SOLUTION_TIPS' => "<p><a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Verschlüsselung</a> gilt heute als Standard. Sie sollten deshalb auf den Einsatz von <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL3</a> verzichten. Weitere Informationen finden Sie hier: <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSL</a>. </p>",
  'PROTOCOLVERSION_SSL3_LINK'          => "https://siwecos.de/wiki/Veraltete-Protokollversion-SSL3/DE",

  // Test: PROTOCOLVERSION_TLS13
  'PROTOCOLVERSION_TLS13_HEADLINE'      => "Überprüfung auf Einsatz des <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS 1.3 Protokolls</a>",
  'PROTOCOLVERSION_TLS13_POSITIVE'      => "<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS 1.3 Protokoll</a> wird nicht unterstützt.",
  'PROTOCOLVERSION_TLS13_NEGATIVE'      => "Modernes <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS 1.3 Protokoll</a> wird unterstützt.",
  'PROTOCOLVERSION_TLS13_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> unterstützt die neueste <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Protokollversion 1.3</a>. Diese befindet sich noch im Standardisierungsprozess. Sollten Sie nicht wissen, was dies bedeutet, können Sie die Version ausschalten, da die meisten Browser diese Version noch nicht unterstützen und TLS 1.3 sich noch in der Entwicklung befindet. </p>",
  'PROTOCOLVERSION_TLS13_SOLUTION_TIPS' => "<p>Es besteht kein Handlungsbedarf. </p>",
  'PROTOCOLVERSION_TLS13_LINK'          => "https://siwecos.de/wiki/Protokollversion-TLS13-Gefunden/DE",

  // Test: SWEET32_VULNERABLE
  'SWEET32_VULNERABLE_HEADLINE'      => "Überprüfung auf Sweet32 Schwachstelle",
  'SWEET32_VULNERABLE_POSITIVE'      => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Sweet32-Schwachstelle/DE/Background\" title=\"Sweet32-Schwachstelle/DE/Background\">Sweet32</a>.",
  'SWEET32_VULNERABLE_NEGATIVE'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Sweet32-Schwachstelle/DE/Background\" title=\"Sweet32-Schwachstelle/DE/Background\">Sweet32</a>.",
  'SWEET32_VULNERABLE_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Sweet32-Schwachstelle/DE/Background\" title=\"Sweet32-Schwachstelle/DE/Background\">Sweet32</a>, welche es einem Angreifer erlaubt, Teile der Kommunikation zu entschlüsseln, falls über eine Verbindung große Mengen Daten transferiert werden. </p>",
  'SWEET32_VULNERABLE_SOLUTION_TIPS' => "<p>Wo es möglich ist, sollte man am besten ganz auf Triple-DES und Blowfish verzichten. Deaktivieren Sie <a target=\"siwecos_extern\" rel=\"nofollow\" class=\"external text\" href=\"https://www.itwissen.info/Blockchiffre-block-cipher.html\">Blockchiffren</a> mit einer Länge von 64 Bit. Vergewissern Sie sich, das Protokolle wie <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSLv2</a> und <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/SSL\" title=\"SSL\">SSLv3</a> deaktiviert sind. </p>",
  'SWEET32_VULNERABLE_LINK'          => "https://siwecos.de/wiki/Sweet32-Schwachstelle/DE",

  // Test: TLS_POODLE_VULNERABLE
  'TLS_POODLE_VULNERABLE_HEADLINE'      => "Überprüfung auf die TLS-POODLE Schwachstelle",
  'TLS_POODLE_VULNERABLE_POSITIVE'      => "Nicht verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/TLS-POODLE-Schwachstelle/DE\" title=\"TLS-POODLE-Schwachstelle/DE\">TLS-POODLE</a>.",
  'TLS_POODLE_VULNERABLE_NEGATIVE'      => "Verwundbar durch <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/TLS-POODLE-Schwachstelle/DE\" title=\"TLS-POODLE-Schwachstelle/DE\">TLS-POODLE</a>.",
  'TLS_POODLE_VULNERABLE_DESCRIPTION'   => "<p>Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ist verwundbar durch eine Variante des Poodle-Angriffs auf <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS</a>, was es einem Angreifer erlaubt, die Kommunikation zu entschlüsseln. </p>",
  'TLS_POODLE_VULNERABLE_SOLUTION_TIPS' => "<p>Spielen Sie umgehend ein Update für Ihre <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS-Implementierung</a> auf Ihrem <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> ein. In der Apache-Konfiguration kann man etwa die Zeile \"SSLProtocol All -SSLv2 -SSLv3\" angeben. </p>",
  'TLS_POODLE_VULNERABLE_LINK'          => "https://siwecos.de/wiki/TLS-POODLE-Schwachstelle/DE",

  // Result texts follow
  'ANON_SUITES'                        => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass eine anonyme <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Verschlüsselungsmethodik</a> ohne <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Authentifizierung\" title=\"Authentifizierung\">Authentifizierung</a> bei der Verbindung erfolgt. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>.",
  'CERTIFICATE_WEAK_SIGN_ALGO'         => "Überprüfung der Zertifikat Verschlüsselung",
  'CERTIFICATE_WEAK_SIGN_ALGO_SUCCESS' => "Überprüfung der Zertifikat Verschlüsselung",
  'DES_SUITES'                         => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass Sie die mittlerweile als unsicher geltende Verschlüsselungsfunktion DES (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Verschl%C3%BCsselungsmethodik\" title=\"Verschlüsselungsmethodik\">Cipher Suites)</a> unterstützt. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>.",
  'EXPIRED'                            => "Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> ist am %DATE% abgelaufen. Ihre Webseite wird Besuchern als unsicher bzw. nicht vertrauenswürdig angezeigt.",
  'EXPORT_SUITES'                      => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass sich vorsätzlich geschwächte kryptographische Funktionen (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Cipher_Suite\" title=\"Cipher Suite\">Cipher Suites</a>) nutzen lassen. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle-Attacken</a>.",
  'HASH_ALGO'                          => "Ihr Server-Zertifikat nutzt den schwachen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a> %HASH%. Das <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> kann so sehr einfach gefälscht werden. Eine Warnung beim Aufruf Ihrer Webseite erfolgt infolge eines schwachen <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Hashing\" title=\"Hashing\">Hash-Algorithmus</a> jedoch nicht.",
  'HTTPS_RESPONSE'                     => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> “%HOST%“ antwortet nicht auf verschlüsselte HTTP (<a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/HTTPS\" title=\"HTTPS\">HTTPS</a>) Anfragen.",
  'HTTPS_SUPPORTED'                    => "Der <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Server\" title=\"Server\">Server</a> “%HOST%“ scheint kein <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Transport_Layer_Security\" title=\"Transport Layer Security\">TLS</a> zu unterstützen. Dies bedeutet, dass Sie keinerlei Verschlüsselung einsetzen, um Ihre Daten und die Ihrer Kunden zu schützen.",
  'NOT_YET_VALID'                      => "Ihr <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Zertifikate\" title=\"Zertifikate\">Zertifikat</a> wird erst am %DATE% gültig. Ihre Webseite wird Besuchern bis dahin als unsicher bzw. nicht vertrauenswürdig angezeigt.",
  'NULL_SUITES'                        => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass zugelassen wird, dass unverschlüsselt über einen eigentlich geschützten Kanal Daten übertragen werden können. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>.",
  'RC4_SUITES'                         => "Ihr Webserver/Ihre Webseite ist so konfiguriert, dass die mittlerweile als unsicher geltende Verschlüsselungsfunktion <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/RC4_Verschl%C3%BCsselungsmethodik\" title=\"RC4 Verschlüsselungsmethodik\">RC4</a> weiterhin unterstützt wird. Dies ermöglicht <a target=\"siwecos_wiki\" href=\"https://siwecos.de/wiki/Man-in-the-middle\" title=\"Man-in-the-middle\">Man-in-the-middle Attacken</a>.",

];
