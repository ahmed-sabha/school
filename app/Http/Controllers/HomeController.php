<?php

namespace App\Http\Controllers;


use App\Popular_courses;
use Illuminate\Http\Request;
use App\Teachers;
use App\Blogs;

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
        //
        $teacher = Teachers::all();
        $popular_courses = Popular_courses::all();
        $blog = Blogs::all();


        return view('home.index')
        ->with('posts', $popular_courses)
        ->with('teac', $teacher)
        ->with('blog', $blog);
    }


}
