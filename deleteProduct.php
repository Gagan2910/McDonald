<html>
<head>
<link rel="stylesheet" text="text/css" href="style1.css">
</head>

<body>
<header>
<table border=0>
<tr><td colspan=3><img src="images/421.jpg" alt="hello" style="width:400px;height:200px"></td><td><img src="images/422.jpg" alt="hello"style="width:400px;height:200px"></td>
<td><img src="images/423.jpg" alt="hello" style="width:400px;height:200px"></td></tr>
</table>
</header>
<hr color=black size=5>
<div class="topnav">
   
  <h2> 
   <a href="default.php">Home</a>
   <a href="viewproducts.php">Products</a>
   <a href="login.php">StaffLogin</a>
   
  
  </h2>
</div>


<?php

include("dbconnection.php");
        $pid = $_GET["productID"];
	

	
echo "<h3> Are you sure you want to delete the product information ? </h3>";

echo "<a href=confirmDelete.php?productID=$pid> Y E S </a>  <br> <br>";

echo "<a href=editProducts.php> N O </a> <br><br>"; 
  mysqli_close($connection);
        
        
        
?>
<br><br>
       <div class="footer">
<h3>Copywrite2018@yummyburgers</h3><h3>Follow us</h3><a href="#"><img src="images/facebook.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/twitter.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/Youtube.jpg" style="width:40px;height:40px"></a>
</div>
</body>
</html>





           