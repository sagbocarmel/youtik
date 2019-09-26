<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
class AdminController extends Controller
{
    public function redirectTo()
    {
        return app()->getLocale();
    }

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('partials.admin');
    }
    
     public function users()
    {
        $users= User::all();
        return view('partials.users',compact('users'));
    }

     public function manage()
    {
        $users= User::all();
        return view('partials.usermanagement',compact('users'));
    }

         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function avis()
    {
        $posts = Post::all();
        return view('partials.avis', compact('posts'));
    }

     /* Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $post=Post::where('id',$id);
        Post::destroy($id);
        return back();
    }
     public function destroyuser($id)
    {        
       $user=User::where('id',$id);
       User::destroy($id);
       return back();
    }
}
