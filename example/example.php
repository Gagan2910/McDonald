<html>
<head></head>
<body bgcolor=pink text=blue>
<?php
    include("dbConnection.php");
    $query="select * from tblproducts";
    $result= mysqli_query($connection,$query);
    echo "<h1> Products </h1>";
    while($row = mysqli_fetch_row($result))
     {
var_dump($row);
 echo"<hr>";
     }
  
?>
</body>
</html>