<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class EditTaskController extends Controller
{
   public function show($id){
      
      $task = Newtask::find($id);

      return view("edit_task", compact('task'));
   } 

   public function update(Request $request,$id) {
     $validate = $request->validate([
         'title'        => 'required',
         'description'  => 'reguired',
         'content'      => 'required',
      ]);

      $task = Newtask::find($id);

      $task->title         = $request->input("title");
      $task->description   = $request->input("description");
      $task->content       = $request->input("content");
      $task->update();
   
      return redirect()->back()->with('message', 'Successfully editted');
      
   }


}
