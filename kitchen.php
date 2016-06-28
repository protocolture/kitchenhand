<!--Session check php code here-->

<!DOCTYPE html>
<html>
<head>
<title>Index</title>
<link rel="stylesheet" type="text/css" href="default.css">
</head>

<body>
	<div id="wrapper">
		<header>
			<div id="menu">
				<ul>
					<li><a href="display.php">Bar Display</a></li>
					<li><a href="login.php">Staff Login</a></li>
					<li><a href="index.php">Back to Index</a></li>
					<!-- Need a logout form-->
				</ul>
			</div><!-- End of menu div -->		
		</header><!-- End of header -->
		
		<div id="mainContent">
			
			<div id="updateForm">
			<h2>Display new Now Serving Order form:</h2>
				<form id="orderUpdate" method="post" action="OrderUpdateBackEnd.php" autofocus autocomplete="off"><!-- autofocus & autocomplete don't look like they are working atm but they should work with a server-->
					<span>Enter finished order number:&nbsp;&nbsp;&nbsp;</span>
					<input type="text" name="orderNum"><br>
					<input id="orderUpdateBtn" type="submit" value="Update Order">
				</form><!-- End of orderUpdate -->
			</div><!-- End of updateForm div -->
			<br>
			<div id="removeForm">
			<h2>Remove order from Display form:</h2>
				<form id="removeOrder" method="post" action="removeOrderBackEnd.php" autocomplete="off">
					<span>Enter order number to be removed:&nbsp;&nbsp;&nbsp;</span>
					<input type="text" name="removeOrderNum"><br>
					<input id="removeOrderBtn" type="submit" value="Remove Order">
				</form><!-- End of removeOrder -->
			</div><!-- End of removeForm div -->
			<br>
			<div id="resetDisplay">
				<form id="resetDisplayForm" method="post" action="resetDisplayBackEnd">
				<input type="checkbox" name="Reset" value="YesReset"><span>I am certain I want to reset&nbsp;&nbsp;&nbsp;</span><!--not certain if this is the best way do this, maybe a popup -->
				<input id="resetDisplayBtn" type="submit" value="Reset Bar Display">
			</div><!-- End of resetDisplay div -->
			
		</div><!-- End of mainContent div -->
		
		<footer>
		</footer><!-- End of footer -->
	</div><!-- End of wrapper div -->

</body>
</html> 