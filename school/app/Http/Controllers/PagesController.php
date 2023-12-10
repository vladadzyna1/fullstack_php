<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function teachers()
    {
        return view('teachers');
    }

    public function students()
    {
        return view('students');
    }

    public function groups()
    {
        return view('groups');
    }
}
