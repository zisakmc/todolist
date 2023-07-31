<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class EditTaskController extends Controller
{
   public function show(){
    return view("edit_task");
   } 

   public function update(Request $request) {

     $validate = $request->validate([
         'title'        => 'required',
         'description'  => 'reguired',
         'content'      => 'required',
      ]);


      return redirect("/post")->with('message', 'Successfully editted');
      
   }
}
