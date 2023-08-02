@extends('layout.layout')

@section('title', 'Register')
@section("page-section")
   <h1 class="text-4xl text-cyan-500 pl-20">Registration</h1>
   <hr class="mt-5"> 
    <div class="card flex justify-center">
     <form class="mt-8 text-2xl" method = "POST" action="{{ route('register') }}">
   @csrf
        {{-- tittle input --}}
         <div class="mb-5 mt-5">
             <label for="name">Name</label>
            <input type="text" placeholder="username" name="name"class="mt-5">
         </div>

         <div class="mb-5 mt-5">
         {{--description  --}}
            <label for="email">Email</label>
            <input type="text" placeholder="Email" name="email" class="mt-5"><br>
         </div>
         <div class="mb-5 mt-5">
         {{--description  --}}
            <label for="password">Password</label>
            <input type="text" placeholder="password" name="password" class="mt-5"><br>
         </div>
        <div class="mb-5 mt-5">
         {{--description  --}}
            <label for="comfirm password">Comfirm Password</label>
            <input type="text" placeholder="password" name="comfirm password" class="mt-5"><br>
         </div>

         
         <button type="submit" class="rounded-md px-1 py-2 bg-cyan-600 hover:bg-cyan-500">Register</button>

   </form>
   </div>
@endsection