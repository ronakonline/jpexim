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

        return redirect('/')->with('success', 'Thank you for contacting us \n\nYour enquiry has been sent! \n\nWe will get back to you shortly');

    }

    public function list(){
        $contacts = \App\Models\Eqnuiries::all();
        return view('admin.contactlist')->with('contacts', $contacts);
    }
}
