@extends('layout.layout')

@section('title', 'Edit task')
@section("page-section")
   <h1 class="text-4xl text-cyan-500 pl-20"> Edit Task </h1>
   <hr class="mt-5"> 
   <form class="mt-8 text-2xl   text-center" method = "POST" action="{{ url('update/'.$tasks->id) }}">
      @csrf
      {{-- tittle input --}}
      <div class="mb-5">
         <label for="title">Title</label><br>
         <input type="text" name="title" placeholder="title" value="{{ $tasks->title}}" class="mt-5" /><br>
      </div>
      
      <div class="mb-5 mt-5">
         {{--description  --}}
         <label for="description">Description</label><br>
         <input type="text" name="description" placeholder="description" value="{{ $tasks->description }}" class="mt-5"/> <br>
      </div>
      
      <div class="mb-5 mt-5">
      {{--Content--}}
         <label for="content">Content</label><br>
         <textarea rows = "7" cols= "50" name="content" class="mt-5">{{ $tasks->Content }}</textarea><br>
      </div>
      <div class="mb-5 mt-5 flex items-center ">
        <input type="checkbox" name="task" class="w-6 h-6"/>
        <label for="task"></label>
      </div><br>


      <button type="submit" name="update-data" class="rounded-md px-1 py-2 bg-cyan-600 hover:bg-cyan-500">Summit Task</button>
   </form>
@endsection