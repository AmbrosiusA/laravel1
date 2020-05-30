<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(){
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);

        //enviar el email con la info
        Mail::to('ambrosio_264@hotmail.com')->send(new MessageReceived($message));

        return 'Mensaje Enviado';
    }
}
