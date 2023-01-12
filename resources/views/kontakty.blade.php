@extends('layout_main')

@section('title',config('app.shortName')  . '-Kontakty')

@section('links')
<link rel="stylesheet" href={{ asset('css/kontakty.css').'?'.env('APP_VERSION')}} type="text/css">

@endsection

@section('content')

<div class="kontakty_content">
    <section class="kontakty_header">
        <h1>kontakty</h1>
        <p>Předat vzkaz, dotaz, nahlásit chybu na stránce apod. můžete pomocí jedné z metod níže.</p>
    </section>

    <article class="kontact_form">
        <h3>kontaktní formulář</h3>
        <form action="kontakty" method="POST">
            @csrf

            
            <div class="form_group">
                <label for="email">Vaše emailová adresa</label>
                <input type="email" name="email" id="email" class="input_email" value="{{ old('email') }}" required />
            </div>
           

            <div class="form_group">
                <label for="message">Zpráva (min 50 znaků)</label>
                <textarea name="message" id="message" rows="10" class="textarea_message" required minlength="50">{{ old('message') }}</textarea>
            </div>

            <div class="form_group">
                <label for="year">Aktuální rok (antispam)</label>
                <input type="number" name="year" id="year" class="input_atispam" required />
            </div>

            <div class="form_group">
                <button type="submit" class="">Odeslat</button>
            </div>
        
        </form>
    </article>
    <article>
        <h3>e-mail</h3>
        <a class="contact_mail" href="mailto:info@itwebtech.cz">
            <i class="fa fa-envelope"></i> info@itwebtech.cz
        </a>

    </article>
    <article>
        <h3>linkedin</h3>
        <a class="contact_linkedin" href="https://www.linkedin.com/in/ond%C5%99ej-kri%C5%A1ka-928ab1254/" 
        target="_blank" rel="noopener">
        <i class="fa fa-linkedin"></i> linkedin
        </a>

    </article>
</div>

@endsection
