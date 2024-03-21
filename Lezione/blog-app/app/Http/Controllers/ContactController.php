<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function viewForm()
    {
        return view('pages.contacts');
    }

    public function send(Request $request)
    {
        //dd($request->all());

        // $request->email // 
        // $request->message // 

        if ($request->email == '' || $request->message == '') {
            return redirect()->back()->with(['error' => 'Fields cannot be empty.']);
        }

        // return (new \App\Mail\ContactMail($request->email, $request->message))->render();

        //Analyse data
        \Illuminate\Support\Facades\Mail::to('admin@example.com')->send(new \App\Mail\ContactMail($request->email, $request->message));

        return redirect()->back()->with(['success' => 'Request successfully sent!']);
    }
}
