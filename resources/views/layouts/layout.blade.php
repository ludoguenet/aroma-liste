<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aroma-Liste</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        @yield('extra-css')
        <style type="text/css">
            html {
                position: relative;
                min-height: 100%;
            }
            body {
                margin-bottom: 60px; /* Margin bottom by footer height */
            }
            footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 60px; /* Set the fixed height of the footer here */
                line-height: 60px; /* Vertically center the text there */
                background-color: #f5f5f5;
            }
        </style>
    </head>
    <body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <a class="navbar-brand" href="{{ route('recipe.home') }}"><i class="fas fa-leaf"></i> Aroma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{ route('recipe.home') }}"><i class="fas fa-home"></i> Accueil</a>
            <a class="nav-item nav-link" href="{{ route('recipe.show') }}"><i class="fas fa-flask"></i> Recettes</a>
            <a class="nav-item nav-link" href="#"><i class="fas fa-cookie-bite"></i> Produits</a>
            <a class="nav-item nav-link" href="#"><i class="fas fa-mail-bulk"></i> Contact</a>
            </div>
        </div>
        </nav>
        <div class="container">
            <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4">
                @include('parts.sidebar')
            </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <span class="text-muted"><i class="fas fa-leaf"></i> Aroma - 2019</span>
            </div>
        </footer>
        <script src="{{ asset('js/app.js') }}"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

        @yield('extra-js')
    </body>
</html>
