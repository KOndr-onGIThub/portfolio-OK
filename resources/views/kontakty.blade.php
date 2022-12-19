@extends('layout_main')

@section('title',config('app.shortName')  . '-Kontakty')

@section('links')
<link rel="stylesheet" href={{ asset('css/kontakty.css').'?'.env('APP_VERSION')}} type="text/css">

@endsection

@section('content')

    <h1>Kontakt</h1>

    <form action="kontakty" method="POST">
        @csrf

        <div class="">
            <div class="">
                <label for="email">Vaše emailová adresa</label>
                <input type="email" name="email" id="email" class="" value="{{ old('email') }}" required />
            </div>
        </div>

        <div class="">
            <label for="message">Zpráva (min 50 znaků)</label>
            <textarea name="message" id="message" rows="10" class="" required minlength="50">{{ old('message') }}</textarea>
        </div>

        <div class="">
            <label for="year">Aktuální rok (antispam)</label>
            <input type="number" name="year" id="year" class="" required />
        </div>

        <button type="submit" class="">Odeslat</button>
    </form>

@endsection
