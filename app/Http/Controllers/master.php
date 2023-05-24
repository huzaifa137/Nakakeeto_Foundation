<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class master extends Controller
{
    public function home(){
        return view ('home');
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function contact(){
        return view('contact');
    }

    public function SubrcibeToNewsletter(Request $request){

        $request->validate([
            'subscription_email'=>'required|email',
        ]);

        if(Newsletter::isSubscribed($request->subscription_email)){
            return redirect()->back()->with('error','Email already subscribed');
        }
        else
        {
            Newsletter::subscribe($request->subscription_email);
            return redirect()->back()->with('success','Email subscription successfull');
        }
    }


    public function SendMessage(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'service'=>'required',
            'phonenumber'=>'required',
            'message'=>'required',
        ]);

        if($request->name){
            return redirect()->back()->with('success','Message has been successfully');
        }

    }


    public function SendMessage2(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required'
        ]);

        if($request->name){
            return redirect()->back()->with('success','Message has been successfully');
        }
    }


}
