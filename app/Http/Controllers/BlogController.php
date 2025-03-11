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
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.blog.index');
    }
}
