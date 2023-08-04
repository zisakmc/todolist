<?php

namespace App\Http\Controllers;

use App\Models\Newtask;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{   
   public $done;
   public function index() {

   $task = Newtask::where('user_id', Auth::user()->id);
   $task_created= $task->count();
   $done = $task->where('done',1)->count();
    return view('home')->with(['count' => $task_created, 'done' => $done]);
   }

   public function destroy($id) {
      
      Newtask::where('id',$id)->where('user_id', Auth::user()->id)->first()->delete();
      return redirect()->back()->with("message", 'Task has been deleted successfully!!');
      
   }

   
    
}
