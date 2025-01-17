<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }



    public function research($slung)
    {
        $Single = DB::table('blogs')->where('slung', $slung)->get();
        return view('single', compact('Single'));
    }

    public function researches($slung)
    {
        $Category = \App\Models\Category::where('slung', $slung)->first();
        $Single = DB::table('blogs')->where('category', $Category->id)->get();
        return view('researches', compact('Single','Category'));
    }

    public function highlights()
    {
        return view('highlights');
    }

    public function podcasts()
    {
        return view('podcasts');
    }



    public function meetups()
    {
        return view('irl');
    }
}



