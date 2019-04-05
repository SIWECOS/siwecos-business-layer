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

  // These are the en texts for
  'SCANNER_NAME' => 'Port Scanner',

  // Test: IRC
  'IRC_HEADLINE'      => 'Check for open IRC-Server Port',
  'IRC_POSITIVE'      => 'The IRC-port on your server is not active.',
  'IRC_NEGATIVE'      => 'The IRC-port on your server is active.',
  'IRC_DESCRIPTION'   => '<p>There port which is commonly used for the "IRC" program is active on your server. This program is usually used for a chat server. Criminal often use IRC to control their botnets. </p>',
  'IRC_SOLUTION_TIPS' => '<p>You should switch this service off if you do not require it. If you use IRC, you need not do anything. </p>',
  'IRC_LINK'          => 'https://siwecos.de/wiki/IRC-Port/EN',

  // Test: MSSQL
  'MSSQL_HEADLINE'      => 'Check for open MS-SQL server port',
  'MSSQL_POSITIVE'      => 'The MS-SQL-port on your server is not active.',
  'MSSQL_NEGATIVE'      => 'The MS-SQL-port on your server is active.',
  'MSSQL_DESCRIPTION'   => '<p>A Port is open on Your Server, which is usually used to Operate the MS-SQL Database. This potentially makes it possible to access the Database remotely. </p>',
  'MSSQL_SOLUTION_TIPS' => '<p>In most Cases, it is not wanted to be able to remotely establish a direct Connection to the Database. If this is not intended, you should switch off remote access. </p>',
  'MSSQL_LINK'          => 'https://siwecos.de/wiki/MSSQL-Port/EN',

  // Test: MYSQL
  'MYSQL_HEADLINE'      => 'Check for open MySQL server port',
  'MYSQL_POSITIVE'      => 'The MySQL-port on your server is not active.',
  'MYSQL_NEGATIVE'      => 'The MySQL-port on your server is active.',
  'MYSQL_DESCRIPTION'   => '<p>A Port is open on Your Server, which is usually used to Operate the MySQL Database. This potentially makes it possible to access the Database remotely. </p>',
  'MYSQL_SOLUTION_TIPS' => '<p>In most Cases, it is not wanted to be able to remotely establish a direct Connection to the Database. If this is not intended, you should switch off remote access. </p>',
  'MYSQL_LINK'          => 'https://siwecos.de/wiki/MYSQL-Port/EN',

  // Test: RDP
  'RDP_HEADLINE'      => 'Check on open RDP server Port',
  'RDP_POSITIVE'      => 'The RDP Port on Your Server is not open.',
  'RDP_NEGATIVE'      => 'The RDP Port on Your Server is open.',
  'RDP_DESCRIPTION'   => '<p>On Your Server, a Port is open, which is usually used for the Protocol "RDP." With RDP, it is possible to remotely control Computers over the Network. </p>',
  'RDP_SOLUTION_TIPS' => '<p>If You don\'t need this Service, You should simply turn it off as it poses a Security Risk. If they really use RDP, there is nothing to be done. </p>',
  'RDP_LINK'          => 'https://siwecos.de/wiki/RDP-Port/EN',

  // Test: TELNET
  'TELNET_HEADLINE'      => 'Check on open Telnet server Port',
  'TELNET_POSITIVE'      => 'The Telnet Port on Your Server is not open.',
  'TELNET_NEGATIVE'      => 'The Telnet Port on Your Server is open.',
  'TELNET_DESCRIPTION'   => '<p>A Port is open on Your Server, which is usually used for the Telnet Program. Telnet is a Service that gives Users direct Access to other Computers. With this Program, you can potentially remotely control Your Server (after entering a Username and password). The Program does not encrypt transmitted Data, so an Attacker can simply spy on the Credentials. </p>',
  'TELNET_SOLUTION_TIPS' => '<p>If You don\'t need this Service, You should simply turn it off as it poses a Security Risk. If so, You should switch to the secure SSH service, which Is used to transmit data encrypted. </p>',
  'TELNET_LINK'          => 'https://siwecos.de/wiki/TELNET-Port/EN',

  // Result texts follow

];
