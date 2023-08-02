<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use Illuminate\Http\Request;

class EditTaskController extends Controller
{
   public function show($id){
      
      $task = Newtask::findOrFail($id);

      return view("edit_task")->with('tasks', $task);
   } 

   public function data_update(Request $request, $id) {

      $request->validate([

      'title'       => 'required',
      'description' => 'required',
      'content'     => 'required',
    ]) ;


      $task = Newtask::findOrFail($id);
      $task->title = $request->input('title');
      $task->description= $request->input('description');
      $task->content= $request->input('content');
      $task->update();
      
   
      return redirect('/post')->with('message', 'Successfully editted');
      
    }


}
