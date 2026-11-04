<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FirstController extends Controller
{
    public function homepage(){
        return view('welcome');
    }

    public function contact(){
        return view ('contact');
    }

    public function sent(Request $request){
        $name=$request->input('name1');
        $surname=$request->input('surname1');
        $email=$request->input('email1');
        $text=$request->input('text1');
        Mail::to($email)->send(new ContactEmail($name, $surname, $email, $text));
        return redirect()->route('homepage')->with('message', 'richiesta inviata corretamente');
    }
}
