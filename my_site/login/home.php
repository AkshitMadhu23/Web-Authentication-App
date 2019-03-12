<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page </title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#535c68">
	<div id="main-wrapper">
	
	<center><h2>Home Page</h2></center>
	<center>
		<h3>Welcome
			<?php echo $_SESSION['username']
			?></h3>
	<img src="imgs/logo.jpg" class="logo"/>
</center>


	
	<input name="logout" type="button" id="logout_btn" value="Log Out"/>
</form>
<?php
if(isset($_POST['logout']))
{
	session_destroy();
	header('location:index.php');
}
?>

</div>


</body>
</html>