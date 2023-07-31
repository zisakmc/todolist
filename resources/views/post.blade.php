@extends('layout.layout')

@section('title', 'all-task')

@section('page-section')

<div>
    <h1 class="text-4xl text-cyan-500 mt-5 pl-8"> All Task </h1>
   <div class="pl-9 mt-8 flex flex-col">
        <table class="table-auto">
            <thead class="border-b">
                <tr class="text-bold text-4xl ">
                    <td class="px-7">TITLE</td>
                    <td class="px-7">DESCRIPTIONS</td>
                    <td class="px-7">CONTENT<td>
                    <td class="px-7">DONE</td>
                    <td class="px-7">EDIT</td>
                    <td class="px-7">DELETE</td>
                    <td class="px-7">SAVE</td>
                </tr>
            <thead>
            
        @foreach ($tasks as $task )
            
            <tbody>
            <tr class="text-xl border-b transiton-300 ease-in-out hover:dark:bg-neutral-400 dark:border-indigo-500">
                    <td class="px-7">{{ $task->title}}</td>
                    <td class="px-7">{{ $task->description}}</td>
                    <td class="px-7">{{ $task->Content}}<td>
                    <td class="px-7"> <x-check/></td>
                    <td class="px-7"><x-edit/></td>
                    <td class="px-7"><x-del/></td>
                    <td class="px-7"><x-save/></td>
                </tr>
            </tbody>
    
        @endforeach

        </table>
   </div> 

   <div class="flex justify-center mt-5">
        {{ $tasks->links() }}
   </div>

</div>
@endsection