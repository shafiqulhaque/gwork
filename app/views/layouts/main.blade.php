<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scale:1.0">

        <title>Pagination With Laravel 4.2</title>
        {{ HTML::style('css/bootstrap.min.css')}}

    </head>

    <body>
        <div class="container">
            @yield('content')
        </div>

        {{ HTML::script('js/bootstrap.min.js') }}


    </body>
</html>
