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
					<li><a href="kitchen.php">Order Update</a></li>
					<li><a href="index.php">Back to Index</a></li>
					<!-- Need a logout -->
				</ul>
			</div><!-- End of menu div -->		
		</header><!-- End of header -->
		
		<div id="mainContent">
		
			<div id="loginForm">
				<form id="StaffLogin" method="post" action="loginBackEnd.php" autofocus autocomplete="off"><!-- autofocus & autocomplete don't look like they are working atm but they should work with a server-->
				   <span>Username:&nbsp;&nbsp;&nbsp;</span><br>
				  <input type="text" name="username"><br>
				   <span>Password:&nbsp;&nbsp;&nbsp;</span><br>
				  <input type="password" name="pass"><br>
				  <input id="LoginBtn" type="submit" value="Login"> <!--form should direct successful login to kitchen.php-->
				</form><!-- End of staffLogin -->
			</div><!-- End of loginForm -->
			
		</div><!-- End of mainContent div -->
		
		<footer>
		</footer><!-- End of footer -->
	</div><!-- End of wrapper div -->

</body>
</html> 