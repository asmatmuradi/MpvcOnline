<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Tag;
use Mail;
use Session;

class ContactController extends Controller
{
    public function contactGet()
    {
        return view('contact.contact');
    }
    public function contactPost(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject' =>'required',
        'message' => 'min:10'
      ]);

        $data=array(
        'email' => $request->email,
        'subject' => $request->subject,
        'messageBody'=>$request->message
      );

        Mail::send('contact.email', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('Hello@test.io');
            $message->subject($data['subject']);
        });

        #Session::flash('Alert','Your Email has been sent.');

        return redirect('/contact')->with('alert', 'Your message has been sent.');
    }
}
