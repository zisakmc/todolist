<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
  public function show() {

    return view('register');
    
   }   

   public function stored(Request $request){
        //dd($request);
        $validate=$request->validate([
            'name'                  => ['required',' max:255'],
            'email'                 => ['required ',' email'],
            'password'              => ['required ',' confirmed'],        
            'password_confirmation' => ['required'],
         ]) ;

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => hash::make($request->password),
        ]);
         return redirect('/')->with('message', 'Successfully Register!');
   }
}
