<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function show(){
      
   $task = new Newtask();
   $task = $task::all();
    return view('post')->with('tasks', $task);
   } 


}
