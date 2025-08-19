<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $this->validate($request, [
            'name'    => 'required|string',
            'email'   => 'required|string',
            'subject' => 'required|string',
            'phone'   => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('comercial2@rsweb.com.br');
            $message->subject($data['subject']);
        });

        return response()->json(['message' => 'Mensagem enviada com sucesso!']);
    }
}
