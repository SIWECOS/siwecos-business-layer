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
  'SCANNER_NAME' => 'Info Leak Scanner',

  // Test: CMS
  'CMS_HEADLINE'      => 'Überprüfung der CMS Version',
  'CMS_POSITIVE'      => 'Es können keine Aussagen über die Version des verwendeten <a target="siwecos_wiki" href="https://siwecos.de/wiki/Content-Management-Systeme" title="Content-Management-Systeme">CMS</a> gemacht werden. Entsprechend kann nicht ermittelt werden, ob Sie eine verwundbare Version benutzen.',
  'CMS_NEGATIVE'      => 'Content Management System (CMS) erkennbar',
  'CMS_DESCRIPTION'   => '<p>Das verwendete <a target="siwecos_wiki" href="https://siwecos.de/wiki/Content-Management-Systeme" title="Content-Management-Systeme">Content Management System</a> kann identifiziert werden. Diese Information könnte von einem Angreifer genutzt werden, um gezielt nach <a target="siwecos_wiki" href="https://siwecos.de/wiki/Schwachstellen" title="Schwachstellen">Schwachstellen</a> für dieses spezielle CMS zu suchen. </p>',
  'CMS_SOLUTION_TIPS' => '<p>Halten Sie installierte Webserver und das <a target="siwecos_wiki" href="https://siwecos.de/wiki/Content-Management-System-Gefunden/DE" title="Content-Management-System-Gefunden/DE">Content Management System</a> immer auf dem aktuellsten Stand. Manche CMS-Systeme erlauben es, Versionsinformationen zu verstecken. Nutzen sie dieses Feature falls verfügbar, evtl. ist z. B. das WordPress Plugin "<a target="siwecos_extern" rel="nofollow" class="external text" href="http://wp-premiumthemes.de/hide-my-wp-tutorial-deutsch/">Hide My WP</a>" interessant für Sie. </p><p><b>Weiteres Beispiel für WordPress:</b> Damit Angreifer oder Hacker z. B. nicht direkt die WordPress-Version auslesen können, kann man folgende Codezeile in der Datei <b>functions.php</b> ganz am Ende einfügen: </p><p><b>--snip</b> </p><p>remove_action(\'wp_head\',\'wp_generator\'); </p><p><b>--snap</b> </p>',
  'CMS_LINK'          => 'https://siwecos.de/wiki/Content-Management-System-Gefunden/DE',

  // Test: CMS_PLUGINS
  'CMS_PLUGINS_HEADLINE'      => 'Überprüfung auf CMS-Plugins',
  'CMS_PLUGINS_POSITIVE'      => 'Es konnten keine <a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin" title="Plugin">CMS-Plugins</a> erkannt werden. Angriffe mithilfe von <a target="siwecos_wiki" href="https://siwecos.de/wiki/Schwachstellen" title="Schwachstellen">Schwachstellen</a>, die in <a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin-Gefunden/DE/Background" title="Plugin-Gefunden/DE/Background">Plugins</a> existieren, sind somit unwahrscheinlicher.',
  'CMS_PLUGINS_NEGATIVE'      => '<a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin-Gefunden/DE" title="Plugin-Gefunden/DE">CMS Plugin</a> erkannt',
  'CMS_PLUGINS_DESCRIPTION'   => '<p>Es wurde ein von Ihrem <a target="siwecos_wiki" href="https://siwecos.de/wiki/Content-Management-Systeme" title="Content-Management-Systeme">CMS-System</a> genutztes <a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin-Gefunden/DE/Background" title="Plugin-Gefunden/DE/Background">Plugin</a> entdeckt. Ein Angreifer könnte diese Information nutzen, um gezielt nach <a target="siwecos_wiki" href="https://siwecos.de/wiki/Schwachstellen" title="Schwachstellen">Schwachstellen</a> für Ihre Website zu suchen. </p>',
  'CMS_PLUGINS_SOLUTION_TIPS' => '<p><a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin-Gefunden/DE" title="Plugin-Gefunden/DE">Plugins</a> sollten auf jene beschränkt werden, die tatsächlich benötigt werden. Damit kann die Angriffsfläche erheblich reduziert werden. Zudem sollten installierte Plugins immer auf dem aktuellsten Stand gehalten werden. </p>',
  'CMS_PLUGINS_LINK'          => 'https://siwecos.de/wiki/Plugin-Gefunden/DE',

  // Test: EMAIL_ADDRESS
  'EMAIL_ADDRESS_HEADLINE'      => 'Überprüfung auf vorhandene E-Mail-Adressen',
  'EMAIL_ADDRESS_POSITIVE'      => 'Es konnten keine E-Mail-Adressen gefunden werden. <a target="siwecos_wiki" href="https://siwecos.de/wiki/Spam" title="Spam">Spam</a>- und <a target="siwecos_wiki" href="https://siwecos.de/wiki/Phishing" title="Phishing">Phishing</a>-Angriffe auf Ihre E-Mail-Adressen sind somit weniger wahrscheinlich.',
  'EMAIL_ADDRESS_NEGATIVE'      => 'Auslesbare E-Mail-Adresse',
  'EMAIL_ADDRESS_DESCRIPTION'   => '<p>Ihre Webseite enthält mindestens eine maschinell auslesbare E-Mail-Adresse. Dieses ermöglicht es Dritten, die hinterlegten E-Mail-Adressen automatisiert durch WebCrawler (<a target="siwecos_wiki" href="https://siwecos.de/wiki/Crawler" title="Crawler">auch Spider, Searchbot oder Robot</a>) zu sammeln und in einer internen Datenbank mit anderen Informationen zu Ihrer Webseite zusammenzufügen. </p>',
  'EMAIL_ADDRESS_SOLUTION_TIPS' => '<p>Falls E-Mail-Adressen gefunden wurden, fragen Sie sich, ob Sie diese wirklich veröffentlichen wollen. </p><p>Hinterlegen Sie Ihre Kontaktadressen bspw. im Impressum wie folgt: <b>mail at siwecos.de</b> oder <b>mail @ siwecos.de</b>. Bedenken Sie jedoch, dass <a target="siwecos_wiki" href="https://siwecos.de/wiki/Crawler" title="Crawler">Crawler</a> größtenteils in der Lage sind, solche "Tricks" zu erkennen und auszuwerten. Unlesbar für Crawler werden E-Mail-Adressen, wenn Sie diese als Grafik hinterlegen. Das hat den Nachteil, dass sehbehinderte Besucher Ihrer Webseite sich Ihre E-Mail-Adresse nicht vorlesen lassen können. </p><p>Alternativ können Sie ein kleines JavaScript nutzen, welches Ihre E-Mail-Adresse als verschlüsseltes, aber anklickbares <b>mailto:</b> einbindet. Ein solches Skript können Sie sich z. B. bei <a target="siwecos_extern" rel="nofollow" class="external text" href="http://www.jottings.com/obfuscator.htm">ANTI-SPAM EMAIL LINK OBFUSCATOR</a> erstellen lassen.  Weitere Tipps finden Sie <a target="siwecos_extern" rel="nofollow" class="external text" href="https://www.hosteurope.de/blog/15-moeglichkeiten-die-e-mail-adresse-geschuetzt-darzustellen/">bei HostEurope</a>. </p>',
  'EMAIL_ADDRESS_LINK'          => 'https://siwecos.de/wiki/Email-Adresse-Gefunden/DE',

  // Test: JS_LIB
  'JS_LIB_HEADLINE'      => 'Überprüfung auf JavaScript-Bibliothek',
  'JS_LIB_POSITIVE'      => 'Die <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript-Bibliotheken</a> sind nach dem aktuellen Stand nicht durch bekannte <a target="siwecos_wiki" href="https://siwecos.de/wiki/Schwachstellen" title="Schwachstellen">Schwachstellen</a> angreifbar.',
  'JS_LIB_NEGATIVE'      => 'Unsichere <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript-Bibliothek</a> gefunden.',
  'JS_LIB_DESCRIPTION'   => '<p>Es wurde eine von Ihnen verwendete <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript-Bibliothek</a> gefunden. Ein Angreifer könnte diese Information nutzen, um gezielt nach <a target="siwecos_wiki" href="https://siwecos.de/wiki/Schwachstellen" title="Schwachstellen">Schwachstellen</a> für Ihre Website zu suchen. </p>',
  'JS_LIB_SOLUTION_TIPS' => '<p>Wenn unsichere JavaScript-Bibliotheken gemeldet wurden, aktualisieren Sie die verwendete <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript-Bibliothek</a> bzw. Framework. </p><p><b>Anmerkung:</b> Die Sicherheitslücke der Version 1.12.4 ist den Entwicklern bekannt und sollte mit dem nächsten Update behoben werden. Eine manuelle Änderung auf die Version 3 wird von Wordpress aus Kompatibilitätsgründen nicht empfohlen. Sobald das neue Update verfügbar ist, sollten Sie es schnellstmöglich einspielen. </p>',
  'JS_LIB_LINK'          => 'https://siwecos.de/wiki/Javascript-Schwachstelle/DE',

  // Test: PHONE_NUMBER
  'PHONE_NUMBER_HEADLINE'      => 'Überprüfung auf auslesbare Telefonnummern',
  'PHONE_NUMBER_POSITIVE'      => 'Telefonnummern wurden nicht gefunden.',
  'PHONE_NUMBER_NEGATIVE'      => 'Telefonnummer gefunden.',
  'PHONE_NUMBER_DESCRIPTION'   => '<p>Es wurde eine Telefonnummer gefunden. Ein Angreifer könnte diese Information nutzen, um Mitarbeiter zu manipulieren, und an Informationen gelangen die geheim bleiben sollten. </p>',
  'PHONE_NUMBER_SOLUTION_TIPS' => '<p>Die veröffentlichten Telefonnummern sollten auf jene beschränkt werden, die tatsächlich für die Kommunikation mit Kunden gedacht sind. Außerdem sollte der telefonierende Mitarbeiter sich der Gefahr von <a target="siwecos_wiki" href="https://siwecos.de/wiki/Social_engineering" title="Social engineering">Social Engineering-Angriffen</a> bewusst sein und die Vorgehensweise von Social Engineers kennen. Weitere Tipps, die auch analog auf Telefonnummer anwendbar sind, finden Sie <a target="siwecos_extern" rel="nofollow" class="external text" href="https://www.hosteurope.de/blog/15-moeglichkeiten-die-e-mail-adresse-geschuetzt-darzustellen/">hier &gt;&gt;</a>. </p>',
  'PHONE_NUMBER_LINK'          => 'https://siwecos.de/wiki/Telefonnummer-Gefunden/DE',

  // Result texts follow
  'CMS_ONLY'                   => 'Das von Ihnen verwendete Content Management System (:cms) ist erkennbar.',
  'CMS_VERSION'                => 'Das verwendete CMS :cms und dessen Version :version wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.',
  'CMS_VERSION_VULN'           => 'Das verwendete CMS :cms der Version :version wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.',
  'COULDNT_CONNECT'            => '<dl><dd>domain antwortet nicht.</dd></dl>',
  'COULDNT_RESOLVE_HOST'       => '<dl><dd>domain ist unbekannt.</dd></dl>',
  'DONT_LEAK_USER_CREDS'       => 'Sie sollten Ihre Zugangsdaten (Name und Passwort) nicht übermitteln.',
  'EMAIL_FOUND'                => 'Die E-Mail-Adresse :email_adress wurde gefunden. Wollen Sie diese E-Mail-Adresse wirklich veröffentlichen? Ein Angreifer kann diese bspw. für <a target="siwecos_wiki" href="https://siwecos.de/wiki/Phishing" title="Phishing">Phishing</a>-Angriffe nutzen.',
  'JSON_DECODE_ERROR'          => 'Es gibt hier einen <a target="siwecos_extern" rel="nofollow" class="external text" href="https://de.wikipedia.org/wiki/Json">JSON</a> Übersetzungsfehler.',
  'JS_LIB_ONLY'                => 'Die verwendete <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript-Bibliothek</a> :js_lib_name in DOM-Node :node mit dem Inhalt :node_content wurde erkannt. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.',
  'JS_LIB_VERSION'             => 'Die verwendete <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript-Bibliothek</a> :js_lib_name mit der Version :js_lib_version in DOM-Node :node mit dem Inhalt :node_content wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.',
  'JS_LIB_VULN_VERSION'        => 'Die verwendete <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript-Bibliothek</a> :js_lib_name mit der Version :js_lib_version in DOM-Node :node mit dem Inhalt :node_content wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.',
  'LOCALHOST_SCAN_NOT_ALLOWED' => 'Die lokale Überprüfung ist nicht erlaubt',
  'NO_RESPONSE'                => 'Die angegebene <a target="siwecos_wiki" href="https://siwecos.de/wiki/URL" title="URL">URL</a> lieferte keine Antwort.',
  'NO_SOURCE_CODE'             => 'Keine Quelle gefunden.',
  'NUMBER_FOUND'               => 'Die Telefonnummer :number wurde gefunden. Wollen Sie diese Telefonnummer wirklich veröffentlichen? Ein Angreifer kann diese bspw. für <a target="siwecos_wiki" href="https://siwecos.de/wiki/Social_engineering" title="Social engineering">Social Engineering</a> (zwischenmenschliche Beeinflussungen) Angriffe einsetzen.',
  'PLUGIN_ONLY'                => 'Das verwendete <a target="siwecos_wiki" href="https://siwecos.de/wiki/Content-Management-Systeme" title="Content-Management-Systeme">CMS</a>-<a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin" title="Plugin">Plugin</a> :plugin in DOM-Node :node mit dem Inhalt :node_content wurde erkannt. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.',
  'PLUGIN_VERSION'             => 'Das verwendete <a target="siwecos_wiki" href="https://siwecos.de/wiki/Content-Management-Systeme" title="Content-Management-Systeme">CMS</a>-<a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin" title="Plugin">Plugin</a> :plugin mit der Version :plugin_version in DOM-Node :node mit dem Inhalt :node_content wurde erkannt. Die Angabe einer Version vereinfacht einem Angreifer das Vorbereiten eines Angriffs. Dies stellt jedoch nicht direkt eine Schwachstelle dar und bedarf einer genaueren Prüfung.',
  'PLUGIN_VERSION_VULN'        => 'Das verwendete <a target="siwecos_wiki" href="https://siwecos.de/wiki/Content-Management-Systeme" title="Content-Management-Systeme">CMS</a>-<a target="siwecos_wiki" href="https://siwecos.de/wiki/Plugin" title="Plugin">Plugin</a> :plugin der Version :plugin_version in DOM-node :node mit dem Inhalt :node_content wurde erkannt. Für diese Version ist eine Schwachstelle bekannt.',
  'PORT_DISALLOWED'            => 'Dieser Port ist nicht erlaubt.',
  'REDIRECT_ERROR'             => 'Es gibt einen Umleitungsfehler.',

];
