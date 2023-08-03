@extends('layout.layout')

@section('title', 'Register')
@section("page-section")
   <hr class="mt-5"> 
    <div class="flex justify-center">
     <form class="mt-8 text-xl bg-gray-300 rounded-lg shadow-lg p-8" method = "POST" action="{{ url('register') }}">
     <h1 class="text-4xl text-cyan-500 ">Registration</h1>
      @csrf
         <div class="mb-5 mt-5">
             <label for="name">Name</label>
             <div>
               <input type="text" placeholder=" username" name="name" value = "{{ old('name') }}" 
               class="mt-5 rounded-lg @error('name')
                 is-invalid 
               @enderror">

               @error('name')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
                @enderror
             </div>
         </div>

         <div class="mb-5 mt-5">
            <label for="email">Email</label>
             <div>
               <input type="text" placeholder=" Email" name="email" value = "{{ old('email') }}" 
               class="mt-5 rounded-lg @error('email')
               is-invalid
               @enderror">

               @error('email')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
                @enderror
             </div>
         </div>

         <div class="mb-5 mt-5">
            <label for="password">Password</label>
             <div>
               <input type="password" placeholder=" password" name="password" id="password" 
               class="mt-5 rounded-lg @error('password')
                 is-invalid 
               @enderror">
                @error('password')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
                @enderror
             </div>
         </div>

        <div class="mb-5 mt-5">
            <label for="password">Comfirm Password</label>
             <div>
               <input type="password" placeholder=" comfirm password" name="password_confirmation" id="password" 
               class="mt-5 rounded-lg @error('password_confirmation')
                 is-invalid 
               @enderror">
                @error('password_confirmation')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
                @enderror
             </div>
         </div>

        <div class="flex justify-center"> 
            <button type="submit" class=" rounded-lg shadow-lg px-2 py-1 bg-blue-600 hover:bg-indigo-400 text-white">Register</button>
        </div> 

   </form>
   </div>
@endsection