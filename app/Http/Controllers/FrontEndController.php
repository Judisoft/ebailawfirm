<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services.index');
    }

    public function blog() {
        return view('blog.index');
    }

    public function contact() {
        return view('contact');
    }
}
