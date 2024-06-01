<html>
<head>
	<title>Display</title>
	<style>
		body{
			background-color: #d071f9;
		}
		table{
			background-color: white;
		}
		.update,.delete{
			background-color: green;
			color:white;
			border: 0;
			outline:none;
			border-radius: 5px;
			height:26px;
			width:80px;
			font-weight: bold;
			cursor: pointer;
		}
		.delete{
			background-color: red;
		}
	</style>
</head>
<?php
include("connection.php");
$query = "SELECT * FROM SIGNUP";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);    //how much number of records/rows are present in database
//echo "$total";
if($total != 0)
 {
 	?>
 	<h2 align="center">Displaying all signup records</h2>
 	<center>
 	<table border="1" cellspacing="7" width="85%" align="center">
 		<tr>
 		<th width="5%">Id</th>
 		<th width="10%">First Name</th>
 		<th width="8%">Last Name</th>
 		<th width="8%">Password</th>
 		<th width="20%">Gender</th>
 		<th width="10%">Phone Number</th>
 		<th width="24%">Email Id</th>
 		<th width="15%">Operations</th>
 	</tr>
 	<?php
 	while($result = mysqli_fetch_assoc($data)) //data ko array k format me lekr aata h
 	{
 		echo "<tr>
 				<td>".$result['id']."</td>
		 		<td>".$result['fname']."</td>
		 		<td>".$result['lname']."</td>
		 		<td>".$result['password']."</td>
		 		<td>".$result['gender']."</td>
		 		<td>".$result['phone']."</td>
		 		<td>".$result['email']."</td>
		 		<td><a href='update_design.php?&id=$result[id]'><input type='submit' value='Update' class='update'></a>
		 		<a href='delete.php?&id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'>
		 		</a></td>
		 	</tr>";
 	}
 }
 else
 {
 	echo "no record found";
 }
?>
</table>
</center>
<script>
	function checkdelete(){
		return confirm('Are you Sure you want to delete this record ?');
	}
</script>
</html>
