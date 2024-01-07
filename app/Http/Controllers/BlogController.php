<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    /**
     * Display the story of enindu.com page
     */
    public function theStoryOfEninduCom()
    {
        return view('app.blog.the-story-of-enindu-com');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.blog.index');
    }
}
