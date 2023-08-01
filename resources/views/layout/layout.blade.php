<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite('resources/css/app.css')
        <title>@yield('title')</title>
    </head>
    <body class="antialiased bg-gray-200">
    <section class="bg-slate-900">
        <div class="flex text-2xl text-bold justify-center text-cyan-300">
            <nav> 
                <a class="hover:text-blue-500 p-5" href="/"> Home </a>
                <a class="hover:text-blue-500 p-5" href="/post"> All task</a>
                <a class="hover:text-blue-500 p-5" href="/New-task">New task</a>
            <nav>
        </div>
        <div class="text-2xl text-right pr-9 mb-9">
            <nav>
             <h5>Welcome, name</h5>   
            </nav>
        </div>
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
    @if ($errors->any())
    <div class="flex justify-center alert alert-danger text-sm text-red-600">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif 

    </body>
    <footer>
       
    </footer>
</html>
