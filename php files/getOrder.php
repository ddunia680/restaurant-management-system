<!DOCTYPE html>
<html>
<head>
	<title>getOrder</title>
	<style type="text/css">
		body {
			background-image: url("img/bg2.jpg");
		}
	</style>
</head>
<body>

<?php
if (isset($_POST['btn2'])) {
	$use=$_POST['user'];
	$foo=$_POST['food'];
	$quan=$_POST['quant'];
	$specif=$_POST['specy'];
	$amoun=$_POST['amount'];

}

$con=@mysqli_connect("localhost","root","") or die(@mysqli_error());

$db=@mysqli_select_db($con,"restaurant") or die(@mysqli_error($con));

$stat="insert into orders values(0,'$foo',$quan,'$specif',$amoun,$use)";

$result=@mysqli_query($con, $stat) or die(@mysqli_error($con));

@mysqli_close($con);
?>

<div align="Center" >
	<fieldset>
	<h3 align="Center">Oder submitted to the chief </br>Waiting for this reply</h3></br>
	<h5 align="Center">Press Down for a New Order</h5>
	<a href="Order.php" ><button name="proceed" align="Center" >New Order</button></a>
	</fieldset>
</div>

</body>
</html>