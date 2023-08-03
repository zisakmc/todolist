<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function show() {

    return view('register');
    
   }   
  public function login() {

    return view('login');
    
   }
   public function stored(Request $request){
        $validate=$request->validate([
            'name'                  => ['required',' max:255'],
            'email'                 => ['required ',' email','unique:users,email'],
            'password'              => ['required ',' confirmed'],        
            'password_confirmation' => ['required'],
         ]) ;

        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => hash::make($request->password),
        ]);
         return redirect('/login')->with('message', 'Successfully Register!');
   }
   
   public function access(Request $request) {

    $credentials = $request->validate([
      'email'     => 'required|email',
      'password'  => 'required',
    ]);


    if(Auth()->attempt($credentials))
    {   
        $request->session()->regenerate();
        return redirect()->route('home'); 
    }
    

    return redirect()->back()->with('message','invalid credentials');
    
   }

   public function logout(Request $request)  {
      Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect('/login')->with('message', 'Bye!');
   }
}
