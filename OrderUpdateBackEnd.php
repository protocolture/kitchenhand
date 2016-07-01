<!-- kitchen-end message showing what is shown on display.php -->
<!DOCTYPE html>
<html>
<head>
<title>Order Updated</title>
<link rel="stylesheet" type="text/css" href="default.css">
</head>

<body>
	<div id="wrapper">
		<header>
			<ul>
				<li><a href="display.php">Bar Display</a></li>
				<li><a href="login.php">Staff Login</a></li>
				<li><a href="kitchen.php">Order Update</a></li>
			</ul>				
		</header><!-- End of header -->
		
		<div id="mainContent">
		<!-- script to show  -->
		</div><!-- End of mainContent div -->
		
		<footer>
		</footer><!-- End of footer -->
	</div><!-- End of wrapper div -->

</body>
</html> 


<?php

//connect to server 
include connection.php;

// get order number from input
$OrderToBeUpdate = $_POST["orderNum"];

$UpdateQuery = mysqli_query($conn, "INSERT INTO orders (orderNum, orderReady) VALUES ('"$OrderToBeUpdate"', '1')");
// 1 in orderReady = order is ready and displaying 
	//(display.php script: if orderReady == 1; echo"code to display order"; else echo "";)
//Should we have remove form for when the order is taken for behind the bar?
//database should auto-increment orderIndex



//check it is properly inserted into the correct row
//Display info that was inserted for user to check it is correct

//Close connection
 $conn->close();







/* 
This function will filter out letters out - helpful for if orders are just numbers:

if (filter_var($_POST["orderNum"], FILTER_VALIDATE_INT) === 0 || !filter_var($_POST["orderNum"], FILTER_VALIDATE_INT) === false) {
    echo(" ");
} else {
    echo("</br>Please enter only numbers</br>");
*/

?>
