<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Customer;

use App\Http\Requests;

class ManageController extends Controller
{
    public function index()
    {
        return view('manage.index');
    }
    
    public function login()
    {
        return view('auth.login');
    }
    
    public function register()
    {
        return view('auth.register');
    }
    
    public function getCustomers()
    {
        $customers = Customer::with('state')->get();
        return view('manage.customers', compact('customers'));
    }
    
    public function saveCustomers(Request $request)
    {
        $this->validate($request, [
            'firstName'     => 'required',
            'lastName'      => 'required',
            'phone'         => 'required',
            'email'         => 'email|required',
            'loanAmount'    => 'numeric|required',
            'howSoon'       => 'required',
            'reason'        => 'required'
        ]);
        
        $data = [
            'first_name'    => $request->get('firstName'),
            'last_name'     => $request->get('lastName'),
            'business_name' => $request->get('businessName'),
            'business_address'  => $request->get('businessAddress'),
            'city'              => $request->get('city'),
            'state_id'          => $request->get('state'),
            'zip_code'          => $request->get('zipcode'),
            'phone'             => $request->get('phone'),
            'email'             => $request->get('email'),
            'loan_amount'       => $request->get('loanAmount'),
            'need_timeframe'    => $request->get('howSoon'),
            'reason_id'         => $request->get('reason')
        ];
        Customer::create($data);
        return redirect('#contact')->with('message', 'We have received your requrest and will get back with you shortly. Thank you for contacting Capital Direct!');
    }
}
