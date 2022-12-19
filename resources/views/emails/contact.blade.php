@component('mail::message')


    Zpráva z kontaktního formuláře aplikace **{{ config('app.name') }}** na (`{{ config('app.url') }}`).

    Obsah zprávy:

@component('mail::panel')
{{ $message }}
@endcomponent




Thanks,<br>
{{ config('app.name') }}
@endcomponent

