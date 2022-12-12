<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google" content="notranslate" /> {{-- nevyskakovani nabidky prekladu --}}

    <meta name="description" content="Osobní portfolio" />
    <meta name="author" content="Jméno autora" />

    <link rel="shortcut icon" href="{{ asset('img/business_man_icon_black_32x32px.png') }}">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/layoutStyles.css" type="text/css">
    {{-- <link rel="stylesheet" href="fonts\fontawesome-free-6.2.1-web\css\fontawesome.min.css"> --}}
    <link rel="stylesheet" href="fonts\fontawesome-free-6.2.1-web\css\all.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    @yield('links')

    <!-- JS -->
    <script src="js/side_bar.js"></script>



    <title>@yield('title', env('APP_NAME'))</title>
</head>
<body>
    <div class="main_wraper">
        <aside class="side_bar">
            <header class="boder_heder">
            <a href="/" class="no_underline">
                <img src="img/business_man_icon_grey.png" alt="avatar" />
                <h3>Ondra Kriška</h3>
            </a>
            </header>

            <nav class="side_nav">
                <ul>
                    <li><a href="#1" class="no_underline">
                            <i class="fa fa-home fa-fw" aria-hidden="true"></i>Domů
                        </a>
                    </li>
                    <li><a href="/cv" class="no_underline">Životopis (CV)</a></li>
                    <li><a href="#3" class="no_underline"></a><i class="fa fa-twitter"></i></li>
                    <li><a href="#4" class="no_underline"></a></li>
                </ul>
            </nav>       
        </aside>
        <aside class="aside_bar">
            <div class="skryj" title="zobrazit/skrýt menu">
                <div id="chevron_right"><i class="fa fa-chevron-right"></i></div>
                <div id="chevron_left" hidden><i class="fa fa-chevron-left"></i></div>
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