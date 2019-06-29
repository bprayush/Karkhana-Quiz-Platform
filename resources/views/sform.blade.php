<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" type="text/css" href="../css/registration.css">
</style>
</head>
<body>

<header>
        
          
        <nav class="main" id="resnav">
           <h1>Karkhana</h1>
      </nav>
    </header>

 
    <div class="signup-form"> 

        <form action="{{url('/sregister')}}" method="POST"   enctype="multipart/form-data" autocomplete="off">
             {{csrf_field()}}


            <fieldset>
              <div class="alertbar">
                 <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                 @if(session('response'))
                       {{session('response')}}
                 @endif
             </div>
          </fieldset>



    <div class="signup-form"> 
        <form action="/" method="post"   enctype="multipart/form-data" autocomplete="off">
        <h2>Create Account</h2>
        <p class="lead">Registration for students only.</p>
            <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
          </div>
            </div>
            <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-school"></i></span>
            <input type="text" class="form-control" name="School" placeholder="School" required="required">
          </div>
            </div>

          <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
            <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
          </div>
            </div>

        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input type="Password" class="form-control" name="password" placeholder="Password" required="required">
          </div>
            </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">
              <i class="fa fa-lock"></i>
              <i class="fa fa-check"></i>
            </span>
            <input type="Password" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
          </div>
            </div>        
        <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
            </div>
        <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
        </form>
      <div class="text-center">Already have an account? <a href="#">Login here</a>.</div>
    </div>
    </body>
    </html>                            