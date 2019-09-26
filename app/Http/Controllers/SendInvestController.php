<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail\SendInvestMail;
class SendInvestController extends Controller
{
   
    function send(Request $request)
    {       
        $this->validate($request,[
            'name' => 'required|string',
            'surname' => 'required|string',
            'gender' => 'required|string',
            'email' => 'required|email',
            'montant_invest' =>'required',
            'prix_invest' =>'required|integer',
            'projet' => 'required|string'
        ]);

        $data= array(
            'name' => $request->name,
            'surname' => $request->surname,
            'gender' => $request->gender,
            'email' => $request->email,
            'montant_invest' => $request->montant_invest,
            'prix_invest' => $request->prix_invest,
            'projet' =>$request->projet
        );

        dd($data);

        // Mail::to('contact@youtikcredit.com')->send(new SendInvestMail($data));
        // return back()->with('Envoyé', 'Votre demande a été bien envoyée. Nous vous répondrons dans les plus brefs délais');
    }
}
