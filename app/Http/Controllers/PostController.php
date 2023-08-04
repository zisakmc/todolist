<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{  
   
   public function show(){
      $task = Newtask::where('user_id',Auth::user()->id)->sortable()->latest()->SimplePaginate(10);
      return view('post')->with('tasks', $task);
   } 


}
