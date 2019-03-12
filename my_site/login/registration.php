<?php
 require 'dbconfig/config.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page </title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#535c68">
	<div id="main-wrapper">
	
	<center><h2>Registration Page</h2></center>
	<center>
	<img src="imgs/logo.jpg" class="logo"/>
</center>

<form  class="myform" action="registration.php" method="post">
	<label>Full name</label>
	<input type="text" class="input values" placeholder="Type your full name"><br>
	<label>Gender:</label>
	<input type="radio" class="radiobtn" name="male" value="male"checked requireds>Male
	<input  type="radio" class="radiobtn"  name="female" value="female" required>Female
	<br>
	<label><b>Qualification:</b></label>
	<select class="qualification" name="qualification">
		<option>B.tech CSE-CCV</option>
		<option>B.tech M.E</option>
		<option>B.tech E.E</option>
	</select>
	<br>s


	<label><b>Username</b></label>
	<input name="username" type="text" class="inputvalues" placeholder="type your username" required>
	<br>
	<label><b>Password</b></label>
	<input name="pass" type="password" class="inputvalues" placeholder="Type your password" required>
	<br>
	<label><b>Confirm Password</b></label>
	<input name="cpass" type="password" class="inputvalues" placeholder="Confirm password" required>
	<br>
	<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"  /><br>
	<a href="index.php"><input type="button" id="back_btn" value="Go Back"/>
</form>
</div>
</body>
</html>
<?php

if(isset($_POST['submit_btn']))
{
	//echo '<script type ="text/javascript">alert("Sign up button clicked")</script>';
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

	if($cpass==$pass)
	{
		$query="select= from users_info WHERE username=$'username'";
		$result = mysqli_query($con,$query);

		if(mysqli_num_rows($result)>0)
		{
			echo '<script type ="text/javascript">alert("user already exits...try another user")</script>';
		}
		{
			$query="insert into users_info values('$username','$pass')";
		}
		if($result)
		{
			echo '<script type ="text/javascript">alert("user registered .....go to login page")</script>';
		}
		else
		{
			echo '<script type ="text/javascript">alert("Error")</script>';
		}
	}
}
