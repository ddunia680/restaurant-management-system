<!DOCTYPE html>
<html>
<head>
	<title>Log Success</title>
	<style type="text/css">
		body {
			background-image: url("img/bg2.jpg");
		}
	</style>
</head>
<body>



<?php
if (isset($_POST['btn1'])) {
	$user=$_POST['username'];
	$passw=$_POST['pass'];

	//starting encryption
	$pass1=hash('sha256', $passw);
	$pass2=hash('haval224,5', $pass1);
	$pass3=hash('gost', $pass2);



$con=@mysqli_connect("localhost","root","") or die(@mysqli_error());

$db=@mysqli_select_db($con,"restaurant") or die(@mysqli_error($con));

$stat="insert into users values(0,'$user','$pass3')";

$result=@mysqli_query($con, $stat) or die(@mysqli_error($con));

@mysqli_close($con);

}

?>

<div style="border: solid; border-radius: 10px;">
    <div style="
	width: 15%;
	background-color: lightblue;
	height: 70%;
	border-radius: 10px;
	margin-left: 0.5%;
	">
	<h3 style="padding: 7%; font-family: Cooper Std Black;" align="center">Dunia's Restaurant</h3>
	<table border="0">
		<thead></thead>
		<tbody>
			<tr><td><img style="border-radius: 100px; margin-left: 40px;" src="img/new_logo.png"></td></tr>
			<tr><td><img src=""></td></tr>

			<tr><td><button name="reg" style="background-color: lightblue; color: darkblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="Order.php">Register an Order</a></button></td></tr>

			<tr><td><button name="view" style="background-color: lightblue; color: darkblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="viewOrders.php">View Orders</a></button></td></tr>

			<tr><td><button name="chief" style="background-color: lightblue; color: darkblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="chiefSide.php">Chief Side</a></button></td></tr>

			<tr><td><button name="createU" style="background-color: darkblue; color: white; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="CreateUser.html">Create User</a></button></td></tr>
		</tbody>
	</table>
		
	</div>
<div style="
     border: solid; 
     background-color: darkblue; 
     color: white;
     margin-top: -500px;
     margin-left: 200px;
     border-radius: 10px;
     margin-bottom: 10%;
">
	<fieldset style="
	background-color: lightblue; 
	color: darkblue; 
	border-radius: 10px; 
	margin-bottom: 10%;
	margin-left: 20%;
	margin-right: 20%;
	margin-top: 10%">
	<h3 align="Center">User <?php echo "$user"; ?> Created Successfully</h3></br>
	<h5 align="Center">Press the below button to create a new User</h5>
	<a href="CreateUser.html" ><button name="proceed" style="background-color: darkblue; color: white; height: 40px; width: 150px; border-radius: 10px; margin-left: 40%" >New</button></a>
	</fieldset>
</div>
</div>
</body>
</html>
