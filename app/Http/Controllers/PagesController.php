<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('layouts/app', compact('title'))->header( 'upgrade-insecure-requests', true );
    }

    public function aboutme(){
        return view('pages/aboutme');
    }

    public function contacts(){
        $data = array(
            'title' => 'Contatcs!!!',
            'contacts' => ['Webs shit', 'Fcuk', 'count shit']
        );

        return view('pages/contacts')->with($data);
    }
}
