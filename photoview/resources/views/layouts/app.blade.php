<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css" >
        <title>Photo View</title>
    </head>
    <body class="bg-dark text-white">
        @include('inc.navbar')
        
       
            @yield('content')
        
    </body>
@include('inc.footer')
</html>