@extends('layout_main')

@section('title',config('app.shortName')  . '-Home')

@section('links')
<link rel="stylesheet" href={{ asset('css/home.css').'?'.env('APP_VERSION')}} type="text/css">

@endsection

@section('content')

<h1>be developer</h1>

<article>
    <h3>Baví vás svět kolem programování?</h3>
    <p>
        Mě ano a proto jsem se rozhodl postavit tuto webovku a i s její pomocí <strong>změnit kariéru v developera</strong>.
    </p>
    <p>
        Pokud je tu někdo podobný, budu rád když mě <a href="{{ url('kontakty') }}">kontaktuješ</a> a možná vymyslíme nějakou win-win spolupráci.
        Vím, že v oboru je i spousta ochotných lidí na seniornějších pozicích, kteří možná mohou nabídnou oboustraně výhodnou spolupráci.
    </p>
</article>
<article>
    <h3>Na čem jsem již dělal a dělám...</h3>
    <p>
        PHP - Laravel - JS - jQuery - PostgreSQL - MySQL - Ajax - API - CSS - responsive design - HTML - GIT - GitHub
    </p>
</article>
<article>
    <h3>Na čem budu dělat...</h3>
    <p> 
        <i>To definitivně nelze dopředu vědět, ale "chci dělat" není jaksi dost motivující a zavazující :) </i><br>
        React - Angular - Java, ...
    </p>
</article>
<article>
    <div class="my_signature">
        Ondřej Kriška 
    </div>
</article>


@endsection
