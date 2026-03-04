<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{

 // STORE CONTACT MESSAGE
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|max:255',
            'message' => 'required'
        ]);

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return back()->with('success','Message sent successfully');
    }

    public function index()
    {

        $messages = ContactMessage::latest()->paginate(10);

        return view('admin.messages.index',compact('messages'));

    }


    // DELETE MESSAGE
    public function destroy($id)
    {

        $message = ContactMessage::findOrFail($id);

        $message->delete();

        return back()->with('success','Message deleted');

    }
}
