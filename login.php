<?php
$db=mysqli_connect("localhost","root","","Online_address_book");

if(isset($_POST['login_btn']))
{

    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT *FROM Register WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result)==1)
    {
        header("location:index.php");
    } 

    else

    {
        echo "successfully not login";
    }
}



?>

<!DOCTYPE html>

<html tag="en-US">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Login frame</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="login_style.css"/>

</head>

<body>

	<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
         <!--   <img id="profile-img" class="profile-img-card" src="images.jpg" />-->
			<img src="login.png" class="img-responsive img-circle"/>
            <p id="profile-name" class="profile-name-card"></p>
              <form name="form2" method="post" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>

                <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Email address" >
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">

                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>

                <input type="submit" name="login_btn" class="btn btn-lg btn-primary btn-block btn-signin" value="Sign in">

            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
	
	
	<script type="text/javascript" src="js/jquery.js"> </script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="login_script.js"></script>

</body>

</html>





