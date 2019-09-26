<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
class UserController extends Controller
{
      public function redirectTo()
    {
        return app()->getLocale();
    }
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
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
        'id' => 'required|integer',
        'invest' => 'required|int',
        'bonus' => 'required|int'
        ]);
 
        $id= $request->input('id');
        
        $user=User::where('id',$id);

        $user->update([ 
            'invest' =>$request->invest,
            'bonus' => $request->bonus
             ]);
   
            return redirect()->route('tables');

     }


}
