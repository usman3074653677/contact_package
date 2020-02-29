<?php

namespace Usman\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Usman\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
   public function index(){
       return view('contact::contact');
   }
   public function submit(Request $request){
       Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->name));


       Contact::create([
           'name'=>$request['name'],
            'email'=>$request['email'],
       ]);
       return redirect()->back();
   }
}
