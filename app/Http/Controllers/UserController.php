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

   public function store(Request $request){

        $request->validate([
        'name'      => ['required',' max:255'],
        'email'     => ['require ',' email'],
        'password'  => ['required ',' confirmed'],        
    ]) ;


    User::create([
        'name'      => $request->name,
        'email'     => $request->email,
        'password'  => hash::make($request->password),
    ]);
        
    return redirect('/')->with('message', 'Successfully Register!');
    
   }
}
