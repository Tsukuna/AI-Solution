<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        $blogs = Blog::all();
        return  view('blog',compact('blogs'));
    }

    public function about()
    {
        return  view('about');
    }

    public function industry()
    {
        return  view('industry');
    }

    public function event()
    {
        return  view('event');
    }
}
