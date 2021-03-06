<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

        <title></title>

        <!-- Favicon (Replace the 'favicon.ico' file in public directory to customize this) -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <!-- Base CSS -->
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
        <!-- Base jQuery -->
        <script src="{{ elixir('js/all.js') }}"></script>

        <!-- AJAX Set Up -->
        <script>
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': appGlobals.csrf, 'Authorization': jwToken.setHeader()}});
        </script>
    </head>

    <body id="app"><!--This ID corresponds to the root Vue.js File (resources/assets/js/vue/app.js)-->
        <!-- Display the Nav Bar -->
        @include('partials._nav')

        <div class="container-fluid">
            <!-- Load Page Content -->
            @yield('content')
        </div>

        <!-- Load Footer JS -->
        @yield('postscripts')
    </body>

</html>