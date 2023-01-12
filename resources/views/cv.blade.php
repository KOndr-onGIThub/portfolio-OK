@extends('layout_main')

@section('title',config('app.shortName')  . '-CV')

@section('links')
<link rel="stylesheet" href={{ asset('css/cv.css').'?'.env('APP_VERSION')}} type="text/css">

@endsection

@section('content')


    <section class="cv_header">
        <h1>Ondřej Kriška</h1>
        <h3>web application developer</h3>
    </section>
    <address class="cv_contactList">
        <a class="no_underline cv_phoneNo" href="tel:+420728697712">
            <i class="fa-solid fa-phone"></i></i> (+420) 728 697 712

        </a>
        <a class="no_underline cv_mail" href="mailto:info@itwebtech.cz">
            <i class="fa-solid fa-envelope"></i> info@itwebtech.cz
        </a>
        
        <a class="no_underline cv_linkedin" href="https://www.linkedin.com/in/ond%C5%99ej-kri%C5%A1ka-928ab1254/" 
        target="_blank" rel="noopener">
        <i class="fa fa-linkedin" aria-hidden="true"></i> linkedin
        </a>

        <a class="no_underline cv_web" href="https://itwebtech.cz/" 
        rel="noopener">
        <i class="fa fa-globe" aria-hidden="true"></i> web
        </a>
    </address>

    <section class="cv_perex">
        
        <img src="img/cv_ProfileFoto_preview.jpg" alt="profile photo for cv">
        
        <p>
            Na papírově programátorské pozici jsem dosud zaměstnán nebyl, 
            ale reálně se programování stalo součástí mé práce v r. 2020.
            <br>
            V té době jsem začal vyvýjet Laravel PHP aplikaci, 
            jako náhradu Excel aplikace, kterou jsem vytvořil dříve, ale již nedostávala svým požadavkům.
            <br>
            Nedostával jsem ale až tolik prostroru k programování, kolik bych chtěl. 
            <br>
            A proto v současnosti hledám jiné způsoby, jak se programování věnovat naplno.
        </p>
    </section>

    <article>
        <h3>Praxe:</h3>
        <h5>Specialista interní logistiky / Programátor</h5>
        <h6>2005 - současnost     Toyota Motor Manufacturing Czech Republic s.r.o.</h6>
        <p>
            Hlavní náplň: plánování a řízení toku materiálu 
            interní logistikou a zavádění nových aplikací a systémů do procesů.
            <br>
            Od r. 2020 <strong>programování Laravel aplikace</strong>, 
            pro rostoucí potřeby oddělení logistiky.
        </p>

        <h5>V praxi využívám:</h5>
        <p>
            <strong>PHP - Laravel - JS - jQuery - PostgreSQL - MySQL - Ajax - API - CSS - responsive design - HTML - GIT - GitHub</strong>
        </p>
    </article>

    <article>
        <h3>Odkazy na repo:</h3>

            <ul>
                <li>HCMS <a title="GitHub" href="https://github.com/KOndr-onGIThub/HCMS" target="_blank" rel="noopener">repo na GitHubu</a></li>
                <li>PORTFOLIO <a title="GitHub" href="https://github.com/KOndr-onGIThub/portfolio-OK" target="_blank" rel="noopener">repo na GitHubu</a> | <a title="link within this page" href="/">odkaz na aplikaci</a></li>
            </ul>

    </article>

    <article>
        <h3>Další dovednosti:</h3>
        <h5>Jazyky</h5>
        <ul>
            <li> Angličtina B1-B2</li>
        </ul>

        <h5>Ostatní</h5>
        <ul>
            <li>
                Zkušenosti mám z výrobního i office prostředí nadnárodní společnosti Toyota. (Projekty, Kaizen, Just in Time atp.)
            </li>
        </ul>
    </article>

    <article>
        <h3>Vzdělání:</h3>
        <h5>DELTA – střední škola informatiky a ekonomie, obor Podnikání a ekonomie</h5> 
        <h6>2015 - 2020     Zakončeno maturitní zkouškou</h6>
    </article>



@endsection
