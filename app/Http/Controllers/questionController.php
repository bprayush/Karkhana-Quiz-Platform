<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use DB;

class questionController extends Controller
{
    public function index(){
		
	    //$question = Question::where('id','=',1)->get();
	    $questions = DB::table('questions')->where('id',1)->get();
	    return view('quiz',compact('questions'));
	  
    }
    	
    
}
