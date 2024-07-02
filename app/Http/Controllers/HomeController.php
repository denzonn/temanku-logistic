<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blog = Blog::take(6)->get();

        return view('pages.home', compact('blog'));
    }
}
