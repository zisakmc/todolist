<?php

namespace App\Http\Controllers;

use App\Models\Newtask;

class PostController extends Controller
{  
   
   public function show(){
      $task = Newtask::sortable()->simplePaginate(10);
      return view('post')->with('tasks', $task);
   } 


}
