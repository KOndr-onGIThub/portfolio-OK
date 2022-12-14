@extends('layout_main')

@section('title',config('app.shortName')  . '-CV')

@section('links')
<link rel="stylesheet" href={{ asset('css/cv.css').'?'.env('APP_VERSION')}} type="text/css">

@endsection

@section('content')


    <header class="cv_header">
        <h1>Ondřej Kriška</h1>
        <h3>junior developer PHP, JS, HTML</h3>
    </header>
    <address class="cv_contactList">
        <a class="cv_phoneNo" href="tel:+420728697712">
            <i class="fa fa-phone"></i> (+420) 728 697 712

        </a>
        <a class="cv_mail" href="mailto:kriska.ondrej@seznam.cz">
            <i class="fa fa-envelope"></i> kriska.ondrej@seznam.cz
        </a>
        
        <a class="cv_linkedin" href="https://www.linkedin.com/in/ond%C5%99ej-kri%C5%A1ka-928ab1254/" 
        target="_blank" rel="noopener">
        <i class="fa fa-linkedin"></i> linkedin
        </a>
    </address>

    <section class="cv_perex">
        
        <img src="img/cv_ProfileFoto_preview.jpg" alt="profile photo for cv">
        
        <p>
            Na papírově programátorské pozici jsem dosud nepracoval, 
            ale reálně se programování stalo součástí mé práce v r. 2020.
            <br>
            V té době jsem se nabídl, že vyvinu PHP aplikaci, 
            kterou jsem dříve vytvořil ve VBA v Excelu a která již nedostávala svým požadavkům.
            <br>
            Baví mě to a chtěl bych plně pracovat jako developer a dále se v oboru zlepšovat. 
        </p>
    </section>

    <article>
        <h3>Praxe:</h3>
        <h5>Specialista interní logistiky / Programátor</h5>
        <h6>2005 - současnost     Toyota Motor Manufacturing Czech Republic s.r.o.</h6>
        <p>
            Mou hlavní náplní je/bylo plánování a řízení toku materiálu 
            interní logistikou a zavádění nových aplikací a systémů do procesů.
            V r. 2020 jsem dostal možnost <strong>naprogramovat PHP aplikaci</strong>, 
            která dopomůže k hladkému přechodu výroby na nový model aut. 
            A to díky tomu, že umožní mnohonásobně rychlejší a efektivnější 
            řízení dodávek materiálu v krizových situacích.
            <br>
            Aplikace se trvale využívá nadále a to nejen k původnímu účelu.
            <br>
            Pracoval jsme na aplikaci sám jen s občasnou podporou od zkušeného kolegy z IS.
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
