<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessagesController extends Controller
{
    public function submit(Request $request){
        //$request->input('name'); //how to access the fields  

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        
        //create the message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //Save the message
        $message->save();

        //Redirect 
        return redirect('/')->with('success', 'Message Sent'); //home page
    }

    public function getMessages(){
        $messages = Message::all(); // get all the messages of the db
        return view('messages')->with('messages', $messages);
    }
}
