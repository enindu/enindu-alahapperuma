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
     * Display decentralized hacker news page
     */
    public function decentralizedHackerNews()
    {
        return view('app.blog.decentralized-hacker-news');
    }

    /**
     * Display OTP-less payment system page
     */
    public function otpLessPaymentSystem()
    {
        return view('app.blog.otp-less-payment-system');
    }

    /**
     * Display the interesting case of IP cam page
     */
    public function theInterstingCaseOfIpCam()
    {
        return view('app.blog.the-interesting-case-of-ip-cam');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.blog.index');
    }
}
