<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tuser;

class tregisterController extends Controller
{
    public function register(Request $request){

  

    	//this is already done in html
    
    	$this->validate($request,[
    		'username'=>'required|min:3|max:50',
    	    'email'=>'required',
    	    'password'=> 'required|min:6|confirmed',
    	    'confirm_password'=>'required|min:6',
    	]);

    	$tusers = new Tuser;
    	$tusers -> username = $request ->input('username');
		$tusers -> email = $request ->input('email');
		$tusers -> password = $request ->input('password');
		$tusers -> confirm_password = $request ->input('confirm_password');
        $tusers -> save();
        return redirect('tform') ->with('response','Sucessfully Registered');


    }


}
