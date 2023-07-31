<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class PostController extends Controller
{  
   
   public function show(){
      
   $task = new Newtask();
   $task = $task::latest()->paginate(10);
    return view('post')->with('tasks', $task);
   } 


}
