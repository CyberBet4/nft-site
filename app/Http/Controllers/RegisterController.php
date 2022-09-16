<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
// use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    // Register a user
    public function register(Request $request){

        //validate form data
         $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
        ]);

        //     //create a new user
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
        
        //login user
        if(auth()->attempt($request->only(['email', 'password']))){

            //redirect to dashboard if authenticated
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('home');
        };

    }
}
