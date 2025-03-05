<?php

namespace App\Http\Controllers;

class ServiceController extends Controller
{
    /**
     * Display web development page.
     */
    public function service1()
    {
        return view('app.services.service-1');
    }

    /**
     * Display system administration page.
     */
    public function service2()
    {
        return view('app.services.service-2');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.services.index');
    }
}
