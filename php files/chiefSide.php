<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>chief</title>
	<style type="text/css">
		body {
			background-image: url("img/bg2.jpg");
		}
	</style>
</head>
<body>
	<?php
$con=@mysqli_connect("localhost","root","") or die(@mysqli_error());

$db=@mysqli_select_db($con,"restaurant") or die(@mysqli_error($con));

$stat="select * from orders";

$result=@mysqli_query($con, $stat) or die(@mysqli_error($con));

$value=@mysqli_fetch_array($result);

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

			<tr><td><button name="view" style="background-color: lightblue; color: darkblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="viewOrders.php">View Orders</a> </button></td></tr>

			<tr><td><button name="chief" style="background-color: darkblue; color: white; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="chiefSide.php">Chief Side</a> </button></td></tr>

			<tr><td><button name="createU" style="background-color: lightblue; color: darkblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="CreateUser.html">Create User</a> </button></td></tr>
		</tbody>
	</table>
		
	</div>

<div style="
     border: solid; 
     background-color: darkblue; 
     color: white;
     margin-top: -520px;
     margin-left: 200px;
     border-radius: 10px;
     margin-bottom: 3%;
     width: 80%;
	 height: 500px;
     text-align: center;
     overflow-x: hidden;
	 overflow-y: auto;
     ">
<h1 style="margin-left: 7%;">Orders to process :</h1>
<fieldset style="background-color: lightblue; color: darkblue; border-radius: 10px; margin-bottom: 1%;">
<table cellpadding="5" cellspacing="5" border="0">
	<thead></thead>
	<tbody>
		<?php
		while ($value=@mysqli_fetch_array($result)) {
		?>

		<tr>
			<td style="background-color: darkblue; color: white; border-radius: 10px;"><b>Order No:</b></td><td><?php echo $value["orderID"]; ?></td>
		</tr>
		<tr>
			<td >Order got by:</td><td><?php echo $value["user"]; ?></td>
			<td><b>Order:</b></td><td><?php echo $value["food"];?></td>
			<td><b>Quantity:</b></td><td><?php echo $value["quantity"];?></td>
			<td><b>Specification:</b></td><td><?php echo $value["specification"];?></td>
		</tr>
		<tr>
			<td colspan="8"><?php echo "_____________________________________________________________________________________________"; ?></td>
		</tr>
		<?php	
		}

@mysqli_close($con); 

?>
</tbody>
</table>
</fieldset>
</div>

</div>
</body>
</html>