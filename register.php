<?php

	$db = mysqli_connect("localhost","root","","Online_address_book");

	if(isset($_POST['submit1']))
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$confirm=$_POST['confirm'];

		if($password==$confirm)
		{
			$sql="INSERT INTO Register (username,email,password) VALUES('$username','$email','$password')";
			mysqli_query($db,$sql);
			header("location:login.php");
		}
		else
		{
			echo "YOUR TWO PASSWORD DON't MATCH";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">

<!--Starting head section -->
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="css/main.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="style.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Register form</title>
	</head>

	<!--End of the head Section-->


	<body>  <!--Starting body section -->
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Please Sign Up</h1>
	               		<hr />
	               	</div>
	            </div> 

				<div class="main-login main-center">

					<!--Starting form section in head-->
					<form class="form-horizontal" name="form1" method="post" >
					
					
					<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
						<!--	<button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button> -->
						<input type="submit" class="btn btn-primary btn-lg btn-block login-button" name="submit1" value="Register">
						</div>
						<!--
						<div class="login-register">
				            <a href="index.php" class="btn btn-info">Login</a>
				         </div>
				         -->
					</form>

						<!--Ending form section in head-->
				</div>
			</div>
		</div>

		<script type="text/javascript" src="js/bootstrap.js"></script>
	</body> <!--Ending body section -->
</html>