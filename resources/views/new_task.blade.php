@auth
   
@extends('layout.layout')


@section('title', 'New task')
@section("page-section")
   <hr class="mt-5"> 
   <div class="flex justify-center mt-8">
     <form class="mt-8 text-2xl" method = "POST" action="{{ url('New-task') }}">
      @csrf
         <h1 class="text-4xl text-cyan-500 mt-5"> Create New Task </h1>
        {{-- tittle input --}}
         <div class="mt-5">
             <label for="title">Title</label>

             <div>
               <input type="text" placeholder=" Enter Title" name="title"
               class="mt-3 rounded-lg @error('title')
                   is-invalid 
                @enderror">

                @error('title')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
                @enderror
             </div>

         </div>

         <div class="mb-5 mt-5">
         {{--description  --}}
            <label for="description">Description</label><br>

             <div>
               <input type="text" placeholder=" Enter Description" name=" description" 
               class="mt-3 rounded-lg @error('description')
                   is-invalid 
                @enderror">

                @error('description')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
                @enderror
             </div>

         </div>
         
         <div class="mb-5 mt-5">
         {{--Content--}}
            <label for="content">Content</label><br>

             <div >
               <textarea rows = "7" cols= "50" name=" content" placeholder=" Type here..." 
               class="mt-3 rounded-lg @error('content')
                   is-invalid 
                @enderror"></textarea>

                @error('content')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
                @enderror
             </div>

         </div>

         <div class="flex justify-center">
            <button type="submit" class=" rounded-lg shadow-lg px-2 py-1 bg-blue-600 hover:bg-indigo-400 text-white">Create Task</button>
         </div>

      </form>
   </div>
@endsection
@endauth