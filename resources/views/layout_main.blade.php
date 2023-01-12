<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google" content="notranslate"> {{-- nevyskakovani nabidky prekladu --}}

    <meta name="description" content="ITWEBTECH">
    <meta name="author" content="Ondrej Kriska">

    <link rel="shortcut icon" href="{{ asset('img/business_man_icon_black_32x32px.png').'?'.env('APP_VERSION')}} }}">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href={{ asset('css/layoutStyles.css').'?'.env('APP_VERSION')}} type="text/css">
    <link rel="stylesheet" href={{ asset('fonts\fontawesome-free-6.2.1-web\css\all.css')}}>
    <script src="https://kit.fontawesome.com/d904f22f50.js" crossorigin="anonymous"></script>
    
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu+Mono&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


    @yield('links')

    <!-- JS -->
    {{-- <script src="js/side_bar.js"></script> --}}


    <title>@yield('title', env('APP_NAME'))</title>
</head>
<body id="top">

    <div class="wrap_no_footer">
        <div class="boder_header-nav_bar">
            <header class="header">
                <a href="{{ url('/') }}" class="no_underline">
                    <span class="go_home">
                        <img src="img/business_man_icon_grey.png" alt="avatar" />
                        <span>it <br> web <br> tech</span>
                    </span>
                </a>
            </header>

            <nav class="nav_bar">
                    <span><a href="{{ url('/') }}" class="no_underline" title="na hlavní stránku">
                        <i class="fa-solid fa-house"></i>{{-- <br class="break"> --}}
                            Domů
                        </a>
                    </span>
                    <span><a href="{{ url('kdeseucim') }}" class="no_underline" title="mnou používané zdroje s obsahem pro programátory">
                        <i class="fa-sharp fa-solid fa-graduation-cap"></i>{{-- <br class="break"> --}}
                            Kde se učit
                        </a>
                    </span>
                    <span><a href="{{ url('projects') }}" class="no_underline" title="příklady projektů na kterých jsme dělal / dělám">
                        <i class="fa-solid fa-horse-head"></i>{{-- <br class="break"> --}}
                            Projekty
                        </a>
                    </span>
                    <span><a href="{{ url('kontakty') }}" class="no_underline" title="kontaktní formulář a další kontaktní informace">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>{{-- <br class="break"> --}}
                            Kontakty
                        </a>
                    </span>
                    <span><a href="{{ url('cv') }}" class="no_underline" title="stručný profesní životopis">
                        <i class="fa-sharp fa-solid fa-heart-pulse"></i>{{-- <br class="break"> --}}
                            Životopis (CV)
                    </a></span>
            </nav>
        </div>



        <nav class="nav_panel">
            <a class="no_underline" href="#top">
                    <span class="chevron_up"><i class="fa fa-chevron-up"></i></span>
                    <span class="nav_descr">{{env('APP_NAME')}}</span>
                    <span class="chevron_up"><i class="fa fa-chevron-up"></i></span>
                </a>
        </nav> 
    

        <main class="mine_content">

          @yield('content', 'žádný obsah nenalezen')

        </main>

    </div>

    <footer class="">
        <div class="footer_contacts">

            <span>
                <a href="{{ url('kontakty') }}" class="no_underline" title="kontaktní formulář a další kontaktní informace">
                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    TEXT ME
                    </a>
            </span>
            <span>
                <a href="tel:+420728697712" class="no_underline">
                    <i class="fa-solid fa-phone"></i></i> 
                    (+420) 728 697 712
                </a>
            </span>
        </div>
        <div class="app-ver">
            <span>Page updated:</span>
            <span>{{env('APP_LAST_UPDATE', 'viz .env')}} v{{env('APP_VERSION', 'viz .env')}}</span>
        </div>
        <div class="versions-info">
            <span>Built in Laravel:</span>
            <span>v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span>
        </div>

    </footer>


</body>
</html>