<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function __invoke()
  {
      return view('welcome');
  }
  public function contact(Request $request)
  {
    return view ('store.contact')->with('Alert', 'Your message has been sent.');
  }
}
