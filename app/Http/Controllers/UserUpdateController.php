<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\User;

class UserUpdateController extends Controller
{
      public function redirectTo()
    {
        return app()->getLocale();
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */

    
    public function update(Request $request)
    {
        $request->validate([
        'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'password' =>['required', 'string','min:8','confirmed'],
        ]);
 
        
        $user=auth()->user();

        $user->update([
            'name' =>$request->name,
            'surname' => $request->surname,
            'password' => Hash::make($request->password)
             ]);

        $user->save();

   
            return redirect()->route('userhome');

     }
}
