<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reason;
use App\State;
use App\Http\Requests;

class PagesController extends Controller
{

    public function index()
    {
        $reasons = Reason::pluck('name', 'id');
        $states = State::pluck('code', 'id');
        return view('pages.home', compact('reasons', 'states'));
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
