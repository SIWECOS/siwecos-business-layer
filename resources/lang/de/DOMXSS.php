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
  'SCANNER_NAME' => 'DOMXSS Scanner',

  // Test: SINKS
  'SINKS_HEADLINE'      => 'Überprüfung des JavaScript-Codes nach DOMXSS-Sinks',
  'SINKS_POSITIVE'      => 'Automatisiert wurden keine unsicheren Codebestandteile für <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS-Sinks</a> erkannt.',
  'SINKS_NEGATIVE'      => 'Unsicheren <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript</a>-Code verwendet <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS-Sinks</a>.',
  'SINKS_DESCRIPTION'   => '<p>Es wurde mindestens eine Codestelle beim Scan Ihrer Webseite gefunden, der unter bestimmten Voraussetzungen auf eine DOM-basierende <a target="siwecos_wiki" href="https://siwecos.de/wiki/Cross-Site_Scripting" title="Cross-Site Scripting">Cross-Site Scripting-Anfälligkeit</a> hindeutet. Diese Stelle kann eine Schwachstelle auf Ihrer Webseite darstellen. </p>',
  'SINKS_SOLUTION_TIPS' => '<p>Wenn unsicherer JavaScript-Code gemeldet wird, ist die <a target="siwecos_wiki" href="https://siwecos.de/wiki/Webanwendung" title="Webanwendung">Webanwendung</a> eventuell anfällig für sog. <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS</a>-Angriffe. Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die <a target="siwecos_wiki" href="https://siwecos.de/wiki/Schwachstellen" title="Schwachstellen">Schwachstellen</a> auf der Webseite zu bestätigen. </p>',
  'SINKS_LINK'          => 'https://siwecos.de/wiki/DOMXSS-Schwachstelle/DE',

  // Test: SOURCES
  'SOURCES_HEADLINE'      => 'Überprüfung des JavaScript-Codes nach DOMXSS-Sources',
  'SOURCES_POSITIVE'      => 'Automatisiert wurden keine unsicheren Codebestandteile für <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sources" title="DOMXSS-Sources">DOMXSS-Sources</a> erkannt.',
  'SOURCES_NEGATIVE'      => 'Unsicheren <a target="siwecos_wiki" href="https://siwecos.de/wiki/JavaScript" title="JavaScript">JavaScript</a>-Code verwendet (Sources).',
  'SOURCES_DESCRIPTION'   => '<p>Bei der Überprüfung wurde mindestens eine <a target="siwecos_wiki" href="https://siwecos.de/wiki/Schwachstellen" title="Schwachstellen">Schwachstelle</a> auf der Webseite gefunden, die von einer externen, möglicherweise nicht vertrauenswürdigen Quelle gesteuert werden könnte. </p>',
  'SOURCES_SOLUTION_TIPS' => '<p>Wenn unsicherer JavaScript-Code gemeldet wird, ist die <a target="siwecos_wiki" href="https://siwecos.de/wiki/Webanwendung" title="Webanwendung">Webanwendung</a> eventuell anfällig für sog. <a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS</a>-Angriffe. Das Ergebnis der Untersuchung kann nur als Hinweis auf Sicherheitslücken verwendet werden. Weitere Tests sind erforderlich, um die <a target="siwecos_wiki" href="https://siwecos.de/wiki/Schwachstellen" title="Schwachstellen">Schwachstellen</a> auf der Webseite zu bestätigen. </p>',
  'SOURCES_LINK'          => 'https://siwecos.de/wiki/Schadcode-Ueber-Fremde-Quellen/DE',

  // Result texts follow
  'NO_CONTENT'       => 'Auf der Seite wurde kein Inhalt gefunden.',
  'NO_SCRIPT_TAGS'   => 'Der Scanner hat keine Skript-Inhalte zum Bewerten gefunden.',
  'NO_SINKS_FOUND'   => 'Es wurden keine „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS-Sinks</a>“ gefunden.',
  'NO_SOURCES_FOUND' => 'Es wurden keine „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sources" title="DOMXSS-Sources">DOMXSS-Sources</a>“ gefunden.',
  'SECURE_FLAG_SET'  => 'Das Secure Flag ist gesetzt.',
  'SINKS_FOUND'      => 'Es wurden „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sinks" title="DOMXSS-Sinks">DOMXSS-Sinks</a>“ gefunden.',
  'SOURCES_FOUND'    => 'Es wurden „<a target="siwecos_wiki" href="https://siwecos.de/wiki/DOMXSS-Sources" title="DOMXSS-Sources">DOMXSS-Sources</a>“ gefunden.',

];
