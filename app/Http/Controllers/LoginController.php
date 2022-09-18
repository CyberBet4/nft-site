<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index(Request $request){
        
        
        if(auth()->attempt($request->only(['email', 'password']))) {
            
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->withErrors([
                'email' => 'Invalid Login Details.',
            ]);
        }
        
        
    }
}
