<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;

class CustomerController extends Controller
{
    public function RegistrationForm()
    {
    	return view('customer.registration_form');
    }
    public function RegistrationSubmit(Request $request)
    {
	$rules = [
	  'name'     =>  'required',
	  'email'    =>  'required|email'
	  
	];
	$allInput = $request->all();
      $validator = Validator::make($allInput,$rules);

      if ($validator->fails()) 
	{
		return redirect()->route('customer_registration')
	            	     ->withErrors($validator)
	            	     ->withInput();
	}

	$name    = $request->name;
    	$email   = $request->email;
    	$skypeId = $request->skypeId;

    }
}
