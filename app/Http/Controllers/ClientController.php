<?php

namespace App\Http\Controllers;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.clients.index');
    }
}
