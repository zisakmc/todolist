@extends('layout.layout')

@section('title', 'all-task')

@section('page-section')

<div>
    <h1 class="text-4xl text-cyan-500 mt-5 pl-8"> All Task </h1>
   <div class="pl-9 mt-8">
        <table class="table-auto">
            <thead>
                <tr class="text-bold text-2xl">
                    <td class="px-7">ID</td>
                    <td class="px-7">TITLE</td>
                    <td class="px-7">DESCRIPTIONS</td>
                    <td class="px-7">CONTENT<td>
                    <td class="px-7">DONE</td>
                    <td class="px-7">EDIT</td>
                    <td class="px-7">DELETE</td>
                    <td class="px-7">SAVE</td>
                </tr>
            <thead>

            <tbody>
            <tr class="text-xl">
                    <td class="px-7">1</td>
                    <td class="px-7">hello whoel</td>
                    <td class="px-7">DESCRIPTIONS</td>
                    <td class="px-7">hsdfh<td>
                    <td class="px-7"><x-check/></td>
                    <td class="px-7"><x-edit/></td>
                    <td class="px-7"><x-del/></td>
                    <td class="px-7"><x-save/></td>
                </tr>
            </tbody>
    
        </table>
   </div> 
</div>
@endsection