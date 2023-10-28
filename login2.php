<?php
    session_start();
    $database_name = "signup_db";
    $con = mysqli_connect("localhost","root","",$database_name);
   
if(isset($_SESSION["uname"]) && $_SESSION["password"] === true){
    header("location: Home.php"); 
}
?>




<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body background="Images/login.jpg" style="background-repeat:no-repeat; background-size:100% ">

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
	

	<div id="box">
		
		<form method="post" action="">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="user_name" placeholder="user_name"><br><br>
			<input id="text" type="password" name="password" placeholder="password"><br><br>

			<input id="button" type="submit" value="Login" name="submit"><br><br>
		
			<div style="font-size: 15px;margin: 10px;color: white;">Don't have an account? <a href="signup.php">Click Signup</a></div><br><br>
		</form>
	</div>
</body>
</html>