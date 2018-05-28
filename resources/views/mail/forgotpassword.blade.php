@component('mail::message')
<p>Sehr {{{ $salutation_id === 1 ? "geehrter Herr" : "geehrte Frau" }}} {{ $last_name }},</p>

<p>Wir haben eine Anfrage zum Zurücksetzen Ihres Passwortes für Ihren Account {{ $email }} erhalten.</p>

<p>Sie können Ihr Passwort über den untenstehenden Link zurücksetzen:</p>

@component('mail::button', [ 'url' => $reseturl, 'color' => 'red' ])
Passwort zurücksetzen
@endcomponent

<p>Wenn Sie dies nicht selbst angestoßen haben, sind keine weiteren Maßnahmen nötig.</p>

<p>Bitte antworten Sie nicht an diese Adresse.</p>

<p>Mit freundlichen Grüßen,</p>
<p>Ihr SIWECOS Team</p>
@component('mail::footer')
<p>eco - Verband der Internetwirtschaft e.V.</p>
<p>Lichtstraße 43h</p>
<p>50825 Köln, Deutschland</p>
<br>
<p>Impressum: https://siwecos.de/impressum/</p>
<p>eco – Verband der Internetwirtschaft e.V.</p>
<br>
<p>Geschäftsführer: Harald A. Summa</p>
<p>Vorstand: Oliver Süme (Vorsitzender), Klaus Landefeld (stv. Vorsitzender), Felix Höger, Prof. Dr. Norbert
Pohlmann</p>
<p>Vereinsregister: Amtsgericht Köln, VR 14478</p>
<br>
<p>Sitz des Vereins: Köln</p>
<br>
<p>SIWECOS.de - Auf der sicheren Seite</p>
<br>
<p>SIWECOS ist ein Gemeinschaftsprojekt vom eco – Verband der Internetwirtschaft e. V. und der Ruhr-Universität
Bochum
mit Unterstützung des CMS Garden e.V. und des Bochumer IT-Security Startups Hackmanit und steht für „Sichere
Webseiten und Content Management Systeme“.<br>
Das Projekt wird gefördert durch das Bundesministerium für Wirtschaft und Energie (BMWI) und hat zum Ziel
die
Webseitensicherheit für kleine und mittelständische Unternehmen langfristig zu erhöhen.<br>
Siwecos bietet einen Webseitenscanner, der Sicherheitslücken zuverlässig aufdeckt, Filterregeln für Hosting
Anbieter, das Webangriffe frühzeitig identifiziert, sowie Aufklärungs- und Hilfsangebote für kleine und
mittelständische Unternehmen beim Betrieb von Webseiten mit Content Management Systemen.</p>
@endcomponent
@endcomponent
