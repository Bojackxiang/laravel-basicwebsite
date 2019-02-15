<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    //
    public function submit(Request $request){
        $this->validate($request, ['username'=>'required', 'email'=>'required']);

        // generate a new messsage
        $message =  new Message;
        $message->name = $request->input('username');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        $message->save();
        return redirect('/')->with('success', 'send the message successfully');
    }

    public function getMessage(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }
}
