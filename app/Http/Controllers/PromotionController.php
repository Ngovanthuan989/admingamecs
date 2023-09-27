<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //

    public function index()
    {
        return view('dashboard.promotion.show');
    }
    public function create()
    {
        return view('dashboard.promotion.create');
    }
    public function addPost(Request $request)
    {
        dd($request->all());
        return view('dashboard.promotion.create');
    }
}
