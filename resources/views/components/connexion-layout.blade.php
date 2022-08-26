<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>

        <x-partials.head/>

    </head>

    <body id="login-image">

        <div>
            {{ $slot }}
        </div>


        <x-partials.script/>

    </body>
</html>