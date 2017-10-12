<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>{{$title}}</title>
    </head>
    <body>
        @section('header')
        <header>
            This default header
        </header>
        @show

        <div class="content">
            @yield('content', 'I`m content!')
        </div>

        @include('block.footer')
    </body>
</html>