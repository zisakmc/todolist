<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>@yield('title')</title>
    </head>
    <body class="antialiased bg-neutral-700">
    <section class="bg-slate-900">
        <div class="text-2xl text-bold mt-5 text-center text-cyan-300">
            <nav class="mt-5"> 
                <a class="hover:text-blue-500 p-5" href="/"> Home </a>
                <a class="hover:text-blue-500 p-5"href="/post"> All task</a>
                <a class="hover:text-blue-500 p-5"href="/New-task">New task</a>
            <nav>
        </div>
        <div class="text-2xl text-right pr-9 mb-9">
            <nav>
             <h5>Welcome, name</h5>   
            </nav>
        </div>
    </section>
     @yield('page-section')
    </body>
    <footer>
       
    </footer>
</html>
