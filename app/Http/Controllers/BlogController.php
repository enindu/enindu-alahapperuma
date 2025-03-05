<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    /**
     * Display I have revamped my website page.
     */
    public function article1()
    {
        return view('app.blog.article-1');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.blog.index');
    }
}
