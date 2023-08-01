<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class EditTaskController extends Controller
{
   public function show($id){
      
      $task = Newtask::find($id);

      return view("edit_task")->with('tasks', $task);
   } 

   public function data_update(Request $request, $id) {

     $valildate = $request->validate([

      'title'       => 'required',
      'description' => 'required',
      'content'     => 'required',
    ]) ;


      $task = Newtask::find($id);
      $task->title = $request->input('title');
      $task->description= $request->input('description');
      $task->content= $request->input('content');
      $task->update();
      
   
      return redirect('/post')->with('message', 'Successfully editted');
      
    }


}
