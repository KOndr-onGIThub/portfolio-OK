<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google" content="notranslate"> {{-- nevyskakovani nabidky prekladu --}}

    <meta name="description" content="Osobní portfolio">
    <meta name="author" content="Ondrej Kriska">

    <link rel="shortcut icon" href="{{ asset('img/business_man_icon_black_32x32px.png').'?'.env('APP_VERSION')}} }}">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href={{ asset('css/layoutStyles.css').'?'.env('APP_VERSION')}} type="text/css">
    <link rel="stylesheet" href={{ asset('fonts\fontawesome-free-6.2.1-web\css\all.css').'?'.env('APP_VERSION')}}>
    <script src="https://kit.fontawesome.com/d904f22f50.js" crossorigin="anonymous"></script>
    
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    {{-- <link rel="stylesheet" href={{ asset('fonts\fontawesome-free-6.2.1-web\css\fontawesome.min.css').'?'.env('APP_VERSION')}}> --}}

    @yield('links')

    <!-- JS -->
    <script src="js/side_bar.js"></script>


    <title>@yield('title', env('APP_NAME'))</title>
</head>
<body>
    <div class="main_wraper">
        <aside class="side_bar" id="side_bar">
            <header class="boder_heder">
            <a href="/" class="no_underline">
                <img src="img/business_man_icon_grey.png" alt="avatar" />
                <h3>Ondra Kriška</h3>
            </a>
            </header>

            <nav class="side_nav">
                <ul id="navUl">
                    <li><a href="/" class="no_underline">
                        <i class="fa-solid fa-house"></i><br class="break">
                            Domů
                        </a>
                    </li>
                    <li><a href="/kontakty" class="no_underline">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i><br class="break">
                            Kontakty
                        </a>
                    </li>
                    <li><a href="/cv" class="no_underline">
                        <i class="fa-sharp fa-solid fa-heart-pulse"></i><br class="break">
                            Životopis (CV)
                    </a></li>
                </ul>
            </nav>
            
            
                <a href="#side_bar" class="no_underline">
                    <div class="go_to_top">
                        <i class="fa fa-chevron-up"></i> <span class="nav_descr_horisont">MENU</span><i class="fa fa-chevron-up"></i>
                    </div> 
                </a>
             

        </aside>
        <aside class="aside_bar">
            <div class="skryj" title="zobrazit/skrýt menu">
                    <div class="chevron_right"><i class="fa fa-chevron-right"></i></div>
                    <div class="chevron_left" hidden><i class="fa fa-chevron-left"></i></div>
                    <div class="nav_descr">
                        M<br>
                        E<br>
                        N<br>
                        U<br>
                    </div>
                    <div class="chevron_right"><i class="fa fa-chevron-right"></i></div>
                    <div class="chevron_left" hidden><i class="fa fa-chevron-left"></i></div>
            </div>
        </aside> 
        
        <main class="mine_content">
            @yield('content', 'žádný obsah nenalezen')
        </main>

    </div>
    <footer class="">
        <div class="act-date">
            <span>Dnes je:</span>
            <span>{{$dateTime}}</span>
        </div>
        <div class="app-ver">
            <span>Poslední aktualizace této stránky:</span>
            <span>{{env('APP_LAST_UPDATE', 'viz .env')}} na verzi {{env('APP_VERSION', 'viz .env')}}</span>
        </div>
        <div class="versions-info">
            <span>Postaveno na Laravel:</span>
            <span>v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span>
        </div>

    </footer>
</body>
</html>