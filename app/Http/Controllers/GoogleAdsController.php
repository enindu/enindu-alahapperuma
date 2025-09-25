<?php

namespace App\Http\Controllers;

class GoogleAdsController extends Controller
{
    /**
     * Display submit contacts page.
     */
    public function submitContacts()
    {
        return view('app.google-ads.submit-contacts');
    }
}
