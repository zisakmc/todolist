<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewTaskController extends Controller
{
   public function show() {

    return view('new_task');
    
   } 
}
