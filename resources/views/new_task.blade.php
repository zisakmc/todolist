@extends('layout.layout')

@section('title', 'New task')
@section("page-section")
   <h1 class="text-4xl text-cyan-500 pl-20"> Create New Task </h1>
   <hr class="mt-5"> 
   <form class="mt-8 text-2xl  text-blue-200 text-center" method="post">

    {{-- tittle input --}}
   <div class="mb-5">
   <label for="title">Title</label><br>
   <input type="text" placeholder="title" class="mt-5">
   <br>
    </div>

    <div class="mb-5 mt-5">
    {{--description  --}}
   <label for="description">Description</label><br>
   <input type="text" placeholder="description" class="mt-5">
    <br>
    </div>
    
    <div class="mb-5 mt-5">
    {{--Content--}}
   <label for="content">Content</label><br>
   <textarea rows = "10" cols= "50" name="content" class="mt-5" >
    Enter here... 
    </textarea><br>
    </div>

   <button class="rounded-md px-1 py-2 bg-cyan-600 hover:bg-cyan-500">Create Task</button>

   </form>
@endsection