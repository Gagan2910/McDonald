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
$query="select * from tblproducts";
$result=mysqli_query($connection,$query);
echo"<h1> PRODUCTS </h1>";
	echo "<table border=3 bordercolor=black bgcolor=white align=center width=50%>";
	echo "<tr> <td> Product ID </td> <td> Product Name </td><td> Product Description </td> <td> Product Price </td> <td> Product Image </td> <td>Edit? </td><td>Delete? </td></tr>";
	while($row = mysqli_fetch_row($result))
	{
		echo "<tr> ";
		echo "<td>  " . $row[0] . "</td> ";
		echo "<td> " . $row[1] . "</td> ";
		echo "<td> " . $row[2] . "</td> ";
		echo "<td> " . $row[3] . " </td>";
                echo "<td><img src=images/" . $row[4] . ".></td>";
		echo "<td align=center>  <a href=editProduct.php?productID=" . $row[0] . "> Edit </a> </td>";
                echo "<td align=center>  <a href=deleteProduct.php?productID=" . $row[0] . "> Delete </a> </td>"; 
		echo "</tr>";
	}
	echo "</table>";


           mysqli_close($connection);
?>
<br><br>
<div class="footer">
<h3>Copywrite2018@yummyburgers</h3><h3>Follow us</h3><a href="#"><img src="images/facebook.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/twitter.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/Youtube.jpg" style="width:40px;height:40px"></a>
</div>
</body>
</html>
