<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewTaskController extends Controller
{
   public function show() {

   
    return view('new_task');
    
   }
   
   public function store(Request $request){
    
    $request->validate([
      'title'       => 'required',
      'description' => 'required',
      'content'     => 'required',
    ]) ;

    $task = new Newtask(); 

    $task->title = $request->title;
    $task->description= $request->description;
    $task->content= $request->content;
    $task->user_id = Auth::user()->id;
    $task->save();
       
    return redirect('/post')->with('message', 'new task has been added successfully');
   }
}