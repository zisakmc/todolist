@extends('layout.layout')

@section('title', 'Login')
@section("page-section")
    <div class="flex justify-center mt-10 ">
     <form class="mt-10 bg-gray-300 p-8 rounded-lg shadow-lg" method = "POST" action="{{ url('login') }}">
        @csrf
         <h1 class="text-3xl text-black text-center">Login</h1>
         <div class="mb-5 mt-5 text-xl">
            <label for="email" class="text-semibold text-xl text-gray-700">Email</label>
            <div>
                <input type="text" placeholder=" Email" name="email" value = "{{ old('email') }}" 
                class="mt-3 rounded-lg @error('email') is-invalid @enderror">

                @error('email')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
                @enderror

            </div>
         </div>

         <div class="mb-5 mt-5 text-xl">
            <label for="password" class="text-semibold  text-gray-700">Password</label>
            <div>
                <input type="password" placeholder=" password" name="password" id="password" 
                class="mt-3 rounded-lg @error('password')
                   is-invalid 
                @enderror">

                @error('password')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
                @enderror

            </div>
         </div>
         <div class="text-center text-lg">
               <button type="submit" class=" rounded-lg shadow-lg px-2 py-1 bg-blue-600 hover:bg-indigo-400 text-white">Login</button>
            <div>
                <p>Don't have an account? <a href='/register' class="mt-5 text-blue-600 hover:text-indigo-600">Sign up now</a></p> 
            </div>
         </div>
        

        </form>
   </div>
@endsection