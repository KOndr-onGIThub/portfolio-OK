@extends('layout_main')

@section('title','CV')

@section('links')
<link rel="stylesheet" href="css/cv.css" type="text/css">
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
            Programování mě částečně provází celým dosavadním životem, ač jsem dosud na vyloženě programátorské pozici nepracoval. Jednoduché HTML stránky jsem tvořil již na škole a poté v prvním zaměstnání z dlouhé chvíle jako pomocný nástroj pro starší kolegy bez znalosti PC.
            Nedávno se mi naskytla příležitost napsat PHP aplikaci, kterou jsem dříve vytvořil ve VBA v Excelu a která již nedostávala svým požadavkům.
            Od té doby je pro mě programování nejen pracovní cíl.
        </p>
    </section>

    <article>
        <h3>Praxe:</h3>
        <h5>Specialista interní logistiky / Programátor</h5>
        <h6>2005 - současnost     Toyota Motor Manufacturing Czech Republic s.r.o.</h6>
        <p>
            Mou hlavní náplní je/bylo plánování a řízení toku materiálu 
            interní logistikou a zavádění nových aplikac9 a systémů do procesů.
            V r. 2020 jsem dostal možnost <strong>naprogramovat PHP aplikaci</strong>, 
            která dopomůže k hladkému přechodu výroby na nový model aut. 
            A to díly tomu, že umožní mnohonásobně rychlejší a přesnější 
            řízení dodávek materiálu v krizových situacích.
            <br>
            Aplikace se trvale využívá nadále.
            <br>
            Pracoval jsme na ní kompletně sám jen s občasnou podporou od zkušeného kolegy z IS.
        </p>
    </article>

    <article>
        <h3>Odkazy na repo:</h3>

            <ul>
                <li><a title="link to GitHub" href="https://github.com/KOndr-onGIThub/HCMS">HCMS</a>(Hot Call Management system)</li>
                <li><a title="link within this page" href="/">Portfilio</a></li>
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
