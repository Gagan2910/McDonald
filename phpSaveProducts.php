<?php
  $host="localhost";
 $database="dbmcdonald";
 $user="root";
  $password="";
$connection=mysqli_connect($host,$user,$password,$database);
$productID=$_POST['productID'];
$productName=$_POST['productName'];
$productDescription=$_POST['productDescription'];
$productPrice=$_POST['productPrice'];
$productImage=$_POST['productImage'];

$query="insert into tblproducts values($productID,'$productName','$productDescription',$productPrice,'$productImage')";
$inserted=mysqli_query($connection,$query);
echo $inserted;
//echo "Query". $query;
?>