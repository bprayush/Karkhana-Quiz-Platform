@extends('layouts.app')

@section('title','quiz')

@section('content')
        <body style="background-color: white">
            <div>
                 @foreach($questions as $display)
                 <div class="col-md-6 col-lg-8 col-sm-6 col-lg-offset-2">
                       <form method="post">
                        
                 			<h3> {{$display->question}} </h3>

                 			<div class="col-lg-offset-4">
                              
                                <input name="answer" value="{{$display->choice1}}" type="radio">{{$display->choice1}}<br>
                                <input name="answer" value="{{$display->choice2}}" type="radio">{{$display->choice2}}<br>
                                <input name="answer" value="{{$display->choice3}}" type="radio">{{$display->choice3}}<br>
                                <input name="answer" value="{{$display->choice4}}" type="radio">{{$display->choice4}}<br>
                                <input type="submit"  href="welcome" class="btn btn-info">
                                
                            </div>
                        
                         </form>
                     </div>
                 @endforeach              
            </div>
           
        </body>

@endsection