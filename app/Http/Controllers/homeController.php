<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    
}
