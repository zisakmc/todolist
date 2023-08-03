@auth
   
@extends('layout.layout')

@section('title', 'Edit task')

@section("page-section")

   <hr class="mt-5"> 

   <div class="flex justify-center">

   <form class="mt-8 text-2xl " method = "POST" action="{{ url('update/'.$tasks->id) }}">
      @csrf
      <h1 class="text-4xl text-cyan-500 pl-20"> Edit Task </h1>
      {{-- tittle input --}}
      <div class="mb-5">
         <label for="title">Title</label>
         <div>
            <input type="text" name="title" placeholder="title" value="{{ $tasks->title}}" 
            class="mt-5 w-full rounded-lg p-1 @error('title')
              is-invalid 
            @enderror " />

            @error('title')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
            @enderror

         </div>
      </div>
      
      <div class="mb-5 mt-5">
         {{--description  --}}
         <label for="description">Description</label>
         <div>
            <input type="text" name="description" placeholder="description" value="{{ $tasks->description }}" 
            class="mt-5 w-full rounded-lg p-1 @error('description')
              is-invalid 
            @enderror " />

            @error('description')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
            @enderror

         </div>
      </div>
      
      <div class="mb-5 mt-5">
      {{--Content--}}
         <label for="content">Content</label>
         <div >
            <textarea rows = "7" cols= "50" name="content" 
            class="mt-5 w-full rounded-lg p-1 @error('content')
              is-invalid 
            @enderror"> {{ $tasks->Content }}</textarea>
            
            @error('content')
                    <div class="text-sm text-red-500">
                        <strong> {{ $message }} </strong>
                    </div>
            @enderror

         </div>
      </div>

     @if($tasks->done)
         <div>
            <input type="checkbox" name="task" class="w-5 h-5" checked/>
            <label for="task"> Done</label>
         </div>
     @else 
         <div>
            <input type="checkbox" name="task" class="w-5 h-5"/>
            <label for="task"> Done</label>
         </div>
     @endif 

      <div class="flex justify-center">
         <button type="submit" name="update-data" class="rounded-md px-1 py-2 bg-cyan-600 hover:bg-cyan-500">Summit Task</button>
      </div>

   </form>
</div>
@endsection

@endauth