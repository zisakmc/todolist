<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use Illuminate\Console\View\Components\Task;
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

    $task = new Newtask(); 

    $task->title = $request->title;
    $task->description= $request->description;
    $task->content= $request->content;
    $task->save();
       
    return redirect('/post')->with('message', 'new task has been added successfully');
   }
}