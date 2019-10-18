<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       @include('layout.partail.head')
    </head>
    <body>
        @include('layout.partail.nav')
        @include('layout.partail.footer')
    </body>
</html>
