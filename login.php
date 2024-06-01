<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<form action="#" method="POST" autocomplete="off">
	<div class="center">
		<h1>Login page</h1>
		<div class="form">
			<input type="text" name="username" class="textfield" placeholder="User name" required>
			<input type="password" name="password" class="textfield" placeholder="password" required>
			<div class="forgetpass"><a href="#" class="link" onclick="message()">Forget password?</a></div>
			<input type="submit" name="login" value="Login" class="btn">
			<div class="signup">New Member?<a href="registration.php" class="link">Signup here</a></div>
		</div>
	</div>
	</form>
	<script>
		function message()                
		{
			alert("Toh password yaad kro");
		}
	</script>
</body>
</html>
<?php 
include("connection.php");
if(isset($_POST['login']))  //submit button name
{
	$username = $_POST['username'];
	$pwd = $_POST['password'];
	$query ="SELECT * from signup WHERE email='$username' && password ='$pwd' ";
	$data = mysqli_query($conn,$query);  //query chali h ya nhi
	$total = mysqli_num_rows($data);   	//kitne records available h
	echo $total;
	if($total == 1)
	{
		$_SESSION['user_name'] = $username;
		header('location:index.php');
	}
	else{
		echo "login failed";
	}
}
?>