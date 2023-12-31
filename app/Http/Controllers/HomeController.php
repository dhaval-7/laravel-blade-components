<?php

namespace App\Http\Controllers;

use App\Models\Post;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $posts = Post::latest()->paginate(5);
        return view('home',compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
