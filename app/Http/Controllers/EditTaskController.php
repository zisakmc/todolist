<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditTaskController extends Controller
{
   public function show(){
    return view("edit_task");
   } 
}
