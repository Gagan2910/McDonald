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

<form method=post action=saveproduct.php>
<table align=center border=2 style="border-color:Green"><tr><td colspan=2><B>Enter Products Here</B></td></tr>
                <tr><td>Enter Product ID</td>
       <td><input type=text name=productID></td></tr>

       <tr><td>Enter Product Name</td>
       <td><input type=text name=productName></td></tr>

      <tr><td>Enter Product Description</td>
       <td><input type=text name=productDescription></td></tr>

       <tr><td>Enter Product Price</td>
       <td><input type=text name=productPrice></td>
       </tr>

          <tr><td>Enter Product image</td>
       <td><input type=text name=productImage></td>
       </tr>
        
         <tr><td><input type=reset></td>
       <td><input type=submit value="Add products"></td>
       </tr>
</table>
</form>
<br><br>
<div class="footer">
<h3>Copywrite2018@yummyburgers</h3><h3>Follow us</h3><a href="#"><img src="images/facebook.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/twitter.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/Youtube.jpg" style="width:40px;height:40px"></a>
</div>
</body>
</html>