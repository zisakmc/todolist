<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>@yield('title')</title>
    </head>
    <body class="antialiased">
    <section class="bg-slate-900">
        <div class="text-2xl text-bold mt-3 text-center ">
            <nav> 
                <a class="hover:text-blue-500 p-5" href="/"> Home </a>
                <a class="hover:text-blue-500 p-5"href="/post"> All task</a>
                <a class="hover:text-blue-500 p-5"href="/New-task">New task</a>
            <nav>
        </div>
        <div class="text-2xl text-right pr-6">
            <nav>
            {{-- profile image --}}
             <img src="public/pro1.jpg" alt="image">
            {{-- pro-name --}}
             <h5>name</h5>   

             {{-- button --}}
             <button class="rounded-full px-4 py-0 bg-cyan-500 mt-2">Login</button>
            </nav>
        </div>
    </section>
     @yield('page-section')
    </body>
    <footer>
       
    </footer>
</html>
