<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    
    public function login()
    {
        return view('pages.login');
    }
    
    public function register()
    {
        return view('pages.register');
    }
    
    public function loan()
    {
        return view('pages.loan');
    }
}
