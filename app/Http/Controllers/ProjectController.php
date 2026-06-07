<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.projects.index');
    }
}
