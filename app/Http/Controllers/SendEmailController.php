<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail\SendContactMail;
use Illuminate\Support\Facades\Validator;

class SendEmailController extends Controller
{

    /**
     * @return \Illuminate\Http\Response
     */

    function send(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required|string',
            'email' => 'required|email',
            'sujet' => 'required|string',
            'message' => 'required|string'
        ]);

        $data= array(
            'name' => $request->nom,
            'email' => $request->email,
            'subject' => $request->sujet,
            'message' =>$request->message
        );

     
        Mail::to('contact@youtikcredit.com')->send(new SendContactMail($data) );
        return back()->with('Envoyé', 'Merci de nous avoir contacté');
    
 }
}

?>
