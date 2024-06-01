<?php 
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Signup Form
		</div>
		<div class="form">
			<div class="input_field">
				<label>First Name</label>
				<input type="text" class="input"  name="fname" required>
			</div>
			<div class="input_field">
				<label>Last Name</label>
				<input type="text" class="input" required name="lname">
			</div>
			<div class="input_field">
				<label>Password</label>
				<input type="password" class="input" required name="password">
			</div>
			<div class="input_field">
				<label>Confirm Paswword</label>
				<input type="password" class="input" required name="conpassword">
			</div>
			<div class="input_field">
				<label>Gender</label>
				<div class="custom_select">
					<select required name="gender">
					<option value="">Select</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				</div>
			</div>
			<div class="input_field">
				<label>Email Adress</label>
				<input type="email" class="input" required name="email">
			</div>
			<div class="input_field">
				<label>Phone Number</label>
				<input type="number" class="input" required name="phone">
			</div>
			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required >
					<span class="checkmark"></span>
				</label>
				<p>Agree to terms and conditions</p>
			</div>
			<div class="input_field">
				<input type="submit" value="Register" class="btn" name="register">
			</div>

		</div>
		</form>
	</div>
</body>

</html>

<?php 
	if($_POST['register']){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$pwd   = $_POST['password'];
		$cpwd  = $_POST['conpassword'];
		$gender= $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$query = "INSERT INTO signup(fname,lname,password,cpassword,gender,email,phone) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone')";
		$data = mysqli_query($conn,$query);
		if($data)
		{
			echo "<script>alert('Data Inserted into Database')</script>";
		}
		else{
			echo "<script>alert('failed')</script>;";
		}
		if($data == 1)
	{
		$_SESSION['user_name'] = $username;
		header('location:index.php');
	}
	else{
		echo "login failed";
	}
	}
?>




