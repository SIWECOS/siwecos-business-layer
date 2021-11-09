@component('mail::layout')
@slot('header')
@component('mail::header', ['url' => config('siwecos.main_url') ])
SIWECOS
@endcomponent
@endslot
Guten Tag,

vielen Dank für die Aktualisierung Ihrer E-Mail Adresse.

Um Ihre neue E-Mail Adresse zu aktivieren, klicken Sie bitte auf untenstehenden Link

@component('mail::button', [ 'url' => $activateurl, 'color' => 'red' ])
Aktivierung
@endcomponent

Bitte antworten Sie nicht an diese Adresse.

Mit freundlichen Grüßen,

Ihr SIWECOS-Team
@slot('footer')
@component('mail::footer')
CMS Garden e. V., Osloer Str. 17, 13359 Berlin, Germany

Impressum: https://www.cms-garden.org/impressum/

Geschäftsführender Vorstand: Stephan Luckow (Vorsitzender), Meike Jung, Maik Derstappen, 
Vereinsregister: Amtsgericht Berlin-Charlottenburg, VR 33004 B

SIWECOS steht für „Sichere Webseiten und Content-Management-Systeme“ und hilft Website-Betreiber*innen, Sicherheitslücken auf ihren Webseiten zu erkennen, zu verstehen und zu beheben. 
Das Projekt wurde initial gefördert durch das Bundesministerium für Wirtschaft und Energie (BMWI). 
@endcomponent
@endslot
@endcomponent
