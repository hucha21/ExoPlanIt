<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;

class KontaktController extends Controller
{
    public function show()
 {
  return view('pages.kontakt');
 }
 public function send_mail(Request $request)
 {
     $this->validate($request, [
         'name' => ['required', 'string', 'max:255' ], 
         'email' => ['required', 'string', 'email', 'max:255' ],
         'message' => ['required', 'string', 'max:255']
     ]);

     $contact = [
         'fullname' => $request['namename'], 
         'email' => $request['email'],
         'message' => $request['message'],
     ];

 
     Mail::to('hhafuric@gmail.com')->send(new ContactFormMail($contact));
     
     return redirect()->route('pocetna')->with('status', ' Vaše pitanje je poslano');
 }
}
