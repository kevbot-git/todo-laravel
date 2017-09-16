<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>// todo</title>

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
            <a href="#" class="brand-logo">&emsp;// todo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li>
                <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
            </div>
        </nav>

        @yield('content')

        <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor/materialize.js" type="text/javascript"></script>
    </body>
</html>
