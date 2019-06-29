<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suser;

class sregisterController extends Controller
{
      public function sregister(Request $request){

  

    	//this is already done in html
    
    	$this->validate($request,[
    		'username'=>'required|min:3|max:50',
    	    'email'=>'required',
    	    'password'=> 'required|min:6|confirmed',
    	    'confirm_password'=>'required|min:6',
    	    'school'=> 'required'
    	]);

    	$susers = new Suser;
    	$susers -> username = $request ->input('username');
		$susers -> email = $request ->input('email');
		$susers -> password = $request ->input('password');
		$susers -> confirm_password = $request ->input('confirm_password');
		$susers -> school = $request -> input('school')
        $susers -> save();
        return redirect('sform') ->with('response','Sucessfully Registered');


}
