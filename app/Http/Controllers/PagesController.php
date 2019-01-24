<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!!!';
        return view('pages/index', compact('title'));
        //return view('pages/index')->with ('title', $title);
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
