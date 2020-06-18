<!DOCTYPE html>
<html>
<head>
	<title>Log Success</title>
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

}

$con=@mysqli_connect("localhost","root","") or die(@mysqli_error());

$db=@mysqli_select_db($con,"restaurant") or die(@mysqli_error($con));

$stat="insert into users values(0,'$user','$pass3')";

$result=@mysqli_query($con, $stat) or die(@mysqli_error($con));

@mysqli_close($con);


?>
<div align="Center" >
	<fieldset>
	<h3 align="Center">User <?php echo "$user"; ?> Created Successfully</h3></br>
	<h5 align="Center">Press the below button to create a new User</h5>
	<a href="CreateUser.html" ><button name="proceed" align="Center" >New</button></a>
	</fieldset>
</div>
</body>
</html>
