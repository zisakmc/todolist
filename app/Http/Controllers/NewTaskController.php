<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use Illuminate\Http\Request;

class NewTaskController extends Controller
{
   public function show() {

  
    return view('new_task');
    
   }
   
   public function store(Request $request){
    $valildate = $request->validate([

      'title'       => 'required',
      'description' => 'required',
      'content'     => 'required',
    ]) ;
       
    return redirect("/post");
   }
}