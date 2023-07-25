@extends('layout.layout')
@section('title','Home')
@section('page-section')
<div class="text-6xl text-center text-cyan-500">
    <h3> Dashbord</h3>
</div>
<div class= "flex mt-8  justify-center ">
<img src = "https://media.istockphoto.com/id/1285308242/photo/to-do-list-text-on-notepad.jpg?s=612x612&w=0&k=20&c=p85bCVQZwvkrqqqNOJGg2QuPDu6ynTlQHkASQOTELh8=" alt="images"/>
</div>

<div class="text-center mt-10">
    <h1 class='text-4xl text-bold text-cyan-200'> Tasks Record </h1>
    <h3 class = 'text-2xl mt-3'> Numbers of task Created __ </h3>
    <h3 class = 'text-2xl mt-3'> Numbers of task Done __</h3>
</div>

@endsection
