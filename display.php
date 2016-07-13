<!DOCTYPE html>
<html>
<head>
<title>Index</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>

<body id="display">
	<div id="wrapper">
		<header>
		</header><!-- End of header -->
		
		<div id="mainContent">
			<div id="nowServing">
			<h1>Now Serving Order:</h1>
			</div> <!-- End of nowServing -->
			
			<div id="OrderServing">
				<!-- script for orders appearing here -->
				<?php
				include "connection.php";
				
				$orderFromDB = mysqli_query($conn, "SELECT orderNum FROM orders");
				
				$fetchedNum = mysqli_fetch_row($orderFromDB);
				
				foreach ($orderFromDB)
				{
					if (mysqli_num_rows ($orderFromDB) > 0)
					{
						echo <div class = order orderText><span>$fetchedNum</span></div>;
					}
				}
				?>

				<!-- <div class="order orderText"> -->
					<!--test order-->
					<!-- <span>50</span> -->
				<!-- </div> -->
			</div> <!-- End of OrderServing div -->
		</div><!-- End of mainContent div -->
		
		<footer>
		</footer><!-- End of footer -->
	</div><!-- End of wrapper div -->

</body>
</html> 