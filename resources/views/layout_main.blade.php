<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google" content="notranslate" /> {{-- nevyskakovani nabidky prekladu --}}

    <meta name="description" content="Osobní portfolio" />
    <meta name="author" content="Jméno autora" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="stylesheet" href="css/layoutStyles.css" type="text/css">
    <link rel="stylesheet" href="fonts\fontawesome-free-6.2.1-web\css\fontawesome.min.css">
    <link rel="stylesheet" href="fonts\fontawesome-free-6.2.1-web\css\all.css">
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- JS -->
    <script src="js/side_bar.js"></script>



    <title>@yield('title', env('APP_NAME'))</title>
</head>
<body>
    <div class="main_wraper">
        <sidebar class="side_bar">
            <header class="boder_heder">
            <a href="/" class="no_underline">
                <img src="img/business_man_icon_grey.png" alt="avatar" />
                <h3>Ondra Kriška</h3>
            </a>
            </header>

            <nav class="side_nav">
                <ul>
                    <li><a href="#1" class="no_underline">Domů</a></li>
                    <li><a href="/cv" class="no_underline">Životopis (CV)</a></li>
                    <li><a href="#3" class="no_underline"></a></li>
                    <li><a href="#4" class="no_underline"></a></li>
                </ul>
            </nav>       
        </sidebar>
        <asid class="aside_bar">
            <div class="skryj" title="zobrazit/skrýt menu">
                <div id="chevron_right"><i class="fa fa-chevron-right"></i></div>
                <div id="chevron_left" hidden><i class="fa fa-chevron-left"></i></div>
            </div>
        </asid> 
        
        <main class="mine_content">
            @yield('content', 'žádný obsah nenalezen')
        </main>
    </div>
    <footer class="flex_child">
        <span class="act-date">Dnes je: {{$dateTime}} || </span>
        <span>Poslední aktualizace z  {{env('APP_LAST_UPDATE', 'viz .env')}} na verzi {{env('APP_VERSION', 'viz .env')}} || </span>
        <span class="versions-info">Postaveno na Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span>

    </footer>
</body>
</html>