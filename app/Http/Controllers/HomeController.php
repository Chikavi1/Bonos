<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth()->user();
        return view('home',compact('user'));
    }

    public function profile(){
        $user = Auth::user();
        return view('profile.index',compact('user'));
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }

    public function movements(){
        return view('movements.index');
    }

}
