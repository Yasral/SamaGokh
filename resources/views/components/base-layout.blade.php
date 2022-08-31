<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>

        <x-partials.head/>

    </head>

    <body>

        <x-partials.nav/>

        <x-partials.hero/>

        <x-partials.socialProof/>

        <x-news-card/>

        <x-event-timeline/>

        <x-collaborator/>

        <x-testimonial/>
        
        {{-- This gonna be the main content area --}}

        <x-partials.footer/>

        
        <x-partials.script/>
        


    </body>
</html>
