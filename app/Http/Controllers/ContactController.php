<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.contact.index');
    }
}
