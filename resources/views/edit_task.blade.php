@extends('layout.layout')

@section('title', 'Edit task')
@section("page-section")
   <h1 class="text-4xl text-cyan-500 pl-20"> Edit Task </h1>
   <hr class="mt-5"> 
   <form class="mt-8 text-2xl   text-center" method = "PUT" action="{{ url('update') }}">
      @csrf
      {{-- tittle input --}}
      <div class="mb-5">
         <label for="title">Title</label><br>
         <input type="text" placeholder="title" value="{{ $tasks->title}}" class="mt-5" /><br>
      </div>
      
      <div class="mb-5 mt-5">
         {{--description  --}}
         <label for="description">Description</label><br>
         <input type="text" placeholder="description" value="{{ $tasks->description }}" class="mt-5"/> <br>
      </div>
      
      <div class="mb-5 mt-5">
      {{--Content--}}
         <label for="content">Content</label><br>
         <textarea rows = "7" cols= "50" name="content" value="{{ $tasks->content }}" class="mt-5"></textarea><br>
      </div>

      <button type="submit" class="rounded-md px-1 py-2 bg-cyan-600 hover:bg-cyan-500">Summit Task</button>

   </form>
@endsection