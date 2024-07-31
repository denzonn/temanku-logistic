<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function service(){
        return view('pages.service');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function cekResi(){
        return view('pages.cek-resi');
    }

    public function checkResi(Request $request)
    {
        $request->validate([
            'resi' => 'required|string'
        ]);

        $product = Product::where('resi', $request->resi)->first();

        return view('pages.cek-resi', ['product' => $product]);
    }
}
