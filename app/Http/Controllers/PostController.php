<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class PostController extends Controller
{  
   
   public function show(){
      $task = Newtask::latest()->simplePaginate(10);
      return view('post')->with('tasks', $task);
   } 

   public function sort(){

     $task = Newtask::sortable()->simplePaginate(10);
      return view('post')->with('tasks', $task);
   }


}
