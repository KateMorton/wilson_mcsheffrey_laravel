<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'c_venue' => 'required',
            'r_venue' => 'required',
            'guests' => 'required'           
        ]);

        Mail::send('emails.contact-message', [            
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'date' => $request->date,
            'ceremony_venue' => $request->c_venue,
            'reception_venue' => $request->r_venue,
            'guests' => $request->guests,
            'plans' => $request->plans                        
        ], function($mail) use($request){
            $mail->from($request->email, $request->name);
            $mail->to('kate@katemortondeveloper.co.uk')->subject('enquiry');
        });

        return redirect('/contact')->with('success', 'Thank you for your message, we will be in touch as soon as we can.');
    }
}
