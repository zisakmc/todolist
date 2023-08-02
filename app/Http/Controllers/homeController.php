<?php

namespace App\Http\Controllers;

use App\Models\Newtask;

class homeController extends Controller
{   
   public $done;
   public function count() {

   $task = new Newtask();
   $done= $task->where('done')->count();
   $task= $task->count();
    return view('home')->with(['count' => $task, 'done' => $done]);
   }

   public function destroy($id) {

      Newtask::findOrFail($id)->delete();

      return redirect()->back()->with("message", 'Task has been deleted successfully!!');
      
   }

   
    
}
