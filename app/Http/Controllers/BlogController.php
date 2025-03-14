<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    /**
     * Display I have revamped my website page.
     */
    public function blog1()
    {
        return view('app.blog.blog-1');
    }

    /**
     * Display ultimate web development guide for clients page.
     */
    public function blog2()
    {
        return view('app.blog.blog-2');
    }

    /**
     * Display understanding HTTP page.
     */
    public function blog3()
    {
        return view('app.blog.blog-3');
    }

    /**
     * Display playing with HTTP servers page.
     */
    public function blog4()
    {
        return view('app.blog.blog-4');
    }

    /**
     * Display shared hosting explained for clients page.
     */
    public function blog5()
    {
        return view('app.blog.blog-5');
    }

    /**
     * Display understanding DNS page.
     */
    public function blog6()
    {
        return view('app.blog.blog-6');
    }

    /**
     * Display playing with DNS clients page.
     */
    public function blog7()
    {
        return view('app.blog.blog-7');
    }

    /**
     * Display running shell commands within shared hosting page.
     */
    public function blog8()
    {
        return view('app.blog.blog-8');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.blog.index');
    }
}
