<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//MAIL
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index()
  {
    return view('contact.index');
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'message' => 'required',
    ]);

    $mail = new ContactMailable($request->all());
    Mail::to('ylenia.d.23@gmail.com')->send($mail);

    return redirect()->route('contact.index')->with('infoEmail', 'Mensaje enviado.');
  }
}
