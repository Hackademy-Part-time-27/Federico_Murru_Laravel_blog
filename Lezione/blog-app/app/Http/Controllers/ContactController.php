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

        // $request->email // contiente il valore inserito nel campo input con name="email"
        // $request->message // contiente il valore inserito nel campo input (textarea) con name="message"
        
        if($request->email == '' || $request->message == '') {
            return redirect()->back()->with(['error' => 'I campi non possono essere vuoti.']);
        }

        /*
        if($request->email == '') {
            return redirect()->back()->with(['error' => 'Il campo email non può essere vuoto.']);
        }

        if($request->message == '') {
            return redirect()->back()->with(['error' => 'Il campo messaggio non può essere vuoto.']);
        }
        */

        /* Per visualizzare una preview nel browser della mail */
        return (new \App\Mail\ContactMail($request->email, $request->message))->render();

        // Elaborazione dei dati...
        \Illuminate\Support\Facades\Mail::to('admin@example.com')
            ->send(new \App\Mail\ContactMail($request->email, $request->message));

        return redirect()->back()->with(['success' => 'Richiesta inviata correttamente!']);
    }
}