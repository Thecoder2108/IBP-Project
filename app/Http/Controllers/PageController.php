<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function classes()
    {
        return view('classes');

    }public function index()
    {
        return view('index');


    }
    public function about()
    {
        return view('about');

    }
    public function blog()
    {
        return view('blog');

    }
    public function contact()
    {
        return view('contact');

    }
    public function teacher()
    {
        return view('teacher');

    }
    public function student()
    {
        return view('student');

    }

    public function table_couse()
    {
        return view('pages.Allstudents');

    }

}
