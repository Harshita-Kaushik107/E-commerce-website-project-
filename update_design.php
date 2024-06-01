<?php 
include("connection.php");
$id = $_GET['id'];
$query = "SELECT * FROM SIGNUP where id ='$id'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Update User Details
		</div>
		<div class="form">
			<div class="input_field">
				<label>First Name</label>
				<input type="text" value="<?php echo $result['fname']; ?>" class="input"  name="fname" required>
			</div>
			<div class="input_field">
				<label>Last Name</label>
				<input type="text" value="<?php echo $result['lname']; ?>" class="input" required name="lname">
			</div>
			<div class="input_field">
				<label>Password</label>
				<input type="password" value="<?php echo $result['password']; ?>"class="input" required name="password">
			</div>
			<div class="input_field">
				<label>Confirm Paswword</label>
				<input type="password" value="<?php echo $result['cpassword']; ?>" class="input" required name="conpassword">
			</div>
			<div class="input_field">
				<label>Gender</label>
				<div class="custom_select">
				<select required name="gender">
					<option value="">Select</option>
					<option value="male" <?php 
					if($result['gender']=='male')
					{
						echo 'selected';
					}
				?>
				>
			Male</option>
					<option value="female" <?php 
					if($result['gender']=='female')
					{
						echo 'selected';
					}
				?>>Female</option>
				</select>
				</div>
			</div>
			<div class="input_field">
				<label>Email Adress</label>
				<input type="email"value="<?php echo $result['email']; ?>" class="input" required name="email">
			</div>
			<div class="input_field">
				<label>Phone Number</label>
				<input type="number" value="<?php echo $result['phone']; ?>" class="input" required name="phone">
			</div>
			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required >
					<span class="checkmark"></span>
				</label>
				<p>Agree to terms and conditions</p>
			</div>
			<div class="input_field">
				<input type="submit" value="Update Details" class="btn" name="update">
			</div>

		</div>
		</form>
	</div>
</body>
</html>
<?php 
	if($_POST['update']){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$pwd   = $_POST['password'];
		$cpwd  = $_POST['conpassword'];
		$gender= $_POST['gender'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$query = "UPDATE signup Set fname='$fname',lname='$lname',password='$pwd',cpassword='$cpwd',gender='$gender',email='$email',phone='$phone'  WHERE id='$id' ";
		$data = mysqli_query($conn,$query);
		if($data)
		{
			echo "<script>alert('Record Updated')</script>";
			?>
				<meta http-equiv = "refresh" content = "0; url = http://localhost/authentication/display.php"/> <!--//automate update krke wo display page pr le jayega-?>
			<?php
			
		}
		else{
			echo "<script>alert('failed to update')</script>;";
		}
	}

?>