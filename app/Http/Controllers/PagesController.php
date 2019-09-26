<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function redirectTo()
    {
        return app()->getLocale();
    }

    function home()
    {

        return view('pages.home');
    }

    function aboutus()
    {
        return view('pages.about');
    }

    function investir()
    {
        return view('pages.investir');
    }

    function emprunt()
    {
        return view('pages.emprunt');
    }

    function services()
    {
        return view('pages.services');
    }

    function contact()
    {
        return view('pages.contact');
    }

    function formemprunt()
    {
        return view('pages.form_emprunt');
    }

    
    function more()
    {
        return view('pages.savoir_plus');
    }

    
    function files()
    {
        return view('pages.document_juridique');
    }
  
    

}
