<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class WallController extends Controller
{
    public function index()
    {
        $messages = Message::paginate(5);
        // $messages = Message::all();
        return view('dashboard',['messages' =>$messages]);
    }

    public function postMessage(Request $request)
    {
        // dd($request);
        // echo $request->message;

        if(empty($request->message)){
            return redirect('dashboard')->with('error', 'Cannot post an empty message!');
        }

        $message = new Message();
        $message->message = $request->message;
        $message->user_id = Auth::id();
        $message->save();

        $request->session()->flash('success', 'Message posted on the wall!');

        return redirect()->route('dashboard');
    }

    public function deleteMessage($id)
    {
        // dd($id);
        $message = Message::findOrFail($id);
        if(Auth::id() != $message->user_id){
            abort(404);
        }
        $message->delete();

        return redirect()->route('dashboard');
    }

    public function updateMessage(Request $request)
    {
        // dd($id);
        $message = Message::findOrFail($request->id);
        if(Auth::id() != $message->user_id){
            abort(404);
        }
        return view('updateMessage',['message' =>$message]);
    }

    public function saveMessage(Request $request)
    {
        // dd($id);
        $message = Message::findOrFail($request->id);
        if(Auth::id() != $message->user_id){
            abort(404);
        }
        $message->message = $request->message;
        $message->save();

        return redirect()->route('dashboard');
    }
}
