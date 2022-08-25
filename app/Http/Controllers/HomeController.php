<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Handle homepage
    public function index(){
        return view('unauth.pages.home');
    }
}
