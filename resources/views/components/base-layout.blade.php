<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>

        <x-partials.head/>

    </head>

    <body>

        <x-partials.nav/>

        <x-partials.hero/>

        <x-partials.socialProof/>
        
        {{-- This gonna be the main content area --}}

        {{-- <x-partials.footer/> --}}

        {{-- Flowbite script using the cdn --}}
        <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

        {{-- <script src="../node_modules/flowbite/dist/flowbite.js"></script> --}}


    </body>
</html>
