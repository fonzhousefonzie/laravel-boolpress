@component('mail::message')

<h1>Benvenuto {{$user->name}}!</h1>

<p>Spero vivamente che questa mail ti arrivi!</p>

@component('mail::button', ['url' => 'https://fonzhousefonzie.com'])
Visita il mio sito!
@endcomponent

Grazie,<br>
{{ config('app.name') }}
@endcomponent
