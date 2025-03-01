<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * Display web development page.
     */
    public function webDevelopment()
    {
        return view('app.services.web-development');
    }

    /**
     * Display system administration page.
     */
    public function systemAdminstration()
    {
        return view('app.services.system-administration');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.services.index');
    }
}
