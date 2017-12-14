<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class WelcomeController extends Controller
{
  public function __invoke()
  {
      return view('welcome');
  }
  public function aboutUs()
  {
    return view('aboutUs.show');
  }

}
