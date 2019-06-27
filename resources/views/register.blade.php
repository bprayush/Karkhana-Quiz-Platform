<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$college = $_POST['college'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$college = stripslashes($college);
$college = addslashes($college);
$mob = stripslashes($mob);
$mob = addslashes($mob);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);
$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$gender' , '$college','$email' ,'$mob', '$password')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;
header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>




<?php
session_start();
$_SESSION['message'] ='';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //two pwd match
    if ($_POST['password'] == $_POST['confirmpassword']){
        print_r($FILES);
        $Username = $mysql->mysql_real_escape_string($_POST['Username']);
        $Password = $mysql->mysql_real_escape_string($_POST['Password']);
        $email = $mysql->mysql_real_escape_string($_POST['email']);
        $sql = "INSERT INTO users (username, password, email)" ."VALUES ('$username', '$email', '$password')";
        if ($mysql->query($sql) === true){
            $_session['message']= "Registration Sucessful! addeded $username to the database";
            header("location: welcome.php");

        }
        else {
            $_SESSION['message']= "user couldnot be addeded to the database";

        }
         else {
            $_SESSION['message']= "Two password donot matches";
            
        }
   
   
    }
  }

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <body>

<section style="background-image: url(images/bg_4.jpg);" data-stellar-background-ratio="0.5">
  <div class="Register for free" id="register">
  <div class="login-form">   
  <p class="error"><?php echo $error: ?></p><p class="success"><?php echo $success; ?></p>
    <form action="/welcome.blade.php" method="post">
    <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
      <h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="forgot-link">Forgot Password?</a>
        </div> 
        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">              
    </form>     
    <div class="text-center small">Don't have an account?<br> <a href="#">Sign up for teachers</a></div>
    <div class="text-center small"><a href="#">Sign up for students</a></div>
</div>
</div>
</section>
</body>
</head>
</html>