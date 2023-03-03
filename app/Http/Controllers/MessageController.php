<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageMail;
use Carbon\Carbon;

class MessageController extends Controller
{

    public function index(): View
    {
 
        return view('formulaire');
    }

    public function send(Request $request): RedirectResponse
    {
        
        $validated = $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:15',
        ]);

        $email = $request->old('email');
        $message = $request->old('message');

        if($validated){
            $message = Message::create($request->all());
            $message->token = Str::random(15);
            $message->save();

            $content= "$message->message";

            Mail::to($message->email)->send(new MessageMail(env("APP_URL")."/message/$message->token", $message->message));

        }

        return redirect('/');

    }

    public function view(Request $request, string $tokenRandom)
    {

        $message = Message::where("token", $tokenRandom)->first();

        if(!$message){
            return new RedirectResponse('/error');
        }

        $viewMessage = $message;
        $viewMessage->date = Carbon::now()->diffForHumans($viewMessage->created_at);

        
        $message->delete();
 
        return view('message', ['viewMessage' => $viewMessage]);
    }

    public function error404()
    {
        return view('error');
    }
}
