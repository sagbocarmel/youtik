<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use App\Mail\SendBeneficeMail;
class SendBeneficeController extends Controller
{
     function send(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'retrait' => 'required|integer',
            'projet' => 'required|string'
        ]);

        $data= array(
            'name' => $request->nom,
            'surname' => $request->surnom,
            'email' => $request->email,
            'retrait' => $request->retrait,
            'projet' =>$request->projet
        );

        \Mail::to('contact@youtikcredit.com')->send(new SendBeneficeMail($data));
        return back()->with( 'Envoyé', 'Votre demande de retrait a été bien reçue');
    }
}
