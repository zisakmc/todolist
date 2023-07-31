<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newtask;
use Symfony\Component\VarDumper\Caster\RedisCaster;

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

      $task = Newtask::find($id)->delete();

      return redirect()->back()->with("message", 'Task has been deleted successfully!!');
      
   }

   
    
}
