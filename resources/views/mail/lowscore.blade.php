@component('mail::layout')
@slot('header')
@component('mail::header', ['url' => config('siwecos.main_url') ])
SIWECOS
@endcomponent
@endslot
Sehr {{{ $salutation_id === 1 ? "geehrter Herr" : "geehrte Frau" }}} {{ $last_name }},

Mit dieser Mail informieren wir Sie über das aktuelle Scan Ergebnis für Ihre Webseite.

Eine detaillierte Aufstellung der einzelnen Tests und den ausführlichen Sicherheitsbericht für Ihre Webseite finden Sie in der beigefügten PDF Datei.


Mit freundlichen Grüßen,

Ihr SIWECOS Team
@slot('footer')
@component('mail::footer')
eco - Verband der Internetwirtschaft e.V.<br />
Lichtstraße 43h<br />
50825 Köln, Deutschland

Impressum: https://siwecos.de/impressum/<br />
eco – Verband der Internetwirtschaft e.V.

Hauptgeschäftsführer: Harald A. Summa<br />
Geschäftsführer: Alexander Rabe<br />
Vorstand: Oliver Süme (Vorsitzender), Klaus Landefeld (stv. Vorsitzender), Felix Höger, Prof. Dr. Norbert Pohlmann<br />
Vereinsregister: Amtsgericht Köln, VR 14478

Sitz des Vereins: Köln

SIWECOS.de - Auf der sicheren Seite

SIWECOS ist ein Gemeinschaftsprojekt vom eco – Verband der Internetwirtschaft e. V. und der Ruhr-Universität Bochum mit Unterstützung des CMS Garden e.V. und des Bochumer IT-Security Startups Hackmanit und steht für „Sichere Webseiten und Content Management Systeme“.<br />
Das Projekt wird gefördert durch das Bundesministerium für Wirtschaft und Energie (BMWI) und hat zum Ziel die Webseitensicherheit für kleine und mittelständische Unternehmen langfristig zu erhöhen.<br />
SIWECOS bietet einen Webseitenscanner, der Sicherheitslücken zuverlässig aufdeckt, Filterregeln für Hosting Anbieter, das Webangriffe frühzeitig identifiziert, sowie Aufklärungs- und Hilfsangebote für kleine und
mittelständische Unternehmen beim Betrieb von Webseiten mit Content Management Systemen.<br />
@endcomponent
@endslot
@endcomponent
