<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('guestbook.title') }}</title>
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        @yield('styles')
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('partials.navbar')
        <div class="container">
            @yield('content')
        </div>

        <script src="{{ asset('assets/js/app.js') }}"></script>

        <script>
            $('div.alert').not('.alert-important').delay(3000).slideUp(400);
        </script>

        @yield('scripts')

    </body>
</html>
