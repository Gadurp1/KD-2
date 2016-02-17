<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class AboutController extends Controller
{
  public function create()
  {
      return view('about.contact');
  }

  public function store(ContactFormRequest $request)
  {

    \Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('team@certificateclearing.com');
        $message->to('orlovskys@carleton.edu', 'Admin')->subject('Certificate Clearing Submission');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

  }



}
