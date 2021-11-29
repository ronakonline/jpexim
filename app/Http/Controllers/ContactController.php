<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'title' => 'required',
            'message' => 'required'
        ]);

        $contact = new \App\Models\Eqnuiries;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->title = $request->input('title');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect('/')->with('success', 'Your enquiry has been sent');

    }

    public function list(){
        $contacts = \App\Models\Eqnuiries::all();
        return view('contactlist')->with('contacts', $contacts);
    }
}
