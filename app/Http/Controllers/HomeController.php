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

    public function sendMessage(){
    
        $messageBird = new \MessageBird\Client('JIB7GTFGcx7gOq4wz9qt7qExW');
        $message = new \MessageBird\Objects\Message();
        $message->originator = 'MessageBird';
        $message->recipients = [523327276923];
        $message->body = 'Gracias por registrarte chamo,esta es una prueba xd. conectate al discord.';
        
        try{
            $response =  $messageBird->messages->create($message);
            dd($response);
        } catch (Exception $e){
            echo $e->getMessage();
        }
    
    }
    

}
