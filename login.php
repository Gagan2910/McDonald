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
<hr color=black size=5>
<form method=post action=verifyUser.php>
	<table align=center border=2 style="border-color:Green"> <tr> <td colspan=2> <h3>Staff login</h3> </td> </tr>
	       	<tr> <td> EnterID </td> 
		     <td> <input type=text name=userEmailID>
		     </td>
		</tr>
		
		 <tr> <td> Enter your Password </td> 
		     <td> <input type=password name=userPassword>
		     </td>
		</tr>

 		<tr> <td> <input type=reset> </td> 
		     <td> <input type=submit value="Login">
		     </td>
		</tr>
  </table>
</form>

<br><br>
<div class="footer">
<h3>Copywrite2018@yummyburgers</h3><h3>Follow us</h3><a href="#"><img src="images/facebook.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/twitter.jpg" style="width:40px;height:40px"></a><a href="#"><img src="images/Youtube.jpg" style="width:40px;height:40px"></a>
</div>
</body>
</html>