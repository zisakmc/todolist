<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        <title>@yield('title')</title>
    </head>
    <body class="antialiased bg-gray-200 ">
    <section class="bg-[#0E2954]">
        <div class="flex text-2xl text-bold justify-center text-white">
            <nav> 
                @auth
                    <a class="hover:text-blue-500 p-5 transition duration-300 " href="/"> Home </a>
                    <a class="hover:text-blue-500 p-5 transition duration-300" href="/post"> All task</a>
                    <a class="hover:text-blue-500 p-5 transition duration-300" href="/New-task">New task</a>
                @endauth
            <nav>
        </div>

        @auth
            <div class="text-2xl text-right pr-9 mb-9 p-2 text-white">
                <nav>
                <h5>Welcome {{ Auth()->user()->name}} </h5>   
                <a class="bg-cyan-500 rounded-md px-2 hover:bg-cyan-400" href="/logout">logout</a>
                </nav>
            </div>
        @endauth

    </section>
      @if(session()->has('message'))
        <div x-data="{ show: true }"
            x-init="setTimeout(()=> show=false, 2000)"
            x-show="show"

        class="flex justify-center bg-green-300 text-green-700 text-lg">
            <p>{{ session('message')}}</p>
        </div> 
      @endif

    @yield('page-section')

   </body>
    <footer>
    <div class="mt-10">
    </div>    
    </footer>
</html>
