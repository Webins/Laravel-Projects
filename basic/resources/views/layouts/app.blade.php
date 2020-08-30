<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/app.css" >
        <title>Basic Website</title>

    </head>
    <body>
        @include('inc.navbar')

        @include('inc.messages')

        <div class="mt-2 container">
            @if(Request::is('/'))
            @include('inc.showcase')
            @endif 
            <div class="row">
                <div class="col-md-8 col-lg-8">              
                    @yield('content')
                </div>
                <div class="col-md-4 col-lg-4">
                    @section('sidebar')
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
            
       
        @section('footer')
        @include('inc.footer')
    </body>
</html>
