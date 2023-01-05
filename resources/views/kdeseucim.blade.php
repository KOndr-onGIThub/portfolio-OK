@extends('layout_main')

@section('title',config('app.shortName')  . '-kde se ucim')

@section('links')
<link rel="stylesheet" href={{ asset('css/kdeseucim.css').'?'.env('APP_VERSION')}} type="text/css">

@endsection

@section('content')

<h1>tyto zdroje mohu vřele doporučit</h1>

<article>
    <h3><a href="https://www.itnetwork.cz/" target="_blank" rel="noopener"> itnetwork </a></h3>
    <p>
       Obrovské množství kurzů k mnoha jazykům. 
       Školení, workshopy, články, atd. 
       Zkrátka vše nejen o kódu ale celkově kolem IT světa.
       Dost je toho zdarma a zbytek za pusu.
    </p>
</article>

<article>
    <h3><a href="https://skillmea.cz/lektor/roman-hraska?gclid=CjwKCAiAh9qdBhAOEiwAvxIokxe-caKvbZbMwiLDTjQc-YUGFgBIFJ6tjGlcYHPgPw55-cSzWHjg6xoCuo0QAvD_BwE" target="_blank" rel="noopener"> yablko </a></h3>
    <p>
        Převážně kurzy k webovým technologiím, ale také spoustu rad jak uspět na pohovoru apod.
        U jeho kurzů určitě neusnete a bude vás to bavit.
        Najdete ho na více kanálech včetně youtube.
        Také má dost obsahu zdarma, zbytek např. za 2 kávy ;)
    </p>
</article>

<article>
    <h3><a href="https://junior.guru/" target="_blank" rel="noopener"> junior.guru </a></h3>
    <p>
        Příručka pro juniory je geniální. 
        Najdeš tu informace, motivaci, rady. 
        Kromě toho ale i parťáky, podporu, kontakty a pracovní nabídky.
    </p>
</article>

<article>
    <h3> a další </h3>
    <p>
        google<br>
        oficiální dokumentace k danému jazyku<br>
        stack overflow<br>
        youtube<br>
        kradu cizí kód ;)<br>
        praxe, praxe, praxe ...<br>
        Kdykoli je příležitost, tak vylepšuji aplikaci, kterou jsem naprogramoval jako specialista logistiky.<br>
    </p>
</article>

@endsection
