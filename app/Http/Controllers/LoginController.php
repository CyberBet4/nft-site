<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(Request $request){
        
        // dd($request->all());

        if(auth()->attempt($request->only(['email', 'password']))) {
                return redirect()->route('dashboard');
        }else{
            return redirect()->back()->withErrors([
                'email' => 'Invalid Login Details.',
            ]);
        }

        
    }
}
