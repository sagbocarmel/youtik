<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    
      public function redirectTo()
    {
        return app()->getLocale();
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function invest()
    {
        return view('usersviews.invest');
    }
    public function retrait()
    {
        return view('usersviews.retrait');
    }
      public function benefice()
    {
        return view('usersviews.benefice');
    }
     public function profil()
    {
        return view('usersviews.profil');
    }
     public function bestinvest()
    {
        return view('usersviews.bestinvest');
    }
     public function avis()
    {
        return view('usersviews.avis');
    }
    
}
