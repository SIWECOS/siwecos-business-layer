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
  'SCANNER_NAME' => 'Port Scanner',

  // Test: IRC
  'IRC_HEADLINE'      => 'Überprüfung auf offenen IRC-Server Port',
  'IRC_POSITIVE'      => 'Der IRC Port auf Ihrem Server ist nicht offen.',
  'IRC_NEGATIVE'      => 'Der IRC Port auf Ihrem Server ist offen.',
  'IRC_DESCRIPTION'   => '<p>Auf Ihrem Server ist ein Port offen, welcher üblicherweise für das Programm „IRC“ verwendet wird. Mit diesem Programm wird normalerweise ein Chat-Server betrieben. IRC wird häufig von Kriminellen missbraucht, um ihre Botnetze zu kontrollieren. </p>',
  'IRC_SOLUTION_TIPS' => '<p>Wenn Sie diesen Dienst nicht benötigen, sollten Sie ihn einfach abschalten. Falls Sie IRC wirklich benutzen, ist nichts zu tun. </p>',
  'IRC_LINK'          => 'https://siwecos.de/wiki/IRC-Port/DE',

  // Test: MSSQL
  'MSSQL_HEADLINE'      => 'Überprüfung auf offenen MS-SQL-Server Port',
  'MSSQL_POSITIVE'      => 'Der MS-SQL Port auf Ihrem Server ist nicht offen.',
  'MSSQL_NEGATIVE'      => 'Der MS-SQL Port auf Ihrem Server ist offen.',
  'MSSQL_DESCRIPTION'   => '<p>Auf Ihrem Server ist ein Port offen, welcher üblicherweise für das Betreiben der Datenbank MS-SQL verwendet wird. Damit ist es potenziell möglich, auf die Datenbank aus der Ferne zuzugreifen. </p>',
  'MSSQL_SOLUTION_TIPS' => '<p>In den meisten Fällen ist es nicht erwünscht, dass man aus der Ferne eine direkte Verbindung zur Datenbank aufbauen kann. Falls dies nicht von Ihnen beabsichtigt ist, sollten sie den Remote-Zugang abschalten. </p>',
  'MSSQL_LINK'          => 'https://siwecos.de/wiki/MSSQL-Port/DE',

  // Test: MYSQL
  'MYSQL_HEADLINE'      => 'Überprüfung auf offenen MySQL-Server Port',
  'MYSQL_POSITIVE'      => 'Der MySQL Port auf Ihrem Server ist nicht offen.',
  'MYSQL_NEGATIVE'      => 'Der MySQL Port auf Ihrem Server ist offen.',
  'MYSQL_DESCRIPTION'   => '<p>Auf Ihrem Server ist ein Port offen, welcher üblicherweise für das Betreiben der Datenbank MySQL verwendet wird. Damit ist es potenziell möglich, auf die Datenbank aus der Ferne zuzugreifen. </p>',
  'MYSQL_SOLUTION_TIPS' => '<p>In den meisten Fällen ist es nicht erwünscht, dass man aus der Ferne eine direkte Verbindung zur Datenbank aufbauen kann. Falls dies nicht von ihnen beabsichtigt ist, sollten sie den Remote-Zugang abschalten. </p>',
  'MYSQL_LINK'          => 'https://siwecos.de/wiki/MYSQL-Port/DE',

  // Test: RDP
  'RDP_HEADLINE'      => 'Überprüfung auf offenen RDP-Server Port',
  'RDP_POSITIVE'      => 'Der RDP Port auf Ihrem Server ist nicht offen.',
  'RDP_NEGATIVE'      => 'Der RDP Port auf Ihrem Server ist offen.',
  'RDP_DESCRIPTION'   => '<p>Auf Ihrem Server ist ein Port offen, welcher üblicherweise für das Protokoll „RDP“ verwendet wird. Mit RDP ist es möglich, Rechner über das Netzwerk fernzusteuern.   </p>',
  'RDP_SOLUTION_TIPS' => '<p>Wenn Sie diesen Dienst nicht benötigen, sollten Sie ihn einfach abschalten, da er ein Sicherheitsrisiko darstellt. Falls sie RDP wirklich benutzen, ist nichts zu tun. </p>',
  'RDP_LINK'          => 'https://siwecos.de/wiki/RDP-Port/DE',

  // Test: TELNET
  'TELNET_HEADLINE'      => 'Überprüfung auf offenen Telnet-Server Port',
  'TELNET_POSITIVE'      => 'Der Telnet Port auf Ihrem Server ist nicht offen.',
  'TELNET_NEGATIVE'      => 'Der Telnet Port auf Ihrem Server ist offen.',
  'TELNET_DESCRIPTION'   => '<p>Auf Ihrem Server ist ein Port offen, welcher üblicherweise für das Programm „Telnet“ verwendet wird. Telnet ist ein Dienst, über den Nutzer direkten Zugriff auf andere Computer erhalten. Mit diesem Programm kann man Ihren Server potenziell fernsteuern (nachdem man einen Benutzernamen und ein Passwort eingegeben hat). Das Programm verschlüsselt übertragene Daten nicht, weswegen ein Angreifer die Zugangsdaten einfach ausspähen kann. </p>',
  'TELNET_SOLUTION_TIPS' => '<p>Wenn Sie diesen Dienst nicht benötigen, sollten Sie ihn einfach abschalten, da er ein Sicherheitsrisiko darstellt. Falls doch, sollten Sie zu dem sicheren Dienst SSH wechseln, mit welchem Daten verschlüsselt übermittelt werden. </p>',
  'TELNET_LINK'          => 'https://siwecos.de/wiki/TELNET-Port/DE',

  // Result texts follow

];
