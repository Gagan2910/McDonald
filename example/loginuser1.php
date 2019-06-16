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
<hr>
<a href="index.php">Home</a>
<a href="addproducts.php">Add products</a>
<a href="loginuser.php">StaffLogin</a><br><br>

<?php
include("dbconnection.php");
$query="select * from tblproducts";
$result=mysqli_query($connection,$query);
echo"<h1> PRODUCTS </h1>";
	echo "<table border=3 bordercolor=black bgcolor=white align=center width=50%>";
	echo "<tr><td> Product ID </td><td> Product Name </td><td> Product Description </td> <td> Product Price </td> <td> Product image </td></tr>";

while($row = mysqli_fetch_row($result))
	{
          echo"<tr>";
          echo"<td>".$row[0]."</td>";
          echo"<td>".$row[1]."</td>";
           echo"<td>".$row[2]."</td>";
           echo"<td>".$row[3]."</td>";
           echo"<td> <img src=images/".$row[4]."></td>";
         }
            echo"</table>";

           mysqli_close($connection);
?>
<footer>Copywrite2018@yummyburgers</footer>
</body>


</html>