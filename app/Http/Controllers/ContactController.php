<?php

namespace App\Http\Controllers;

use App\Mail\AdminTransportRequestMail;
use App\Mail\ClientTransportRequestMail;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'source' => 'required',
            'destination' => 'required',
            'message' => 'nullable'
        ]);

        // Send to Admin
        Mail::to(env('MAIL_USERNAME'))->send(new AdminTransportRequestMail($data));

        // Send confirmation to Client
        Mail::to($request->email)->send(new ClientTransportRequestMail($data));

        return back()->with('success','Request sent successfully!');
    }

 // STORE CONTACT MESSAGE
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|max:255',
            'message' => 'required',
            'phone' => 'nullable'
        ]);

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'phone' => $request->phone
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
