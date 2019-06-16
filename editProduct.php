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
$query="select * from tblproducts where productID = " . $pid;
	
	
	$result = mysqli_query($connection, $query);

	$row = mysqli_fetch_row($result);

	echo "<h1> PRODUCTS </h1> ";

	echo "<form  action=updateProduct.php method=POST>";
	echo "<table border=3 bordercolor=black bgcolor=white align=center width=50%>";

	echo "<tr> <td> Product ID </td>";
	echo "<td> <input name=productID type=text value=$pid>";

	echo "<tr> <td> Product Name </td>";
	echo "<td> <input name=productName type=text value=" . $row[1] . "> </td> </tr>";	
	
	echo "<tr> <td> Product Price </td> ";
	echo  "<td> <input name=productPrice type=text value=" . $row[3] . "> </td> 
	</tr> ";
	
	echo"<tr> <td> <a href=editProducts.php> C A N C E L </a> </td>";
	echo"<td> <input type=submit value=UPDATE></td> </tr>";
          echo "</table>";

	echo "</form>";
         mysqli_close($connection);
        
?>
<br><br>
<div class="footer">
<h3>Copywrite2018@yummyburgers</h3><h3>Follow us</h3><a href="#"><img src="images/facebook.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/twitter.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/Youtube.jpg" style="width:40px;height:40px"></a>
</div>
</body>
</html>


           