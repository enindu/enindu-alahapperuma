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
     * Display don't use biometric authentication page
     */
    public function dontUseBiometricAuthentication()
    {
        return view('app.blog.dont-use-biometric-authentication');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.blog.index');
    }
}
