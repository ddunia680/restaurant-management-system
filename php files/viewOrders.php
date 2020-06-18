<!DOCTYPE html>
<html>
<head>
	<title>ViewOrders</title>
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

			<tr><td><button name="view" style="background-color: darkblue; color: white; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="ViewOrders.php">View Orders</a></button></td></tr>

			<tr><td><button name="chief" style="background-color: lightblue;color: darkblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="chiefSide.php">Chief Side</a></button></td></tr>

			<tr><td><button name="createU" style="background-color: lightblue; color: darkblue; height: 80px; width: 180px; font-family: Cooper Std Black; border-radius: 10px;"><a href="CreateUser.html">Create User</a></button></td></tr>
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
     margin-bottom: 3%;
     width: 80%;
     height: 500px;
	 overflow-x: hidden;
	 overflow-y: auto;
     ">
<h1 style="margin-left: 50px;">Orders:</h1>
<div style="margin-left: 21.5%" style="margin-bottom: 3%">
	<form style="margin-left: 400px; margin-bottom: 20px; margin-top: -40px;" name="frm2" method="POST" action="searchOrder.php">
	<input style="height: 30px; width: 200px; border-radius: 10px;" type="text" name="search_value" required=""> &nbsp;
	<button style="height: 30px; width: 80px; border-radius: 10px; font-family: Cooper Std Black; background-color: lightblue; " type="submit" name="search">Search</button>
	</form>
</div>
<fieldset style="background-color: lightblue; color: darkblue; border-radius: 10px; margin-bottom: 1%;">

<table cellpadding="10" cellspacing="10" border="1" style="border-radius: 10px;">
	<thead style="background-color: darkblue; color: white; border-radius: 10px;"><th>Order ID</th><th>Food ordered for</th><th>Quantity</th><th>Specifications</th><th>Amount Payed</th></thead>
	<tbody style="background-color: white; color: darkblue; border-radius: 10px;">
		<?php
		while ($value=@mysqli_fetch_array($result)) {
		?>

		<tr>
			<td><?php echo $value["orderID"];?></td>
			<td><?php echo $value["food"];?></td>
			<td><?php echo $value["quantity"];?></td>
			<td><?php echo $value["specification"];?></td>
			<td><?php echo $value["amount"];?></td>
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

