<!DOCTYPE html>
<html>
<head>
	<title>UserLogin</title>
</head>
<body>
	<div align="center" style="
	background-color: lightblue;
	width: 50%;
	margin-left: 25%;
	margin-top: 10%;
	padding: 3%;
	border-radius: 10px;

	">
	<h1 style="color: darkblue">Please Enter Your Details:</h1>
	<form method="POST" action="Userlogin.php">
		<table border="0" cellpadding="10" cellspacing="10">
			<thead></thead>
			<tbody>
				<tr><td style="color: darkblue">Username: </td><td><input type="text" name="user" style="border:hidden; height: 30px; color: lightblue;" ></td></tr>
				<tr><td style="color: darkblue">Password: </td><td><input type="password" name="pass" style="border:hidden; height: 30px; color: lightblue;"></td></tr>
				<tr><td></td><td><button name="log" style="background-color: darkblue; color: white; width: 100px; height: 50px; border-radius: 10px;">Submit</button></td></tr>
			</tbody>
		</table>
	</form>

	</div>

</body>
</html>

<?php 
    if (isset($_POST['log'])) {
    $userN=$_POST['user'];
    $passW=$_POST['pass'];

    //starting encryption
	$pass1=hash('sha256', $passW);
	$pass2=hash('haval224,5', $pass1);
	$pass3=hash('gost', $pass2);

$con=@mysqli_connect("localhost","root","") or die(@mysqli_error());

$db=@mysqli_select_db($con,"restaurant") or die(@mysqli_error($con));

$stat="select count(*) from users where username='$userN' AND password='$pass3'";

$result=@mysqli_query($con,$stat) or die(@mysqli_error($con));

$value=@mysqli_fetch_array($result);
//code for viewing all the encryption algorithms: print_r(hash_algos()); 
$No_Record=$value[0];
     	if($No_Record==1){

     		header("location:Order.php");
     	}
     	else{
     	?>
     	<script type="text/javascript">
     		alert("Username and password are not martching!!!");
     	</script>
     	<?php
     	}

     }

 ?>