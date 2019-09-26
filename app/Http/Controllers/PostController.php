<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

use App\Post;

class PostController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth')->except('index');
        $this->middleware('is_admin')->only('destroy');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('pages.avis', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.avis');
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

        $avis = Post::create([
            'body'        => $request->bodyavis,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('posts');
    }
}
