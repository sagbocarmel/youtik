<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AvisRequest;
use Illuminate\Support\Facades\Auth;
use App\Avis;
use App\User;

class AvisController extends Controller
{
    public function redirectTo()
    {
        return app()->getLocale();
    }
    
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $avis = Avis::all();

        return view('pages.avis', compact('avis'));
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'bodyavis' => 'required|string',       
        ]);

         if (Auth::check()) 
        {
         
        $avis = Avis::create([
            'body'        => $request->bodyavis,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('/avis');
        }
        else {
          return redirect()->route('login');

        }
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avis=Avis::findOrFail($id);
        return view('partials.avis', compact('avis'));
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avis $avis)
    {        
        $avis = DB::table('avis')    
            ->where('avis.id','=', $id)
            ->delete();

        return redirect('/leursavis');
    }
}
