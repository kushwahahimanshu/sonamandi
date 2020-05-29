<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;
use App\Message;

class ChatController extends Controller
{
    public function getContacts() {
        return response()->json(User::where('id', '!=', Auth::id())->get());
    }

    public function getMessagesFor($id) {
        $messages = Message::where('from_id', $id)->orWhere('to_id', $id)->get();
        return response()->json($messages);
    }

    public function sendMessage(Request $req) {
        $message = Message::create([
            'from_id' => Auth::id(),
            'to_id' => $req->contact_id,
            'text' => $req->text
        ]);

        // $reg = new Message;
        // $reg->form_id = Auth::id();
        // $reg->to_id = $req->contact_id;
        // $reg->text = $req->text;

        // $reg->save();

        return response()->json($message);

        //var_dump($message);
    }
}
